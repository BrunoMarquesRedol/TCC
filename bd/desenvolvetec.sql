-- Criar o banco de dados
CREATE DATABASE desenvolvetec;
USE desenvolvetec;

-- Tabela de Serviços
CREATE TABLE servicos (
    id INT AUTO_INCREMENT PRIMARY KEY,
    titulo VARCHAR(100) NOT NULL,
    descricao TEXT NOT NULL,
    icone VARCHAR(50) -- exemplo: 'fas fa-code'
);

-- Tabela de Orçamentos (solicitados pelo botão)
CREATE TABLE orcamentos (
    id INT AUTO_INCREMENT PRIMARY KEY,
    nome VARCHAR(100) NOT NULL,
    email VARCHAR(100) NOT NULL,
    telefone VARCHAR(20),
    mensagem TEXT NOT NULL,
    data_envio DATETIME DEFAULT CURRENT_TIMESTAMP
);

-- Tabela de Contatos
CREATE TABLE contatos (
    id INT AUTO_INCREMENT PRIMARY KEY,
    nome VARCHAR(100) NOT NULL,
    email VARCHAR(100) NOT NULL,
    assunto VARCHAR(150),
    mensagem TEXT NOT NULL,
    data_envio DATETIME DEFAULT CURRENT_TIMESTAMP
);

-- Tabela de Certificações / Parceiros
CREATE TABLE certificacoes (
    id INT AUTO_INCREMENT PRIMARY KEY,
    nome VARCHAR(100) NOT NULL,
    icone VARCHAR(50), -- exemplo: 'fab fa-google'
    descricao VARCHAR(255)
);
<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>DesenvolveTec - Desenvolvimento Web Profissional</title>
    <link href="https://cdn.jsdelivr.net/npm/remixicon@4.2.0/fonts/remixicon.css" rel="stylesheet" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;600&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="cssinicial.css">
</head>
<body>
    <header class="header" id="header">
        <nav class="nav container">
            <a href="#" class="nav__logo">DesenvolveTec</a>

            <div class="nav__menu" id="nav-menu">
                <ul class="nav__list">
                    <li class="nav__item"><a href="#home" class="nav__link active-link">Início</a></li>
                    <li class="nav__item"><a href="#services" class="nav__link">Serviços</a></li>
                    <li class="nav__item"><a href="#portfolio" class="nav__link">Portfólio</a></li>
                    <li class="nav__item"><a href="#contact" class="nav__link">Contato</a></li>
                </ul>

                <div class="nav__close" id="nav-close">
                    <i class="ri-close-line"></i>
                </div>
            </div>

            <div class="nav__toggle" id="nav-toggle">
                <i class="ri-menu-line"></i>
            </div>
        </nav>
    </header>

    <section class="section" id="services">
        <h2 class="section-title">Nossos Serviços</h2>
        <div class="services-container">
            <?php
            include("conexao.php");

            $sql = "SELECT * FROM servicos";
            $result = $conn->query($sql);

            if ($result->num_rows > 0) {
                while ($servico = $result->fetch_assoc()) {
                    echo '<div class="service-card">
                            <div class="service-icon">
                                <i class="' . $servico["icone"] . '"></i>
                            </div>
                            <h3>' . $servico["titulo"] . '</h3>
                            <p>' . $servico["descricao"] . '</p>
                          </div>';
                }
            } else {
                echo '<p>Nenhum serviço cadastrado.</p>';
            }

            $conn->close();
            ?>
        </div>
    </section>

    <script>
        const navMenu = document.getElementById('nav-menu'),
              navToggle = document.getElementById('nav-toggle'),
              navClose = document.getElementById('nav-close');

        if (navToggle) {
            navToggle.addEventListener('click', () => {
                navMenu.classList.add('show-menu');
            });
        }

        if (navClose) {
            navClose.addEventListener('click', () => {
                navMenu.classList.remove('show-menu');
            });
        }

        const navLinks = document.querySelectorAll('.nav__link');

        function linkAction() {
            navMenu.classList.remove('show-menu');
        }
        navLinks.forEach(n => n.addEventListener('click', linkAction));
    </script>
</body>
</html>
