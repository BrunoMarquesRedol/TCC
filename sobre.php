<!DOCTYPE html>
<html lang="pt-BR">
<<<<<<< HEAD
=======

>>>>>>> 8259761 (feat: Adiciona as novas funcionalidades e atualizações)
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Sobre Nós</title>
<<<<<<< HEAD

  <script src="js/scripts.js"></script>

  <link rel="stylesheet" href="css/estilo.css">
  <link rel="stylesheet" href="css/css-sobre.css">
</head>
<body>

<header id="mainHeader">
    <div class="logo">
      <img src="imagens/logo_azul.png" alt="Logo DesenvolveTec" class="logo-circle">
      DesenvolveTec
    </div>
    <div class="hamburger" id="hamburger-menu" aria-label="Abrir menu" tabindex="0">
      <div></div>
      <div></div>
      <div></div>
    </div>
    <nav id="mainNav">
      <a href="index.php">Home</a>
      <a href="servicos.php">Serviços</a>
      <a href="contato.php">Contato</a>
=======
  <link rel="stylesheet" href="css/estilo.css">
  <link rel="stylesheet" href="css/sobre.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
</head>

<body>

  <?php
// Conexão com o banco de dados
$conn = new mysqli("localhost", "root", "", "desenvolvetec");
if ($conn->connect_error) {
  die("Erro de conexão: " . $conn->connect_error);
}
$sql = "SELECT nome, cargo, foto FROM equipe";
$result = $conn->query($sql);
?>

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
        <li><a href="home.php">Home</a><li>
        <li><a href="servicos.php">Serviços</a></li>
        <li><a href="contato.php">Contato</a></li>
      </ul>
>>>>>>> 8259761 (feat: Adiciona as novas funcionalidades e atualizações)
    </nav>
  </header>

  <section class="hero">
    <h1>Sobre Nós</h1>
<<<<<<< HEAD
    <p>Criatividade e inovação para o seu sucesso</p>
    <a href="#essencia">Ver Mais</a>
=======
    <h2>Criatividade, Inovação para a Sua Empresa</h2>
    <a href="#essencia" class="btn btn-footer">Mais Informações</a>
>>>>>>> 8259761 (feat: Adiciona as novas funcionalidades e atualizações)
  </section>

  <section class="bloco" id="essencia">
    <div class="texto">
      <h2>Nossa Essência</h2>
<<<<<<< HEAD
      <p>Somos estudantes do terceiro ano na ETEC de Caieiras, apaixonados por tecnologia, design e inovação. Unimos nossos conhecimentos para criar uma empresa jovem, criativa e focada em soluções digitais. Com comprometimento e profissionalismo buscamos oferecer serviços que transformam ideias em experiências digitais marcantes.</p>
=======
      <p>Somos estudantes do terceiro ano na ETEC de Caieiras, apaixonados por tecnologia, design e inovação. Unimos
        nossos conhecimentos para criar uma empresa jovem, criativa e focada em soluções digitais. Com comprometimento e
        profissionalismo buscamos oferecer serviços que transformam ideias em experiências digitais marcantes.</p>
>>>>>>> 8259761 (feat: Adiciona as novas funcionalidades e atualizações)
    </div>
    <div class="imagem">
      <img src="imagens/junto.jpg" alt="Equipe trabalhando">
    </div>
  </section>

<<<<<<< HEAD
  <section class="bloco">
    <div class="texto">
      <h2>Nossa Missão</h2>
      <p>Nossa missão é ajudar pessoas e empresas a prosperarem online, criando personalizados <br> sites e soluções em marketing digital, com foco no cliente e resultados de qualidade.</p>
    </div>
    <div class="imagem">
      <img src="imagens/missao.jpg" alt="Missão da equipe">
=======
  <section class="bloco" id="bloco">
    <div class="texto">
      <h2>Nossa Missão</h2>
      <p>Nossa missão é ajudar pessoas e empresas a prosperarem online, criando sites personalizados e soluções para
        marketing digital, com foco no cliente e resultados de qualidade. Mantendo assim uma boa relação e comunicação
        com as necessidades de nossos consumidores.</p>
    </div>
    <div class="imagem">
      <img src="imagens/nossaMissao.jpg" alt="Missão da equipe">
>>>>>>> 8259761 (feat: Adiciona as novas funcionalidades e atualizações)
    </div>
  </section>

  <section class="bloco">
    <div class="texto">
      <h2>Cultura da Agência</h2>
<<<<<<< HEAD
      <p>Acreditamos na troca, no acolhimento e na inovação constante. Trabalhamos com liberdade e organização, valorizando a criatividade de cada membro. Nossa cultura é viva, colaborativa e centrada em pessoas. Aqui, todos têm voz e vez.</p>
    </div>
    <div class="imagem">
      <img src="/imagens/cultura.jpg" alt="Cultura do grupo">
