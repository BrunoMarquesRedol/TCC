<?php
// Ativar relatório de erros
error_reporting(E_ALL);
ini_set('display_errors', 1);

// Gerenciamento de sessão
if (session_status() === PHP_SESSION_NONE) {
    session_start();
}

// Verificar se está logado
if (!isset($_SESSION['admin_logged_in']) || $_SESSION['admin_logged_in'] !== true) {
    header('Location: admin_login.php');
    exit;
}

// Conectar ao banco de dados
$conn = new mysqli("localhost", "root", "", "desenvolvetec");
if ($conn->connect_error) {
    die("Erro de conexão: " . $conn->connect_error);
}

// Processar logout
if (isset($_GET['logout'])) {
    session_destroy();
    header('Location: admin_login.php');
    exit;
}

// Processar exclusão de registro
if (isset($_GET['excluir']) && isset($_GET['tabela'])) {
    $id = intval($_GET['excluir']);
    $tabela = $_GET['tabela'];
    
    if ($tabela === 'orcamentos') {
        $conn->query("DELETE FROM orcamentos WHERE id = $id");
    } elseif ($tabela === 'equipe') {
        $conn->query("DELETE FROM equipe WHERE id = $id");
    } elseif ($tabela === 'usuarios' && isset($_SESSION['admin_nivel']) && $_SESSION['admin_nivel'] === 'admin') {
        // Não permitir excluir o próprio usuário
        if ($id != $_SESSION['admin_id']) {
            $conn->query("DELETE FROM usuarios WHERE id = $id");
        }
    }
    
    header("Location: admin_dashboard.php?tabela=$tabela");
    exit;
}

// Processar adição/edição de membros
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    if (isset($_POST['adicionar_membro'])) {
        $nome = $conn->real_escape_string($_POST['nome']);
        $cargo = $conn->real_escape_string($_POST['cargo']);
        $foto = $conn->real_escape_string($_POST['foto']);
        
        $conn->query("INSERT INTO equipe (nome, cargo, foto) VALUES ('$nome', '$cargo', '$foto')");
        
        header("Location: admin_dashboard.php?tabela=equipe");
        exit;
    }
    
    if (isset($_POST['adicionar_usuario']) && isset($_SESSION['admin_nivel']) && $_SESSION['admin_nivel'] === 'admin') {
        $username = $conn->real_escape_string($_POST['username']);
        $password = password_hash($conn->real_escape_string($_POST['password']), PASSWORD_DEFAULT);
        $nome = $conn->real_escape_string($_POST['nome']);
        $email = $conn->real_escape_string($_POST['email']);
        $nivel = $conn->real_escape_string($_POST['nivel']);
        
        $conn->query("INSERT INTO usuarios (username, password, nome, email, nivel) 
                     VALUES ('$username', '$password', '$nome', '$email', '$nivel')");
        
        header("Location: admin_dashboard.php?tabela=usuarios");
        exit;
    }
}

// Determinar qual tabela visualizar
$tabela = $_GET['tabela'] ?? 'orcamentos';

// Buscar dados da tabela selecionada
$dados = [];
$colunas = [];

if ($tabela === 'orcamentos') {
    $result = $conn->query("SELECT * FROM orcamentos ORDER BY id DESC");
    if ($result) {
        while ($row = $result->fetch_assoc()) {
            $dados[] = $row;
        }
        if (!empty($dados)) {
            $colunas = array_keys($dados[0]);
        }
    }
} elseif ($tabela === 'equipe') {
    $result = $conn->query("SELECT * FROM equipe");
    if ($result) {
        while ($row = $result->fetch_assoc()) {
            $dados[] = $row;
        }
        if (!empty($dados)) {
            $colunas = array_keys($dados[0]);
        }
    }
} elseif ($tabela === 'usuarios' && isset($_SESSION['admin_nivel']) && $_SESSION['admin_nivel'] === 'admin') {
    $result = $conn->query("SELECT id, username, nome, email, nivel, data_criacao FROM usuarios ORDER BY id DESC");
    if ($result) {
        while ($row = $result->fetch_assoc()) {
            $dados[] = $row;
        }
        if (!empty($dados)) {
            $colunas = array_keys($dados[0]);
        }
    }
}

