<!DOCTYPE html>
<html lang="pt-BR">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Serviços | DesenvolveTec</title>
<<<<<<< HEAD

  <script src="js/scripts.js"></script>

  <!-- CSS Global (obrigatório em todas páginas) -->
  <link rel="stylesheet" href="css/estilo.css">

  <!-- CSS Específico desta página -->
  <link rel="stylesheet" href="css/css-servico.css">

  <!-- Font Awesome -->
=======
  <link rel="stylesheet" href="css/estilo.css">
  <link rel="stylesheet" href="css/servico.css">
>>>>>>> 8259761 (feat: Adiciona as novas funcionalidades e atualizações)
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
</head>

<body>
<<<<<<< HEAD
  <!-- Seu conteúdo aqui -->
  <!-- Header Padrão -->
  <header id="mainHeader">
    <div class="logo">
      <img src="imagens/logo_azul.png" alt="Logo DesenvolveTec" class="logo-circle">
      DesenvolveTec
    </div>
    <nav>
      <a href="index.php">Home</a>
      <a href="sobre.php">Sobre</a>
      <a href="contato.php">Contato</a>
    </nav>
  </header>

  <!-- Conteúdo Específico da Página -->
=======
  <header id="mainHeader">
    <nav>
      <a href="https://www.instagram.com/agenciadesenvolvetec?utm_source=ig_web_button_share_sheet&igsh=MWsyazAzZ280azNwdA=="
        class="logo">
        <img src="imagens/logo_azul.png" alt="Logo DesenvolveTec" class="logo-circle">
        <p class="nome-logo">DesenvolveTec</p>
      </a>

      <div class="mobile-menu">
        <div class="line1"></div>
        <div class="line2"></div>
        <div class="line3"></div>
      </div>
      <ul class="nav-list">
        <li><a href="home.php">Home</a></li>
        <li><a href="sobre.php">Sobre</a></li>
        <li><a href="contato.php">Contato</a></li>
      </ul>
    </nav>
  </header>

>>>>>>> 8259761 (feat: Adiciona as novas funcionalidades e atualizações)
  <main class="services-content">
    <section class="hero">
      <div class="hero-content">
        <h1>Nossos Serviços</h1>
<<<<<<< HEAD
        <p>Conheça nossas soluções especializadas</p>
      <button class="btn" id="btn-hero">Solicitar Orçamento</button>

      </div>
    </section>
<!-- Modal de Orçamento -->
<div id="orcamentoModal" class="modal-orcamento">
    <div class="modal-content">
        <span class="close-modal">&times;</span>
        <div class="budget-steps">
            <!-- Passo 1 - Informações Básicas -->
            <div class="step active" id="step1">
                <h3 class="step-title">Informações Básicas</h3>
                <form id="orcamentoForm">
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
                </form>
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
        </div>
    </div>
</div>
=======
        <h2>Conheça nossas soluções especializadas</h2>
        <button class="btn" id="btn-hero">Solicitar Orçamento</button>
      </div>
    </section>
    
    <p class="title-service">Descrição de Nossos Serviços</p>
    
>>>>>>> 8259761 (feat: Adiciona as novas funcionalidades e atualizações)
    <div class="services-highlight">
      <div class="service-card" onclick="toggleCard(this)">
        <i class="fas fa-code service-icon"></i>
        <h3>Desenvolvimento Web</h3>
        <h4>Sites otimizados e sistemas personalizados</h4>
        <div class="long-desc">
          <p>Desenvolvemos sites e sistemas personalizados utilizando ferramentas robustas e modernas:</p>
          <ul>