=======
      <p>Acreditamos na troca, no acolhimento e na inovação constante. Trabalhamos com liberdade e organização,
        valorizando a criatividade de cada membro. Nossa cultura é viva, colaborativa e centrada em pessoas. Aqui, todos
        têm voz e vez.</p>
    </div>
    <div class="imagem">
      <img src="imagens/cultura.png" alt="Cultura da equipe">
>>>>>>> 8259761 (feat: Adiciona as novas funcionalidades e atualizações)
    </div>
  </section>

  <section class="equipe">
    <h2>Nossa Equipe</h2>
    <br>
    <div class="membros">
<<<<<<< HEAD
      <div class="membro">
        <img src="/imagens/bruno.jpg" alt="Foto 1">
        <h4>Bruno Marques</h4>
        <p>Desenvolvedor</p>
      </div>
      <div class="membro">
        <img src="/imagens/davi.jpg" alt="Foto 2">
        <h4>Davi Miranda</h4>
        <p>Desenvolvedor</p>
      </div>
      <div class="membro">
        <img src="/imagens/mateus.jpg" alt="Foto 3">
        <h4>Mateus Hayashi</h4>
        <p>Desenvolvedor</p>
      </div>
      <div class="membro">
        <img src="/imagens/caio.jpg" alt="Foto 4">
        <h4>Caio Ribeiro</h4>
        <p>Desenvolvedor</p>
      </div>
      <div class="membro">
        <img src="/imagens/Jean.jpg" alt="Foto 2">
        <h4>Jean</h4>
        <p>Design Gráfico</p>
      </div>
      <div class="membro">
        <img src="/imagens/membro2.jpg" alt="Foto 2">
        <h4>Nome e Sobrenome</h4>
        <p>Design Gráfico</p>
      </div>
      <div class="membro">
        <img src="/imagens/membro2.jpg" alt="Foto 2">
        <h4>Nome e Sobrenome</h4>
        <p>Design Gráfico</p>
      </div>
      <div class="membro">
        <img src="/imagens/membro2.jpg" alt="Foto 2">
        <h4>Nome e Sobrenome</h4>
        <p>Design Gráfico</p>
      </div>
      <div class="membro">
        <img src="/imagens/membro2.jpg" alt="Foto 2">
        <h4>Nome e Sobrenome</h4>
        <p>Design Gráfico</p>
      </div>
      <div class="membro">
        <img src="/imagens/membro2.jpg" alt="Foto 2">
        <h4>Nome e Sobrenome</h4>
        <p>Design Gráfico</p>
      </div>
      <div class="membro">
        <img src="/imagens/membro2.jpg" alt="Foto 2">
        <h4>Nome e Sobrenome</h4>
        <p>Design Gráfico</p>
      </div>
      <div class="membro">
        <img src="/imagens/membro2.jpg" alt="Foto 2">
        <h4>Nome e Sobrenome</h4>
        <p>Design Gráfico</p>
      </div>
      <div class="membro">
        <img src="/imagens/membro2.jpg" alt="Foto 2">
        <h4>Nome e Sobrenome</h4>
        <p>Design Gráfico</p>
      </div>
      <div class="membro">
        <img src="/imagens/membro2.jpg" alt="Foto 2">
        <h4>Nome e Sobrenome</h4>
        <p>Design Gráfico</p>
      </div>
      <div class="membro">
        <img src="/imagens/membro2.jpg" alt="Foto 2">
        <h4>Nome e Sobrenome</h4>
        <p>Design Gráfico</p>
      </div>
      <div class="membro">
        <img src="/imagens/membro2.jpg" alt="Foto 2">
        <h4>Nome e Sobrenome</h4>
        <p>Design Gráfico</p>
      </div>
      <div class="membro">
        <img src="/imagens/membro2.jpg" alt="Foto 2">
        <h4>Nome e Sobrenome</h4>
        <p>Design Gráfico</p>
      </div>
      <div class="membro">
        <img src="/imagens/membro2.jpg" alt="Foto 2">
        <h4>Nome e Sobrenome</h4>
        <p>Design Gráfico</p>
      </div>
      <div class="membro">
        <img src="/imagens/membro2.jpg" alt="Foto 2">
        <h4>Nome e Sobrenome</h4>
        <p>Design Gráfico</p>
      </div>
      <div class="membro">
        <img src="/imagens/membro2.jpg" alt="Foto 2">
        <h4>Nome e Sobrenome</h4>
        <p>Design Gráfico</p>
      </div>
      <div class="membro">
        <img src="/imagens/membro2.jpg" alt="Foto 2">
        <h4>Nome e Sobrenome</h4>
        <p>Design Gráfico</p>
      </div>
      <div class="membro">
        <img src="/imagens/membro2.jpg" alt="Foto 2">
        <h4>Nome e Sobrenome</h4>
        <p>Design Gráfico</p>
      </div>
      <div class="membro">
        <img src="/imagens/membro2.jpg" alt="Foto 2">
        <h4>Nome e Sobrenome</h4>
        <p>Design Gráfico</p>
      </div>
