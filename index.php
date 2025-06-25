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
 <!-- Js de fora-->
  <script src="js/scripts.js"></script>

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

<body>

  <header id="mainHeader">
    <a href="index.php" class="logo">
      <img src="imagens/logo_azul.png" alt="Logo DesenvolveTec" class="logo-circle">
      DesenvolveTec
    </a>
    <nav>
      <a href="servicos.php">Serviços</a>
      <a href="sobre.php">Sobre</a>
      <a href="contato.php">Contato</a>
    </nav>
  </header>

  <section class="hero" id="heroSection">
    <div class="hero-content">
      <h1>Somos a DesenvolveTec</h1>
      <p>Soluções completas para seu negócio crescer no digital: design, desenvolvimento e marketing integrados.</p>
      <button class="btn" id="btn-hero">Solicitar Orçamento</button>
    </div>
  </section>

  <section class="services" id="services">
    <div class="section-title">
      <h2>Nossos Serviços Integrados</h2>
      <p>Oferecemos soluções completas para sua presença digital, desde a concepção até a execução e otimização
        contínua.</p>
    </div>

    <div class="services-container">
      <div class="service-card">
        <div class="service-icon">
          <i class="fas fa-paint-brush"></i>
        </div>
        <h3>Design Exclusivo</h3>
        <p>Criação de interfaces modernas e intuitivas que convertem visitantes em clientes, com foco na experiência do
          usuário e identidade visual da sua marca.</p>
      </div>

      <div class="service-card">
        <div class="service-icon">
          <i class="fas fa-code"></i>
        </div>
        <h3>Desenvolvimento Front-end</h3>
        <p>Implementação pixel-perfect do design com tecnologias modernas como HTML5, CSS3, JavaScript e frameworks
          React/Vue para sites rápidos e responsivos.</p>
      </div>

      <div class="service-card">
        <div class="service-icon">
          <i class="fas fa-server"></i>
        </div>
        <h3>Desenvolvimento Back-end</h3>
        <p>Sistemas robustos e escaláveis com Node.js, PHP, Python ou .NET, bancos de dados otimizados e APIs RESTful
          para integrações perfeitas.</p>
      </div>

      <div class="service-card">
        <div class="service-icon">
          <i class="fas fa-rocket"></i>
        </div>
        <h3>Marketing Digital</h3>
        <p>Consultoria especializada em SEO, Google Ads, mídias sociais e conteúdo para atrair o público certo e
          maximizar seu retorno sobre investimento.</p>
      </div>

      <div class="service-card">
        <div class="service-icon">
          <i class="fas fa-chart-line"></i>
        </div>
        <h3>Performance & Analytics</h3>
        <p>Monitoramento contínuo com Google Analytics, Hotjar e ferramentas proprietárias para otimizar conversões e
          experiência do usuário.</p>
      </div>

      <div class="service-card">
        <div class="service-icon">
          <i class="fas fa-headset"></i>
        </div>
        <h3>Suporte Contínuo</h3>
        <p>Manutenção, atualizações e suporte técnico para garantir que seu site permaneça seguro, rápido e sempre
          online.</p>
      </div>
    </div>
  </section>

  <section class="about" id="about">
    <div class="about-content">
      <h2>Uma das agências mais criativas e inovadoras</h2>
      <p>Somos uma agência de tecnologia e performance criada por profissionais, para profissionais. Desenvolvemos
        projetos baseados em inteligência de mercado, ocupando espaços onde o marketing digital atende às necessidades
        em constante mudança dos consumidores atuais.</p>
      <p>Somos especialistas, não generalistas. Nossa empresa foi construída para fornecer performance e conhecimento em
        áreas digitais extremamente complexas e que evoluem diariamente.</p>
    </div>
  </section>

  <section class="contact" id="contact">
    <div class="section-title">
      <h2>Entre em Contato</h2>
      <p>Tem um projeto em mente? Vamos conversar sobre como podemos ajudar seu negócio a crescer.</p>
    </div>
  </section>

  <!-- Modal de Orçamento -->
  <div id="orcamentoModal" class="modal-orcamento">
    <div class="modal-content">
      <span class="close-modal">&times;</span>
      <form id="orcamentoForm">
        <!-- Passo 1 - Informações Básicas -->
        <div class="step active" id="step1">
          <h3 class="step-title">Informações Básicas</h3>
          <div class="form-group">
            <label for="nome">Nome Completo*</label>
            <input type="text" id="nome" name="nome" required>
          </div>
          <div class="form-group">
            <label for="email">E-mail*</label>
            <input type="email" id="email" name="email" required>
          </div>
          <div class="form-group">
            <label for="telefone">Telefone/WhatsApp*</label>
            <input type="tel" id="telefone" name="telefone" required>
          </div>
          <div class="form-group">
            <label for="empresa">Empresa/Projeto</label>
            <input type="text" id="empresa" name="empresa">
          </div>
          <div class="step-nav">
            <button type="button" class="step-btn next" data-next="step2">Próximo</button>
          </div>
        </div>

        <!-- Passo 2 - Serviços -->
        <div class="step" id="step2">
          <h3 class="step-title">Quais serviços você precisa?</h3>
          <div class="service-options">
            <div class="service-option">
              <input type="checkbox" id="servico1" name="servicos[]" value="Design Exclusivo">
              <label for="servico1">Design Exclusivo</label>
            </div>
            <div class="service-option">
              <input type="checkbox" id="servico2" name="servicos[]" value="Desenvolvimento Front-end">
              <label for="servico2">Front-end</label>
            </div>
            <div class="service-option">
              <input type="checkbox" id="servico3" name="servicos[]" value="Desenvolvimento Back-end">
              <label for="servico3">Back-end</label>
            </div>
            <div class="service-option">
              <input type="checkbox" id="servico4" name="servicos[]" value="Marketing Digital">
              <label for="servico4">Marketing Digital</label>
            </div>
            <div class="service-option">
              <input type="checkbox" id="servico5" name="servicos[]" value="Performance & Analytics">
              <label for="servico5">Analytics</label>
            </div>
            <div class="service-option">
              <input type="checkbox" id="servico6" name="servicos[]" value="Suporte Contínuo">
              <label for="servico6">Suporte</label>
            </div>
          </div>
          <div class="step-nav">
            <button type="button" class="step-btn back" data-back="step1">Voltar</button>
            <button type="button" class="step-btn next" data-next="step3">Próximo</button>
          </div>
        </div>

        <!-- Passo 3 - Detalhes -->
        <div class="step" id="step3">
          <h3 class="step-title">Conte mais sobre seu projeto</h3>
          <div class="form-group">
            <label for="prazo">Prazo estimado</label>
            <select id="prazo" name="prazo">
              <option value="">Selecione</option>
              <option value="Urgente (1-2 semanas)">Urgente (1-2 semanas)</option>
              <option value="Curto prazo (3-4 semanas)">Curto prazo (3-4 semanas)</option>
              <option value="Médio prazo (1-2 meses)">Médio prazo (1-2 meses)</option>
              <option value="Sem prazo definido">Sem prazo definido</option>
            </select>
          </div>
          <div class="form-group">
            <label for="orcamento">Orçamento previsto</label>
            <select id="orcamento" name="orcamento">
              <option value="">Selecione</option>
              <option value="Até R$ 1.000">Até R$ 1.000</option>
              <option value="R$ 1.000 - R$ 3.000">R$ 1.000 - R$ 3.000</option>
              <option value="R$ 3.000 - R$ 5.000">R$ 3.000 - R$ 5.000</option>
              <option value="Acima de R$ 5.000">Acima de R$ 5.000</option>
              <option value="Ainda não defini">Ainda não defini</option>
            </select>
          </div>
          <div class="form-group">
            <label for="detalhes">Detalhes do projeto*</label>
            <textarea id="detalhes" name="detalhes" required placeholder="Descreva seu projeto, objetivos, necessidades específicas e qualquer outra informação relevante..."></textarea>
          </div>
          <div class="step-nav">
            <button type="button" class="step-btn back" data-back="step2">Voltar</button>
            <button type="submit" class="form-submit">Enviar Solicitação</button>
          </div>
        </div>
      </form>
    </div>
  </div>

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
          <a href="servicos.php" class="footer-link">Serviços</a>
        </li>
        <li>
          <a href="sobre.php" class="footer-link">Sobre Nòs</a>
        </li>
        <li>
          <a href="contato.php" class="footer-link">FAQ</a>
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
        <button class="btn btn-footer" id="btn-hero">Solicitar Orçamento</button>
      </div>
    </div>
    
    <div id="footer_copyright">
      <p>&copy; 2023 DesenvolveTec. Todos os direitos reservados.</p>
    </div>
  </footer>
  
  <a class="whatsapp-link" href="https://web.whatsapp.com/send?phone=55 11 91281-2313">
    <i class="fa-brands fa-whatsapp"></i>
  </a>

 
</body>
</html>