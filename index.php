<!DOCTYPE html>
<html lang="pt-BR">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>DesenvolveTec - Agência Digital Completa</title>
  <!-- CSS Externo -->
  <link rel="stylesheet" href="css/estilo.css">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
</head>
<body>

  <header id="mainHeader">  
    <div class="logo">
      <img src="imagens/logo_azul.png" alt="Logo DesenvolveTec" class="logo-circle">
      DesenvolveTec
    </div>
    <nav>
      <a href="servicos.php">Serviços</a>
      <a href="#about">Sobre</a>
      <a href="#contact">Contato</a>
    </nav>
  </header>

  <section class="hero" id="heroSection">
    <div class="hero-content">
      <h1>Somos a DesenvolveTec</h1>
      <p>Soluções completas para seu negócio crescer no digital: design, desenvolvimento e marketing integrados.</p>
      <button class="btn">Solicitar Orçamento</button>
    </div>
  </section>

  <section class="services" id="services">
    <div class="section-title">
      <h2>Nossos Serviços Integrados</h2>
      <p>Oferecemos soluções completas para sua presença digital, desde a concepção até a execução e otimização contínua.</p>
    </div>
    
    <div class="services-container">
      <div class="service-card">
        <div class="service-icon">
          <i class="fas fa-paint-brush"></i>
        </div>
        <h3>Design Exclusivo</h3>
        <p>Criação de interfaces modernas e intuitivas que convertem visitantes em clientes, com foco na experiência do usuário e identidade visual da sua marca.</p>
      </div>
      
      <div class="service-card">
        <div class="service-icon">
          <i class="fas fa-code"></i>
        </div>
        <h3>Desenvolvimento Front-end</h3>
        <p>Implementação pixel-perfect do design com tecnologias modernas como HTML5, CSS3, JavaScript e frameworks React/Vue para sites rápidos e responsivos.</p>
      </div>
      
      <div class="service-card">
        <div class="service-icon">
          <i class="fas fa-server"></i>
        </div>
        <h3>Desenvolvimento Back-end</h3>
        <p>Sistemas robustos e escaláveis com Node.js, PHP, Python ou .NET, bancos de dados otimizados e APIs RESTful para integrações perfeitas.</p>
      </div>
      
      <div class="service-card">
        <div class="service-icon">
          <i class="fas fa-rocket"></i>
        </div>
        <h3>Marketing Digital</h3>
        <p>Consultoria especializada em SEO, Google Ads, mídias sociais e conteúdo para atrair o público certo e maximizar seu retorno sobre investimento.</p>
      </div>
      
      <div class="service-card">
        <div class="service-icon">
          <i class="fas fa-chart-line"></i>
        </div>
        <h3>Performance & Analytics</h3>
        <p>Monitoramento contínuo com Google Analytics, Hotjar e ferramentas proprietárias para otimizar conversões e experiência do usuário.</p>
      </div>
      
      <div class="service-card">
        <div class="service-icon">
          <i class="fas fa-headset"></i>
        </div>
        <h3>Suporte Contínuo</h3>
        <p>Manutenção, atualizações e suporte técnico para garantir que seu site permaneça seguro, rápido e sempre online.</p>
      </div>
    </div>
  </section>

  <section class="about" id="about">
    <div class="about-content">
      <h2>Uma das agências mais criativas e inovadoras</h2>
      <p>Somos uma agência de tecnologia e performance criada por profissionais, para profissionais. Desenvolvemos projetos baseados em inteligência de mercado, ocupando espaços onde o marketing digital atende às necessidades em constante mudança dos consumidores atuais.</p>
      <p>Somos especialistas, não generalistas. Nossa empresa foi construída para fornecer performance e conhecimento em áreas digitais extremamente complexas e que evoluem diariamente.</p>
    </div>
  </section>

  <section class="contact" id="contact">
    <div class="section-title">
      <h2>Entre em Contato</h2>
      <p>Tem um projeto em mente? Vamos conversar sobre como podemos ajudar seu negócio a crescer.</p>
    </div>
    
    <!-- Formulário pode ser adicionado aqui posteriormente -->
  </section>

  <footer>
     <div class="footer-contact">
           <!--- <a href="mailto:<?= $config['email'] ?>" class="contact-email">
                <i class="fas fa-envelope"></i> <?= $config['email'] ?>
            </a>
            <a href="tel:<?= preg_replace('/[^0-9]/', '', $config['telefone']) ?>" class="contact-phone">
                <i class="fas fa-phone-alt"></i> <?= $config['telefone'] ?>
            </a>
        </div>-->
    <div class="footer-social">
      <h3 class="social-title">Conecte-se com a DesenvolveTec</h3>
      <div class="social-icons">
        <a href="https://www.instagram.com/agenciadesenvolvetec/" class="social-icon" target="_blank" rel="noopener noreferrer"><i class="fab fa-instagram"></i></a>
      </div>
    </div>

    <div class="footer-contact">
      <a href="mailto:agenciadesenvolvetec@gmail.com" class="contact-email">
        <i class="fas fa-envelope"></i> agenciadesenvolvetec@gmail.com
      </a>
      <a href="tel:+5511999999999" class="contact-phone">
        <i class="fas fa-phone-alt"></i> (11) 99999-9999
      </a>
    </div>

    <div class="partners-title">Nossas Certificações</div>
    <div class="footer-partners">
      <span class="partner-badge">
        <i class="fab fa-google"></i> Google Partner
      </span>
      <span class="partner-badge">
        <i class="fab fa-amazon"></i> Amazon Ads Verified
      </span>
    </div>

    <div class="footer-copyright">
      &copy; 2023 DesenvolveTec. Todos os direitos reservados.
    </div>
  </footer>
<!-- Js de fora-->
  <script src="js/scripts.js">

  </script>
</body>
</html>