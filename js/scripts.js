// Controle do Modal de Orçamento
document.addEventListener('DOMContentLoaded', function() {
  console.log('[DEBUG] Modal script iniciado');
  
  // Elementos principais
  const modal = document.getElementById('orcamentoModal');
  const btnHero = document.getElementById('btn-hero');
  const btnFooter = document.getElementById('btn-footer');
  
  // Verificação crítica
  if (!modal || !btnHero) {
    console.error('[ERRO] Elementos essenciais não encontrados!');
    return;
  }

  // Função para abrir modal
  function openModal() {
    console.log('[AÇÃO] Abrindo modal');
    modal.style.display = 'block';
    document.body.style.overflow = 'hidden';
  }

  // Eventos de clique
  btnHero.addEventListener('click', openModal);
  if (btnFooter) btnFooter.addEventListener('click', openModal);

  // Fechar modal
  document.querySelector('.close-modal').addEventListener('click', function() {
    modal.style.display = 'none';
    document.body.style.overflow = 'auto';
  });

  // Fechar ao clicar fora
  window.addEventListener('click', function(event) {
    if (event.target === modal) {
      modal.style.display = 'none';
      document.body.style.overflow = 'auto';
    }
  });

  // Navegação entre passos (se houver)
  document.querySelectorAll('[data-next], [data-back]').forEach(btn => {
    btn.addEventListener('click', function() {
      const target = this.getAttribute('data-next') || this.getAttribute('data-back');
      document.querySelectorAll('.step').forEach(s => s.classList.remove('active'));
      document.getElementById(target).classList.add('active');
    });
  });

  // Envio do formulário com AJAX
  const form = document.getElementById('orcamentoForm');
  if (form) {
    form.addEventListener('submit', function(e) {
      e.preventDefault();

      // Mostrar loading
      const submitBtn = this.querySelector('.form-submit');
      const originalText = submitBtn.textContent;
      submitBtn.disabled = true;
      submitBtn.textContent = 'Enviando...';

      // Coletar dados do formulário
      const formData = new FormData(this);

      // Enviar via AJAX
      fetch('salvar_orcamento.php', {
        method: 'POST',
        body: formData
      })
      .then(resp => resp.text())
      .then(data => {
        if (data.trim() === "ok") {
          alert('Solicitação enviada com sucesso!');
          modal.style.display = 'none';
          this.reset();
          // Se houver múltiplos passos, volta para o primeiro
          const step1 = document.getElementById('step1');
          if (step1) step1.classList.add('active');
        } else {
          alert('Erro ao enviar. Tente novamente.');
        }
      })
      .catch(error => {
        console.error('Erro:', error);
        alert('Erro ao enviar. Tente novamente.');
      })
      .finally(() => {
        submitBtn.disabled = false;
        submitBtn.textContent = originalText;
      });
    });
  }
});

// Scroll suave (mantido separado por ser independente)
document.querySelectorAll('nav a[href^="#"]').forEach(anchor => {
  anchor.addEventListener('click', function(e) {
    e.preventDefault();
    document.querySelector(this.getAttribute('href')).scrollIntoView({
      behavior: 'smooth',
      block: 'start'
    });
  });
});