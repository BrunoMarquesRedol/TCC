<?php
session_start();
// Verificar se já está logado
if (isset($_SESSION['admin_logged_in']) && $_SESSION['admin_logged_in'] === true) {
    header('Location: admin_dashboard.php');
    exit;
}

// Conectar ao banco de dados
$conn = new mysqli("localhost", "root", "", "desenvolvetec");
if ($conn->connect_error) {
    die("Erro de conexão: " . $conn->connect_error);
}

$error = '';
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $username = $_POST['username'] ?? '';
    $password = $_POST['password'] ?? '';
    
    // Buscar usuário no banco de dados
    $stmt = $conn->prepare("SELECT id, username, password, nome, nivel FROM usuarios WHERE username = ?");
    $stmt->bind_param("s", $username);
    $stmt->execute();
    $result = $stmt->get_result();
    
    if ($result->num_rows === 1) {
        $user = $result->fetch_assoc();
        
        // VERIFICAÇÃO SIMPLIFICADA PARA TESTE
        // Se a senha no banco estiver criptografada, tenta password_verify
        // Se não estiver, compara diretamente
        if (password_verify($password, $user['password']) || $password === $user['password']) {
            $_SESSION['admin_logged_in'] = true;
            $_SESSION['admin_id'] = $user['id'];
            $_SESSION['admin_username'] = $user['username'];
            $_SESSION['admin_nome'] = $user['nome'];
            $_SESSION['admin_nivel'] = $user['nivel'];
            
            header('Location: admin_dashboard.php');
            exit;
        } else {
            $error = 'Senha incorreta!';
        }
    } else {
        $error = 'Usuário não encontrado!';
    }
    
    $stmt->close();
}

$conn->close();
?>
<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Área Administrativa - DesenvolveTec</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }
        
        body {
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
            min-height: 100vh;
            display: flex;
            justify-content: center;
            align-items: center;
            padding: 20px;
        }
        
        .login-container {
            background: white;
            padding: 40px;
            border-radius: 20px;
            box-shadow: 0 15px 35px rgba(0, 0, 0, 0.1);
            width: 100%;
            max-width: 450px;
            text-align: center;
        }
        
        .logo {
            margin-bottom: 30px;
        }
        
        .logo img {
            height: 80px;
            width: auto;
        }
        
        .login-header h1 {
            color: #2563eb;
            font-size: 2.2rem;
            margin-bottom: 8px;
            font-weight: 700;
        }
        
        .login-header p {
            color: #6b7280;
            font-size: 1.1rem;
            margin-bottom: 30px;
        }
        
        .error {
            background: #fef2f2;
            border: 1px solid #fecaca;
            color: #dc2626;
            padding: 12px 16px;
            border-radius: 10px;
            margin-bottom: 20px;
            font-weight: 600;
            display: flex;
            align-items: center;
            justify-content: center;
            gap: 8px;
        }
        
        .form-group {
            margin-bottom: 20px;
            text-align: left;
        }
        
        .form-group label {
            display: block;
            margin-bottom: 8px;
            font-weight: 600;
            color: #374151;
            font-size: 0.95rem;
        }
        
        .form-group input {
            width: 100%;
            padding: 14px 16px;
            border: 2px solid #e5e7eb;
            border-radius: 10px;
            font-size: 1rem;
            transition: all 0.3s ease;
            background: #fafafa;
        }
        
        .form-group input:focus {
            outline: none;
            border-color: #2563eb;
            background: white;
            box-shadow: 0 0 0 3px rgba(37, 99, 235, 0.1);
        }
        
        .btn {
            background: linear-gradient(135deg, #2563eb 0%, #1d4ed8 100%);
            color: white;
            border: none;
            padding: 15px 30px;
            border-radius: 10px;
            cursor: pointer;
            font-size: 1.1rem;
            font-weight: 600;
            width: 100%;
            transition: all 0.3s ease;
            margin-top: 10px;
        }
        
        .btn:hover {
            transform: translateY(-2px);
            box-shadow: 0 8px 20px rgba(37, 99, 235, 0.3);
        }
        
        .note {
            margin-top: 25px;
            padding: 16px;
            background: #fffbeb;
            border: 1px solid #fef3c7;
            border-radius: 10px;
            font-size: 0.9rem;
            color: #92400e;
            text-align: center;
        }
        
        .debug-info {
            margin-top: 15px;
            padding: 10px;
            background: #f3f4f6;
            border-radius: 8px;
            font-size: 0.8rem;
            color: #6b7280;
        }
        
        @media (max-width: 480px) {
            .login-container {
                padding: 30px 20px;
            }
            
            .login-header h1 {
                font-size: 1.8rem;
            }
        }
    </style>
</head>
<body>
    <div class="login-container">
        <div class="logo">
            <div style="font-size: 2.5rem; color: #2563eb; margin-bottom: 10px;">
                <i class="fas fa-rocket"></i>
            </div>
        </div>
        
        <div class="login-header">
            <h1>DesenvolveTec</h1>
            <p>Área Administrativa</p>
        </div>
        
        <?php if (!empty($error)): ?>
            <div class="error">
                <i class="fas fa-exclamation-circle"></i>
                <?php echo $error; ?>
            </div>
        <?php endif; ?>
        
        <form method="POST" action="">
            <div class="form-group">
                <label for="username">
                    <i class="fas fa-user"></i> Usuário
                </label>
                <input type="text" id="username" name="username" required autocomplete="username" placeholder="Digite seu usuário" value="admin">
            </div>
            
            <div class="form-group">
                <label for="password">
                    <i class="fas fa-lock"></i> Senha
                </label>
                <input type="password" id="password" name="password" required autocomplete="current-password" placeholder="Digite sua senha" value="desenvolvetec123">
            </div>
            
            <button type="submit" class="btn">
                <i class="fas fa-sign-in-alt"></i> Entrar
            </button>
        </form>
        
        <div class="note">
            <strong>Credenciais para teste:</strong><br>
            Usuário: <strong>admin</strong><br>
            Senha: <strong>desenvolvetec123</strong>
        </div>

        <div class="debug-info">
            <strong>Debug:</strong> Se ainda não funcionar, execute o SQL no phpMyAdmin para criar o usuário.
        </div>
    </div>
</body>
</html>