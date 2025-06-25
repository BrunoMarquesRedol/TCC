<!DOCTYPE html>
<html lang="pt-BR">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Serviços | DesenvolveTec</title>

  <!-- CSS Global (obrigatório em todas páginas) -->
  <link rel="stylesheet" href="css/estilo.css">

  <!-- CSS Específico desta página -->
  <link rel="stylesheet" href="css/css-servico.css">

  <!-- Font Awesome -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
</head>

<body>
  <!-- Seu conteúdo aqui -->
  <!-- Header Padrão -->
  <header id="mainHeader">
    <div class="logo">
      <img src="imagens/logo_azul.png" alt="Logo DesenvolveTec" class="logo-circle">
      DesenvolveTec
    </div>
    <nav>
      <a href="index.php">Home</a>
      <a href="servicos.php" class="active">Serviços</a>
      <a href="#contato">Contato</a>
    </nav>
  </header>

  <!-- Conteúdo Específico da Página -->
  <main class="services-content">
    <section class="hero">
      <div class="hero-content">
        <h1>Nossos Serviços</h1>
        <p>Conheça nossas soluções especializadas</p>
           <button class="btn">Solicitar Orçamento</button>
      </div>
    </section>

    <div class="services-highlight">
      <div class="service-card" onclick="toggleCard(this)">
        <i class="fas fa-code service-icon"></i>
        <h3>Desenvolvimento Web</h3>
        <h4>Sites otimizados e sistemas personalizados</h4>
        <div class="long-desc">
          <p>Desenvolvemos sites e sistemas personalizados utilizando ferramentas robustas e modernas:</p>
          <ul>
            <li><img src=" imagens/html.ico" ><b>HTML:</b>para estruturar o conteúdo de forma clara e acessível;</li>
            <li><b>CSS:</b>para aplicar estilos responsivos e profissionais;</li>
            <li><b>JavaScript:</b>para tornar as interfaces dinâmicas e interativas;</li>
            <li><b>PHP:</b>para o desenvolvimento backend e lógica de sistemas;</li>
            <li><b>MySQL:</b>para armazenamento de dados de forma segura, estruturada e eficiente;</li>
          </ul>
         <p>Com essas tecnologias, entregamos soluções completas, otimizadas para performance, usabilidade e segurança.</p>
        </div>
      </div>
    </div>

     <div class="services-highlight">
      <div class="service-card" onclick="toggleCard(this)">
        <i class="fas fa-rocket service-icon"></i>
          <h3>Marketing Digital</h3>
        <h4>Aumente sua presença online e conquiste mais clientes</h4>
        <div class="long-desc">
         <p>Desenvolvemos estratégias personalizadas de marketing digital para fortalecer sua marca e atrair resultados:</p>
         <ul>
            <li><b>Planejamento de conteúdo:</b>para estruturar o conteúdo de forma clara e acessível;</li>
            <li><b>Gestão de tráfego pago:</b>no Google Ads e Meta Ads (Facebook/Instagram);</li>
            <li><b>SEO (otimização para motores de busca):</b>para melhorar o ranqueamento no Google;</li>
            <li><b>Design e identidade visual:</b>para o desenvolvimento backend e lógica de sistemas;</li>
            <li><b>MySQL:</b>para armazenamento de dados de forma segura, estruturada e eficiente;</li>
          </ul>
          <p>Com foco em performance e conversão, ajudamos você a se destacar no ambiente digital.</p>
        </div>
      </div>
    </div>

     <div class="services-highlight">
      <div class="service-card" onclick="toggleCard(this)">
         <i class="fas fa-headset service-icon"></i>
        <h3>Suporte</h3>
        <h4>Confiança e agilidade para manter seu sistema funcionando</h4>
        <div class="long-desc">
         <p>Oferecemos suporte técnico contínuo para garantir que seu site ou sistema funcione com estabilidade e segurança:</p>
          <ul>
            <li><b>Manutenção preventiva e corretiva</b>de sistemas web;</li>
            <li><b>Monitoramento de performance e segurança;</b></li>
            <li><b>Correções de bugs e atualizações</b>de componentes;</li>
            <li><b>Atendimento ágil</b>via e-mail, WhatsApp ou plataforma dedicada.</li>
          </ul> 
         <p>Você conta com uma equipe pronta para resolver problemas e manter tudo funcionando sem interrupções.</p>
        </div>
      </div>
    </div>
  </main>

  <!-- Footer Padrão -->
  <footer>
    <div id="footer_content">
      <div id="footer_contacts">
        <div class="logo" id="logo-footer">
          <img src="imagens/logo_azul.png" alt="Logo DesenvolveTec" class="logo-circle">
          <p>DesenvolveTec</p>
        </div>


        <div id="footer_social_media">
          <a href="https://www.instagram.com/agenciadesenvolvetec?utm_source=ig_web_button_share_sheet&igsh=MWsyazAzZ280azNwdA==" class="footer-link" id="instagram">
            <i class="fa-brands fa-instagram"></i>
          </a>

          <a href="#" class="footer-link" id="github">
            <i class="fa-brands fa-github"></i>
          </a>

          <a  href="https://web.whatsapp.com/send?phone=55 11 91281-2313"  class="footer-link" id="whatsapp">
            <i class="fa-brands fa-whatsapp"></i>
          </a>
        </div>
      </div>


      <ul class="footer-list">
        <li>
          <h3>Navegação</h3>
        </li>
        <li>
          <a href="#" class="footer-link">Ìnicio</a>
        </li>
        <li>
          <a href="#" class="footer-link">Sobre Nòs</a>
        </li>
        <li>
          <a href="#" class="footer-link">FAQ</a>
        </li>
      </ul>

      <ul class="footer-list">
        <li>
          <h3>Serviços</h3>
        </li>
        <li>
          <a href="#" class="footer-link">Marketing</a>
        </li>
        <li>
           <a href="#" class="footer-link">Sites</a>
        </li>
        <li>
          <a href="#" class="footer-link">Suporte</a>
        </li>
      </ul>

      <div id="footer_subscribe">
        <h3>Solicitações</h3>

        <p>
          Entre em contato conosco para receber seu orçamento e 
          nossas soluções diante sua demanda.
        </p>

     
        <button class="btn" id="btn-footer">Solicitar Orçamento</button>
        </div>
      </div>
    </div>

    <div id="footer_copyright">
      <p>&copy; 2023 DesenvolveTec. Todos os direitos reservados.</p>
    </div>
  </footer>

<a class="whatsapp-link" href="https://web.whatsapp.com/send?phone=55 11 91281-2313">
		  <i class="fa-brands fa-whatsapp"></i>
</a>
  
  <!-- Scripts -->
  <script src="js/scripts.js"></script>

  <!-- JS específico da página (se necessário) -->
  <script src="js/servicos.js"></script>


    <div vw class="enabled" id="vlibras">
        <div vw-access-button class="active"></div>
        <div vw-plugin-wrapper>
          <div class="vw-plugin-top-wrapper"></div>
        </div>
      </div>
      <script src="https://vlibras.gov.br/app/vlibras-plugin.js"></script>
      <script>
        new window.VLibras.Widget('https://vlibras.gov.br/app');
      </script>
</body>

</html>