<<<<<<< HEAD
            <li><img src=" imagens/html.ico" ><b>HTML:</b>para estruturar o conteúdo de forma clara e acessível;</li>
            <li><img src=" imagens/css.ico" ><b>CSS:</b>para aplicar estilos responsivos e profissionais;</li>
            <li><img src=" imagens/js.ico" ><b>JavaScript:</b>para tornar as interfaces dinâmicas e interativas;</li>
            <li><img src=" imagens/php.ico" ><b>PHP:</b>para o desenvolvimento backend e lógica de sistemas;</li>
            <li><img src=" imagens/MySql.ico" ><b>MySQL:</b>para armazenamento de dados de forma segura, estruturada e eficiente;</li>
          </ul>
         <p>Com essas tecnologias, entregamos soluções completas, otimizadas para performance, usabilidade e segurança.</p>
=======
            <li><img src="imagens/Html.ico" alt="HTML"><b> HTML:</b> Para estruturar o conteúdo de forma clara e acessível;</li>
            <li><img src="imagens/css.ico" alt="CSS"><b> CSS:</b> Para aplicar estilos responsivos e profissionais;</li>
            <li><img src="imagens/JS.ico" alt="JavaScript"><b> JavaScript:</b> Para tornar as interfaces dinâmicas e interativas;</li>
            <li><img src="imagens/php.ico" alt="PHP"><b> PHP:</b> Para o desenvolvimento backend e lógica de sistemas;</li>
            <li><img src="imagens/MySql.ico" alt="MySQL"><b> MySQL:</b> Para armazenamento de dados de forma segura, estruturada e eficiente;</li>
          </ul>
          <p>Com essas tecnologias, entregamos soluções completas, otimizadas para performance, usabilidade e segurança.</p>
>>>>>>> 8259761 (feat: Adiciona as novas funcionalidades e atualizações)
        </div>
      </div>
    </div>

<<<<<<< HEAD
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
=======
    <div class="services-highlight">
      <div class="service-card" onclick="toggleCard(this)">
        <i class="fas fa-rocket service-icon"></i>
        <h3>Marketing Digital</h3>
        <h4>Aumente sua presença online e conquiste mais clientes</h4>
        <div class="long-desc">
          <p>Desenvolvemos estratégias personalizadas de marketing digital para fortalecer sua marca e atrair resultados:</p>
          <ul>
            <li><b>Planejamento de conteúdo:</b> Para estruturar o conteúdo de forma clara e acessível;</li>
            <li><b>Gestão de tráfego pago:</b> No Google Ads e Meta Ads (Facebook/Instagram);</li>
            <li><b>SEO (otimização para motores de busca):</b> Para melhorar o ranqueamento no Google;</li>
            <li><b>Design e identidade visual:</b> Para o desenvolvimento backend e lógica de sistemas;</li>
            <li><b>Gestão de redes sociais:</b> Para aumentar o engajamento e visibilidade da marca;</li>
>>>>>>> 8259761 (feat: Adiciona as novas funcionalidades e atualizações)
          </ul>
          <p>Com foco em performance e conversão, ajudamos você a se destacar no ambiente digital.</p>
        </div>
      </div>
    </div>

<<<<<<< HEAD
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
=======
    <div class="services-highlight">
      <div class="service-card" onclick="toggleCard(this)">
        <i class="fas fa-headset service-icon"></i>
        <h3>Suporte</h3>
        <h4>Confiança e agilidade para manter seu sistema funcionando</h4>
        <div class="long-desc">
          <p>Oferecemos suporte técnico contínuo para garantir que seu site ou sistema funcione com estabilidade e segurança:</p>
          <ul>
            <li><b>Manutenção preventiva e corretiva</b> de sistemas web;</li>
            <li><b>Monitoramento de performance e segurança;</b></li>
            <li><b>Correções de bugs e atualizações</b> de componentes;</li>
            <li><b>Atendimento ágil</b> via e-mail, WhatsApp ou plataforma dedicada.</li>
          </ul>
          <p>Você conta com uma equipe pronta para resolver problemas e manter tudo funcionando sem interrupções.</p>
>>>>>>> 8259761 (feat: Adiciona as novas funcionalidades e atualizações)
        </div>
      </div>
    </div>
  </main>
<<<<<<< HEAD

  <!-- Footer Padrão -->