=======
      <?php if ($result && $result->num_rows > 0): ?>
      <?php while($row = $result->fetch_assoc()): ?>
      <div class="membro">
        <?php if (!empty($row['foto'])): ?>
          <img src="<?php echo htmlspecialchars($row['foto']); ?>" 
               alt="Foto de <?php echo htmlspecialchars($row['nome']); ?>"
               onerror="this.style.display='none'; this.nextElementSibling.style.display='block'">
        <?php else: ?>
          <div class="avatar-fallback" style="width:100%; height:250px; background:#ddd; display:flex; align-items:center; justify-content:center;">
            <i class="fas fa-user" style="font-size: 3rem; color: #666;"></i>
          </div>
        <?php endif; ?>
        <h4><?php echo htmlspecialchars($row['nome']); ?></h4>
        <p><?php echo htmlspecialchars($row['cargo']); ?></p>
      </div>
      <?php endwhile; ?>
      <?php else: ?>
      <p>Nenhum membro cadastrado.</p>
      <?php endif; ?>
>>>>>>> 8259761 (feat: Adiciona as novas funcionalidades e atualizações)
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
<<<<<<< HEAD
            <textarea id="detalhes" name="detalhes" required placeholder="Descreva seu projeto, objetivos, necessidades específicas e qualquer outra informação relevante..."></textarea>
=======
            <textarea id="detalhes" name="detalhes" required
              placeholder="Descreva seu projeto, objetivos, necessidades específicas e qualquer outra informação relevante..."></textarea>
>>>>>>> 8259761 (feat: Adiciona as novas funcionalidades e atualizações)
          </div>
          <div class="step-nav">
            <button type="button" class="step-btn back" data-back="step2">Voltar</button>
            <button type="submit" class="form-submit">Enviar Solicitação</button>
          </div>
        </div>
      </form>
    </div>
  </div>

<<<<<<< HEAD
=======
  <!-- Footer Padrão -->
>>>>>>> 8259761 (feat: Adiciona as novas funcionalidades e atualizações)
  <footer>
    <div id="footer_content">
      <div id="footer_contacts">
        <div class="logo" id="logo-footer">
          <img src="imagens/logo_azul.png" alt="Logo DesenvolveTec" class="logo-circle">
          <p>DesenvolveTec</p>
        </div>

        <div id="footer_social_media">
<<<<<<< HEAD
          <a href="https://www.instagram.com/agenciadesenvolvetec?utm_source=ig_web_button_share_sheet&igsh=MWsyazAzZ280azNwdA==" class="footer-link" id="instagram">
            <i class="fa-brands fa-instagram"></i>
          </a>

          <a href="#" class="footer-link" id="github">
            <i class="fa-brands fa-github"></i>
          </a>

          <a  href="https://web.whatsapp.com/send?phone=55 11 91281-2313"  class="footer-link" id="whatsapp">
            <i class="fa-brands fa-whatsapp"></i>
=======
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
<<<<<<< HEAD
          Entre em contato conosco para receber seu orçamento e 
          nossas soluções diante sua demanda.
        </p>
        <button class="btn" id="btn-footer">Solicitar Orçamento</button>
      </div>
    </div>
    
    <div id="footer_copyright">
      <p>&copy; 2023 DesenvolveTec. Todos os direitos reservados.</p>
    </div>
  </footer>

</body>
</html>
=======
          Entre em contato conosco para receber seu orçamento e
          nossas soluções diante sua demanda.
        </p>
        <button class="btn btn-footer" id="btn-hero">Solicitar Orçamento</button>
      </div>
    </div>

    <div id="footer_copyright">
      <p>&copy; 2025 DesenvolveTec. Todos os direitos reservados.</p>
    </div>
  </footer>

  <?php $conn->close(); ?>

  <a class="whatsapp-link" href="https://web.whatsapp.com/send?phone=55 11 91281-2313">
    <i class="fa-brands fa-whatsapp"></i>
  </a>

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
  <script src="js/mobile-navbar.js"></script>
</body>
</html>
>>>>>>> 8259761 (feat: Adiciona as novas funcionalidades e atualizações)