// Estatísticas
$total_orcamentos = $conn->query("SELECT COUNT(*) as total FROM orcamentos")->fetch_assoc()['total'];
$total_equipe = $conn->query("SELECT COUNT(*) as total FROM equipe")->fetch_assoc()['total'];
$total_usuarios = $conn->query("SELECT COUNT(*) as total FROM usuarios")->fetch_assoc()['total'];
$orcamentos_recentes = $conn->query("SELECT COUNT(*) as total FROM orcamentos WHERE data_envio >= NOW() - INTERVAL 7 DAY")->fetch_assoc()['total'];

$conn->close();
?>
<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard - DesenvolveTec</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            background-color: #f5f5f5;
            color: #333;
            line-height: 1.6;
        }

        .header {
            background: linear-gradient(135deg, #13293D, #006494);
            color: white;
            padding: 1rem 2rem;
            display: flex;
            justify-content: space-between;
            align-items: center;
            box-shadow: 0 2px 10px rgba(0,0,0,0.1);
        }

        .header h1 {
            font-size: 1.5rem;
            font-weight: 600;
        }

        .user-info {
            display: flex;
            align-items: center;
            gap: 1rem;
        }

        .logout-btn {
            color: white;
            text-decoration: none;
            padding: 0.5rem 1rem;
            border: 1px solid rgba(255,255,255,0.3);
            border-radius: 5px;
            transition: all 0.3s ease;
            display: flex;
            align-items: center;
            gap: 0.5rem;
        }

        .logout-btn:hover {
            background: rgba(255,255,255,0.1);
        }

        .container {
            max-width: 1200px;
            margin: 0 auto;
            padding: 2rem;
        }

        .stats {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
            gap: 1.5rem;
            margin-bottom: 2rem;
        }

        .stat-card {
            background: white;
            padding: 1.5rem;
            border-radius: 10px;
            box-shadow: 0 2px 10px rgba(0,0,0,0.1);
            text-align: center;
            border-left: 4px solid #1B98E0;
        }

        .stat-card h3 {
            color: #666;
            font-size: 0.9rem;
            margin-bottom: 0.5rem;
            text-transform: uppercase;
            letter-spacing: 0.5px;
        }

        .number {
            font-size: 2.5rem;
            font-weight: bold;
            color: #13293D;
            margin: 0.5rem 0;
        }

        .subtitle {
            color: #888;
            font-size: 0.9rem;
        }

        .tabs {
            display: flex;
            gap: 1rem;
            margin-bottom: 2rem;
            border-bottom: 1px solid #ddd;
            padding-bottom: 1rem;
        }

        .tab {
            padding: 0.8rem 1.5rem;
            text-decoration: none;
            color: #666;
            border-radius: 5px;
            transition: all 0.3s ease;
            display: flex;
            align-items: center;
            gap: 0.5rem;
        }

        .tab:hover {
            background: #f0f0f0;
        }

        .tab.active {
            background: #1B98E0;
            color: white;
        }

        .data-container {
            background: white;
            border-radius: 10px;
            box-shadow: 0 2px 10px rgba(0,0,0,0.1);
            overflow: hidden;
        }

        .table-header {
            padding: 1.5rem;
            border-bottom: 1px solid #eee;
            display: flex;
            justify-content: space-between;
            align-items: center;
        }

        .table-header h2 {
            color: #13293D;
            font-size: 1.3rem;
        }

        .add-btn {
            background: #28a745;
            color: white;
            border: none;
            padding: 0.7rem 1.2rem;
            border-radius: 5px;
            cursor: pointer;
            display: flex;
            align-items: center;
            gap: 0.5rem;
            transition: background 0.3s ease;
        }

        .add-btn:hover {
            background: #218838;
        }

        .data-table {
            width: 100%;
            border-collapse: collapse;
        }

        .data-table th,
        .data-table td {
            padding: 1rem;
            text-align: left;
            border-bottom: 1px solid #eee;
        }

        .data-table th {
            background: #f8f9fa;
            font-weight: 600;
            color: #495057;
        }

        .data-table tr:hover {
            background: #f8f9fa;
        }

        .actions {
            display: flex;
            gap: 0.5rem;
        }

        .btn {
            padding: 0.5rem;
            border: none;
            border-radius: 4px;
            cursor: pointer;
            transition: all 0.3s ease;
            display: flex;
            align-items: center;
            justify-content: center;
        }

        .btn-view {
            background: #17a2b8;
            color: white;
        }

        .btn-delete {
            background: #dc3545;
            color: white;
        }

        .btn:hover {
            opacity: 0.8;
            transform: translateY(-1px);
        }

        .empty-message {
            padding: 3rem;
            text-align: center;
            color: #666;
            font-style: italic;
        }

        .modal {
            display: none;
            position: fixed;
            z-index: 1000;
            left: 0;
            top: 0;
            width: 100%;
            height: 100%;
            background-color: rgba(0,0,0,0.5);
            align-items: center;
            justify-content: center;
        }

        .modal-content {
            background: white;
            border-radius: 10px;
            width: 90%;
            max-width: 600px;
            max-height: 80vh;
            overflow-y: auto;
            box-shadow: 0 10px 30px rgba(0,0,0,0.3);
        }

        .modal-header {
            padding: 1.5rem;
            border-bottom: 1px solid #eee;
            display: flex;
            justify-content: space-between;
            align-items: center;
        }

        .modal-header h2 {
            color: #13293D;
            margin: 0;
        }

        .close-modal {
            background: none;
            border: none;
            font-size: 1.5rem;
            cursor: pointer;
            color: #666;
        }

        .modal-buttons {
            padding: 1.5rem;
            border-top: 1px solid #eee;
            display: flex;
            gap: 1rem;
            justify-content: flex-end;
        }

        .form-group {
            margin-bottom: 1rem;
            padding: 0 1.5rem;
        }

        .form-group label {
            display: block;
            margin-bottom: 0.5rem;
            font-weight: 600;
            color: #495057;
        }

        .form-group input,
        .form-group select,
        .form-group textarea {
            width: 100%;
            padding: 0.8rem;
            border: 1px solid #ddd;
            border-radius: 5px;
            font-size: 1rem;
        }

        .form-group input:focus,
        .form-group select:focus,
        .form-group textarea:focus {
            outline: none;
            border-color: #1B98E0;
            box-shadow: 0 0 0 2px rgba(27, 152, 224, 0.2);
        }

        .nivel-badge {
            padding: 0.3rem 0.8rem;
            border-radius: 20px;
            font-size: 0.8rem;
            font-weight: 600;
            background: #28a745;
            color: white;
        }

        .nivel-badge.admin {
            background: #dc3545;
        }

        @media (max-width: 768px) {
            .container {
                padding: 1rem;
            }

            .stats {
                grid-template-columns: 1fr;
            }

            .tabs {
                flex-direction: column;
            }

            .table-header {
                flex-direction: column;
                gap: 1rem;
                align-items: flex-start;
            }

            .data-table {
                font-size: 0.9rem;
            }

            .actions {
                flex-direction: column;
            }
        }
    </style>
</head>
<body>
    <div class="header">
        <h1>Painel Administrativo - DesenvolveTec</h1>
        <div class="user-info">
            <span>Olá, <?php echo isset($_SESSION['admin_nome']) ? $_SESSION['admin_nome'] : 'Usuário'; ?> (<?php echo isset($_SESSION['admin_nivel']) ? $_SESSION['admin_nivel'] : 'N/A'; ?>)</span>
            <a href="?logout=true" class="logout-btn">
                <i class="fas fa-sign-out-alt"></i> Sair
            </a>
        </div>
    </div>
    
    <div class="container">
        <div class="stats">
            <div class="stat-card">
                <h3>Total de Orçamentos</h3>
                <div class="number"><?php echo $total_orcamentos; ?></div>
                <div class="subtitle">Solicitações recebidas</div>
            </div>
            
            <div class="stat-card">
                <h3>Membros da Equipe</h3>
                <div class="number"><?php echo $total_equipe; ?></div>
                <div class="subtitle">Integrantes cadastrados</div>
            </div>
            
            <div class="stat-card">
                <h3>Usuários do Sistema</h3>
                <div class="number"><?php echo $total_usuarios; ?></div>
                <div class="subtitle">Contas de acesso</div>
            </div>
            
            <div class="stat-card">
                <h3>Novos esta semana</h3>
                <div class="number"><?php echo $orcamentos_recentes; ?></div>
                <div class="subtitle">Solicitações recentes</div>
            </div>
        </div>
        
        <div class="tabs">
            <a href="?tabela=orcamentos" class="tab <?php echo $tabela === 'orcamentos' ? 'active' : ''; ?>">
                <i class="fas fa-file-invoice"></i> Solicitações de Orçamento
            </a>
            <a href="?tabela=equipe" class="tab <?php echo $tabela === 'equipe' ? 'active' : ''; ?>">
                <i class="fas fa-users"></i> Equipe
            </a>
            <?php if (isset($_SESSION['admin_nivel']) && $_SESSION['admin_nivel'] === 'admin'): ?>
            <a href="?tabela=usuarios" class="tab <?php echo $tabela === 'usuarios' ? 'active' : ''; ?>">
                <i class="fas fa-user-cog"></i> Usuários
            </a>
            <?php endif; ?>
        </div>
        
        <div class="data-container">
            <div class="table-header">
                <h2>
                    <?php 
                    if ($tabela === 'orcamentos') echo 'Solicitações de Orçamento';
                    elseif ($tabela === 'equipe') echo 'Membros da Equipe';
                    elseif ($tabela === 'usuarios') echo 'Usuários do Sistema';
                    ?>
                </h2>
                <div>
                    <span><?php echo count($dados); ?> registros</span>
                    
                    <?php if ($tabela === 'equipe'): ?>
                    <button class="add-btn" onclick="abrirModalAdicionarMembro()">
                        <i class="fas fa-plus"></i> Adicionar Membro
                    </button>
                    <?php endif; ?>
                    
                    <?php if ($tabela === 'usuarios' && isset($_SESSION['admin_nivel']) && $_SESSION['admin_nivel'] === 'admin'): ?>
                    <button class="add-btn" onclick="abrirModalAdicionarUsuario()">
                        <i class="fas fa-plus"></i> Adicionar Usuário
                    </button>
                    <?php endif; ?>
                </div>
            </div>
            
            <?php if (!empty($dados)): ?>
                <table class="data-table">
                    <thead>
                        <tr>
                            <?php foreach ($colunas as $coluna): ?>
                                <th><?php echo ucfirst(str_replace('_', ' ', $coluna)); ?></th>
                            <?php endforeach; ?>
                            <th>Ações</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php foreach ($dados as $linha): ?>
                            <tr>
                                <?php foreach ($colunas as $coluna): ?>
                                    <td>
                                        <?php 
                                        $value = $linha[$coluna] ?? '';
                                        if ($coluna === 'foto') {
                                            if (!empty($value)) {
                                                echo '<img src="' . htmlspecialchars($value) . '" width="50" height="50" style="object-fit: cover; border-radius: 5px;" onerror="this.style.display=\'none\'; this.nextElementSibling.style.display=\'flex\';">';
                                                echo '<div style="width:50px; height:50px; background:#ddd; border-radius:5px; display:none; align-items:center; justify-content:center; color:#666; font-size:12px;">';
                                                echo '<i class="fas fa-user"></i>';
                                                echo '</div>';
                                            } else {
                                                echo '<div style="width:50px; height:50px; background:#ddd; border-radius:5px; display:flex; align-items:center; justify-content:center; color:#666;">';
                                                echo '<i class="fas fa-user"></i>';
                                                echo '</div>';
                                            }
                                        } elseif ($coluna === 'servicos' && !empty($value)) {
                                            echo '<div title="' . htmlspecialchars($value) . '" style="max-width: 200px; overflow: hidden; text-overflow: ellipsis; white-space: nowrap;">' . htmlspecialchars($value) . '</div>';
                                        } elseif ($coluna === 'detalhes' && !empty($value)) {
                                            echo '<div title="' . htmlspecialchars($value) . '" style="max-width: 300px; overflow: hidden; text-overflow: ellipsis; white-space: nowrap;">' . htmlspecialchars($value) . '</div>';
                                        } elseif ($coluna === 'nivel') {
                                            echo '<span class="nivel-badge ' . htmlspecialchars($value) . '">' . htmlspecialchars($value) . '</span>';
                                        } else {
                                            echo htmlspecialchars($value);
                                        }
                                        ?>
                                    </td>
                                <?php endforeach; ?>
                                <td>
                                    <div class="actions">
                                        <button class="btn btn-view" onclick="verDetalhes(<?php echo htmlspecialchars(json_encode($linha)); ?>)">
                                            <i class="fas fa-eye"></i>
                                        </button>
                                        <?php if (($tabela === 'equipe') || ($tabela === 'usuarios' && isset($_SESSION['admin_id']) && $linha['id'] != $_SESSION['admin_id'])): ?>
                                        <button class="btn btn-delete" onclick="confirmarExclusao(<?php echo $linha['id']; ?>, '<?php echo $tabela; ?>')">
                                            <i class="fas fa-trash"></i>
                                        </button>
                                        <?php endif; ?>
                                    </div>
                                </td>
                            </tr>
                        <?php endforeach; ?>
                    </tbody>
                </table>
            <?php else: ?>
                <div class="empty-message">
                    Nenhum registro encontrado na tabela <?php echo $tabela; ?>.
                </div>
            <?php endif; ?>
        </div>
    </div>

    <!-- Modal de Detalhes -->
    <div id="detalhesModal" class="modal">
        <div class="modal-content">
            <div class="modal-header">
                <h2>Detalhes do Registro</h2>
                <button class="close-modal" onclick="fecharModal()">&times;</button>
            </div>
            <div id="detalhesConteudo"></div>
            <div class="modal-buttons">
                <button onclick="fecharModal()" class="btn">Fechar</button>
            </div>
        </div>
    </div>

    <!-- Modal de Confirmação de Exclusão -->
    <div id="confirmacaoModal" class="modal">
        <div class="modal-content">
            <div class="modal-header">
                <h2>Confirmar Exclusão</h2>
                <button class="close-modal" onclick="fecharModal()">&times;</button>
            </div>
            <p>Tem certeza que deseja excluir este registro?</p>
            <div class="modal-buttons">
                <button onclick="fecharModal()" class="btn">Cancelar</button>
                <button id="btnConfirmarExclusao" class="btn btn-delete">Excluir</button>
            </div>
        </div>
    </div>

    <!-- Modal de Adicionar Membro -->
    <div id="adicionarMembroModal" class="modal">
        <div class="modal-content">
            <div class="modal-header">
                <h2>Adicionar Novo Membro</h2>
                <button class="close-modal" onclick="fecharModal()">&times;</button>
            </div>
            <form method="POST" action="">
                <div class="form-group">
                    <label for="nome">Nome</label>
                    <input type="text" id="nome" name="nome" required>
                </div>
                <div class="form-group">
                    <label for="cargo">Cargo</label>
                    <input type="text" id="cargo" name="cargo" required>
                </div>
                <div class="form-group">
                    <label for="foto">URL da Foto</label>
                    <input type="text" id="foto" name="foto" placeholder="Ex: imagens/kelly.jpg">
                </div>
                <div class="modal-buttons">
                    <button type="button" onclick="fecharModal()" class="btn">Cancelar</button>
                    <button type="submit" name="adicionar_membro" class="btn add-btn">Adicionar</button>
                </div>
            </form>
        </div>
    </div>

    <!-- Modal de Adicionar Usuário -->
    <div id="adicionarUsuarioModal" class="modal">
        <div class="modal-content">
            <div class="modal-header">
                <h2>Adicionar Novo Usuário</h2>
                <button class="close-modal" onclick="fecharModal()">&times;</button>
            </div>
            <form method="POST" action="">
                <div class="form-group">
                    <label for="username">Usuário</label>
                    <input type="text" id="username" name="username" required>
                </div>
                <div class="form-group">
                    <label for="password">Senha</label>
                    <input type="password" id="password" name="password" required>
                </div>
                <div class="form-group">
                    <label for="nome">Nome Completo</label>
                    <input type="text" id="nome" name="nome" required>
                </div>
                <div class="form-group">
                    <label for="email">E-mail</label>
                    <input type="email" id="email" name="email" required>
                </div>
                <div class="form-group">
                    <label for="nivel">Nível de Acesso</label>
                    <select id="nivel" name="nivel" required>
                        <option value="editor">Editor</option>
                        <option value="admin">Administrador</option>
                    </select>
                </div>
                <div class="modal-buttons">
                    <button type="button" onclick="fecharModal()" class="btn">Cancelar</button>
                    <button type="submit" name="adicionar_usuario" class="btn add-btn">Adicionar</button>
                </div>
            </form>
        </div>
    </div>

    <script>
        // Função para visualizar detalhes
        function verDetalhes(dados) {
            let conteudo = '<div style="max-height: 400px; overflow-y: auto;">';
            for (let key in dados) {
                if (dados.hasOwnProperty(key)) {
                    let label = key.replace(/_/g, ' ').replace(/\b\w/g, l => l.toUpperCase());
                    let value = dados[key] || '-';
                    
                    if (key === 'foto' && value) {
                        conteudo += `<p><strong>${label}:</strong><br><img src="${value}" width="100" style="margin-top: 0.5rem; border-radius: 5px;"></p>`;
                    } else {
                        conteudo += `<p><strong>${label}:</strong> ${value}</p>`;
                    }
                }
            }
            conteudo += '</div>';
            
            document.getElementById('detalhesConteudo').innerHTML = conteudo;
            document.getElementById('detalhesModal').style.display = 'flex';
        }
        
        // Função para confirmar exclusão
        function confirmarExclusao(id, tabela) {
            document.getElementById('btnConfirmarExclusao').onclick = function() {
                window.location.href = `admin_dashboard.php?excluir=${id}&tabela=${tabela}`;
            };
            document.getElementById('confirmacaoModal').style.display = 'flex';
        }
        
        // Função para abrir modal de adicionar membro
        function abrirModalAdicionarMembro() {
            document.getElementById('adicionarMembroModal').style.display = 'flex';
        }
        
        // Função para abrir modal de adicionar usuário
        function abrirModalAdicionarUsuario() {
            document.getElementById('adicionarUsuarioModal').style.display = 'flex';
        }
        
        // Função para fechar modal
        function fecharModal() {
            document.getElementById('detalhesModal').style.display = 'none';
            document.getElementById('confirmacaoModal').style.display = 'none';
            document.getElementById('adicionarMembroModal').style.display = 'none';
            document.getElementById('adicionarUsuarioModal').style.display = 'none';
        }
        
        // Fechar modal clicando fora
        window.onclick = function(event) {
            if (event.target.classList.contains('modal')) {
                fecharModal();
            }
        };
    </script>
</body>
</html>