=======
    <div class="titulopj section-title"><h1>Projetos Iniciados</h1></div>
    <section class="bloco" id="bloco">
    <div class="texto">
      <h2>Impressora Térmica</h2>
      <p>Durante a festa junina, realizamos a impressão de fichas para auxiliar na cobrança das cartelas de bingo, garantindo organização e praticidade no evento. A iniciativa terá continuidade na festa de Halloween, fortalecendo o projeto com novas ideias e melhorias.</p>
    </div>
    <div class="imagem">
  <a href="https://vestuarioaxel.my.canva.site/impressoratermica"> <img src="imagens/Impressora.png" alt="Impressora Térmica" class="pj"></a>
    </div>
  </section>



    <section class="bloco" id="bloco">
    <div class="texto">
      <h2>Cleide Lanches</h2>
      <p>A DesenvolveTec teve o prazer de ajudar A Cleide Lanches local. Com estratégias digitais personalizadas, aumentamos sua visibilidade, engajamento e, claro, o movimento no balcão! Ver um negócio crescer com a força do marketing digital é o que nos move.</p>
    </div>
    <div class="imagem">
  <a href="https://jogos-emojis2023.my.canva.site/cleide-lanches"> <img src="imagens/cleidelanches.jpg" alt="Cleide Lanches" class="pj"></a>
    </div>
  </section>

   <section class="bloco" id="bloco">
    <div class="texto">
       <h2>Liart</h2>
      <p>Na DesenvolveTec, acreditamos que cada negócio tem sua própria identidade e no caso da loja de miçangas, ela brilha em cada detalhe, cor e forma.</p>
    </div>
     <div class="imagem">
  <a href="https://jogos-emojis2023.my.canva.site/liart-cec-lia-ramos"> <img src="imagens/liart.png" alt="Liart" class="pj"></a>
    </div>
  </section>


  <section class="bloco" id="bloco">
    <div class="texto">
      <h2>Delícias di Rainara</h2>
      <p>  Com fotos que despertam desejo, navegação fácil e um sistema de pedidos feito sob medida para quem não quer perder tempo quando a vontade de doce bate.</p>
    </div>
    <div class="imagem">
  <a href="https://jogos-emojis2023.my.canva.site/del-cias-di-rainara"> <img src="imagens/deliciasdirainara.png" alt="Delicias di Rainara" class="pj"></a>
    </div>
  </section>

  <section class="contact">
    <div class="section-title">
      <h2>Entre em Contato</h2>
      <p>Tem um projeto em mente?</p>
      <p id="section-p"> Vamos conversar sobre como podemos ajudar seu negócio a crescer.</p>
      <p><a href="contato.php" class="btn btn-contact">Entre em contato</a></p>
    </div>
  </section>

>>>>>>> 8259761 (feat: Adiciona as novas funcionalidades e atualizações)
  <footer>
    <div id="footer_content">
      <div id="footer_contacts">
        <div class="logo" id="logo-footer">
          <img src="imagens/logo_azul.png" alt="Logo DesenvolveTec" class="logo-circle">
          <p>DesenvolveTec</p>
        </div>

<<<<<<< HEAD

        <div id="footer_social_media">
          <a href="https://www.instagram.com/agenciadesenvolvetec?utm_source=ig_web_button_share_sheet&igsh=MWsyazAzZ280azNwdA==" class="footer-link" id="instagram">
            <i class="fa-brands fa-instagram"></i>
          </a>

          <a href="#" class="footer-link" id="github">
            <i class="fa-brands fa-github"></i>
          </a>

          <a  href="https://web.whatsapp.com/send?phone=55 11 91281-2313"  class="footer-link" id="whatsapp">
            <i class="fa-brands fa-whatsapp"></i>
