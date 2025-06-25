<!DOCTYPE html>
<html lang="pt-BR">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Contato | DesenvolveTec</title>
  <!-- CSS Global -->
  <link rel="stylesheet" href="css/estilo.css">
  <!-- CSS Específico da página de contato -->
  <link rel="stylesheet" href="css/css-ctt.css">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
</head>
<body>
  <!-- Header igual ao padrão das outras páginas -->
  <header id="mainHeader">
    <a href="index.php" class="logo">
      <img src="imagens/logo_azul.png" alt="Logo DesenvolveTec" class="logo-circle">
      DesenvolveTec
    </a>
    <nav>
      <a href="servicos.php">Serviços</a>
      <a href="index.php#about">Sobre</a>
      <a href="contato.php" class="active">Contato</a>
    </nav>
  </header>

  <section class="hero hero-contato" id="heroSection">
    <div class="hero-content">
      <h1>Contato</h1>
      <p>Fale com a DesenvolveTec e tire suas dúvidas ou solicite um orçamento personalizado.</p>
    </div>
  </section>

  <section class="contact" id="contact">
    <div class="section-title">
      <h2>Entre em Contato</h2>
      <p>Veja abaixo nossos canais oficiais de atendimento e redes sociais.</p>
    </div>
    <div class="contato-container">
      <ul class="contato-lista">
        <li>
          <i class="fas fa-envelope"></i>
          <strong>E-mail:</strong>
          <a href="mailto:agenciadesenvolvetec@gmail.com?subject=Contato%20via%20site%20DesenvolveTec">agenciadesenvolvetec@gmail.com</a>
        </li>
        <li>
          <i class="fab fa-instagram"></i>
          <strong>Instagram:</strong>
          <a href="https://www.instagram.com/agenciadesenvolvetec/" target="_blank">@desenvolvetec</a>
        </li>
        <li>
          <i class="fas fa-globe"></i>
          <strong>Site da Escola:</strong>
          <a href="https://eteccaieiras.cps.sp.gov.br/" target="_blank">eteccaieiras.cps.sp.gov.br</a>
        </li>
        <li>
          <i class="fab fa-whatsapp"></i>
          <strong>WhatsApp:</strong>
          <a href="https://wa.me/5511912812313" target="_blank">+55 11 91281-2313</a>
        </li>
        <li>
          <i class="fas fa-map-marker-alt"></i>
          <strong>Endereço:</strong>
          Rua Ermênio de Oliveira Penteado, 30 (Jardim Helena), Caieiras, SP
        </li>
      </ul>
    </div>

    <!-- Google Maps incorporado -->
    <div class="contato-mapa" style="margin-top:32px;">
      <iframe
        src="https://www.google.com/maps?q=Rua+Ermênio+de+Oliveira+Penteado+30,+Caieiras,+SP&output=embed"
        width="100%"
        height="500"
        style="border:0; border-radius:10px;"
        allowfullscreen=""
        loading="lazy"
        referrerpolicy="no-referrer-when-downgrade">
      </iframe>
    </div>
  </section>

  <!-- Footer igual ao padrão das outras páginas -->
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
          <a href="https://web.whatsapp.com/send?phone=55 11 91281-2313" class="footer-link" id="whatsapp">
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
          <a href="sobre.php" class="footer-link">Sobre Nós</a>
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
        <button class="btn btn-footer">Solicitar Orçamento</button>
      </div>
    </div>
    <div id="footer_copyright">
      <p>&copy; 2023 DesenvolveTec. Todos os direitos reservados.</p>
    </div>
  </footer>

  <a class="whatsapp-link" href="https://web.whatsapp.com/send?phone=55 11 91281-2313">
    <i class="fa-brands fa-whatsapp"></i>
  </a>

  <!-- Modal de Orçamento -->
  <div id="orcamentoModal" class="modal-orcamento" style="display:none;">
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
        <div class="step" id="step2" style="display:none;">
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
        <div class="step" id="step3" style="display:none;">
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

  <!-- Scripts globais -->
  <script src="js/scripts.js"></script>
  <script src="js/contato.js"></script>
</body>
</html>