=======
        <div id="footer_social_media">
          <a href="https://www.instagram.com/agenciadesenvolvetec?utm_source=ig_web_button_share_sheet&igsh=MWsyazAzZ280azNwdA=="
            class="footer-link" id="instagram">
            <i class="fa-brands fa-instagram"></i>
          </a>

          <a href="https://www.tiktok.com/@agencia.desenvolvetec?_t=ZM-8xV33kPaLNm&_r=1" class="footer-link"
            id="tiktok">
            <i class="fa-brands fa-tiktok"></i>
          </a>

          <a href="https://m.facebook.com/61577504643455/" class="footer-link" id="facebook">
            <i class="fa-brands fa-facebook-f"></i>
>>>>>>> 8259761 (feat: Adiciona as novas funcionalidades e atualizações)
          </a>
        </div>
      </div>

<<<<<<< HEAD

=======
>>>>>>> 8259761 (feat: Adiciona as novas funcionalidades e atualizações)
      <ul class="footer-list">
        <li>
          <h3>Navegação</h3>
        </li>
        <li>
<<<<<<< HEAD
          <a href="#" class="footer-link">Ìnicio</a>
        </li>
        <li>
          <a href="#" class="footer-link">Sobre Nòs</a>
        </li>
        <li>
          <a href="#" class="footer-link">FAQ</a>
=======
          <a href="servicos.php" class="footer-link">Serviços</a>
        </li>
        <li>
          <a href="sobre.php" class="footer-link">Sobre Nòs</a>
        </li>
        <li>
          <a href="contato.php" class="footer-link">FAQ</a>
>>>>>>> 8259761 (feat: Adiciona as novas funcionalidades e atualizações)
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
<<<<<<< HEAD
           <a href="#" class="footer-link">Sites</a>
=======
          <a href="#" class="footer-link">Sites</a>
>>>>>>> 8259761 (feat: Adiciona as novas funcionalidades e atualizações)
        </li>
        <li>
          <a href="#" class="footer-link">Suporte</a>
        </li>
      </ul>

      <div id="footer_subscribe">
        <h3>Solicitações</h3>
<<<<<<< HEAD

        <p>
          Entre em contato conosco para receber seu orçamento e 
          nossas soluções diante sua demanda.
        </p>

     
        <button class="btn" id="btn-footer">Solicitar Orçamento</button>
        </div>
=======
        <p>
          Entre em contato conosco para receber seu orçamento e
          nossas soluções diante sua demanda.
        </p>
        <button class="btn btn-footer" id="btn-footer">Solicitar Orçamento</button>
>>>>>>> 8259761 (feat: Adiciona as novas funcionalidades e atualizações)
      </div>
    </div>

    <div id="footer_copyright">
<<<<<<< HEAD
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

=======
      <p>&copy; 2025 DesenvolveTec. Todos os direitos reservados.</p>
    </div>
  </footer>

  <a class="whatsapp-link" href="https://web.whatsapp.com/send?phone=55 11 91281-2313">
    <i class="fa-brands fa-whatsapp"></i>
  </a>

  <!-- Modal de Orçamento -->
  <div id="orcamentoModal" class="modal-orcamento">
    <div class="modal-content">
      <span class="close-modal">&times;</span>
      <div class="budget-steps">
        <!-- Passo 1 - Informações Básicas -->
        <div class="step active" id="step1">
          <h3 class="step-title">Informações Básicas</h3>
          <form id="orcamentoForm">
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
          </form>
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
            <textarea id="detalhes" name="detalhes" required
              placeholder="Descreva seu projeto, objetivos, necessidades específicas e qualquer outra informação relevante..."></textarea>
          </div>
          <div class="step-nav">
            <button type="button" class="step-btn back" data-back="step2">Voltar</button>
            <button type="submit" class="form-submit">Enviar Solicitação</button>
          </div>
        </div>
      </div>
    </div>
  </div>

  <!-- Scripts -->
  <script src="js/scripts.js"></script>
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

  <script src="js/mobile-navbar.js"></script>
</body>
>>>>>>> 8259761 (feat: Adiciona as novas funcionalidades e atualizações)
</html>