// Controle do Modal de Orçamento
document.addEventListener('DOMContentLoaded', function () {
  console.log('[DEBUG] Modal script iniciado');

  // Elementos principais
  const modal = document.getElementById('orcamentoModal');
<<<<<<< Updated upstream
  const btnsFooter = document.querySelectorAll('.btn-footer');
  const closeModal = document.querySelector('.close-modal');
=======
  const btnHero = document.getElementById('btn-hero');
  const btnFooter = document.getElementById('btn-footer');

  // Verificação crítica (só exige o modal)
  if (!modal) {
    console.error('[ERRO] Modal não encontrado!');
    return;
  }
>>>>>>> Stashed changes

  // Abre o modal ao clicar em qualquer botão de orçamento
  btnsFooter.forEach(btn => {
    btn.addEventListener('click', function(e) {
      e.preventDefault();
      if (modal) {
        modal.style.display = 'block';
        document.body.style.overflow = 'hidden';

<<<<<<< Updated upstream
        // Navegação entre os passos do modal de orçamento
        const steps = document.querySelectorAll('#orcamentoModal .step');
        steps.forEach((step, idx) => {
          if (idx === 0) {
            step.classList.add('active');
            step.style.display = 'block';
          } else {
            step.classList.remove('active');
            step.style.display = 'none';
          }
        });
      }
    });
  });

  // Fecha o modal ao clicar no X
  if (closeModal && modal) {
    closeModal.addEventListener('click', function() {
      modal.style.display = 'none';
      document.body.style.overflow = 'auto';
    });
  }

  // Fecha o modal ao clicar fora dele
  window.addEventListener('click', function(event) {
=======
  // Eventos de clique (só adiciona se existir)
  if (btnHero) btnHero.addEventListener('click', openModal);
  if (btnFooter) btnFooter.addEventListener('click', openModal);

  // Fechar modal
  document.querySelector('.close-modal').addEventListener('click', function () {
    modal.style.display = 'none';
    document.body.style.overflow = 'auto';
  });

  // Fechar ao clicar fora
  window.addEventListener('click', function (event) {
>>>>>>> Stashed changes
    if (event.target === modal) {
      modal.style.display = 'none';
      document.body.style.overflow = 'auto';
    }
  });

  // Navegação entre passos (se houver)
  document.querySelectorAll('[data-next], [data-back]').forEach(btn => {
    btn.addEventListener('click', function () {
      const target = this.getAttribute('data-next') || this.getAttribute('data-back');
      document.querySelectorAll('.step').forEach(s => s.classList.remove('active'));
      document.getElementById(target).classList.add('active');
    });
  });

  // Navegação entre os passos do modal de orçamento
  const steps = document.querySelectorAll('#orcamentoModal .step');
  const nextBtns = document.querySelectorAll('#orcamentoModal .step-btn.next');
  const backBtns = document.querySelectorAll('#orcamentoModal .step-btn.back');

  nextBtns.forEach(btn => {
    btn.addEventListener('click', function() {
      const currentStep = this.closest('.step');
      const nextStepId = this.getAttribute('data-next');
      const nextStep = document.getElementById(nextStepId);
      if (currentStep && nextStep) {
        currentStep.classList.remove('active');
        currentStep.style.display = 'none';
        nextStep.classList.add('active');
        nextStep.style.display = 'block';
      }
    });
  });

  backBtns.forEach(btn => {
    btn.addEventListener('click', function() {
      const currentStep = this.closest('.step');
      const backStepId = this.getAttribute('data-back');
      const backStep = document.getElementById(backStepId);
      if (currentStep && backStep) {
        currentStep.classList.remove('active');
        currentStep.style.display = 'none';
        backStep.classList.add('active');
        backStep.style.display = 'block';
      }
    });
  });

  // Envio do formulário com AJAX
  const form = document.getElementById('orcamentoForm');
  if (form) {
    form.addEventListener('submit', function (e) {
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
  anchor.addEventListener('click', function (e) {
    e.preventDefault();
    document.querySelector(this.getAttribute('href')).scrollIntoView({
      behavior: 'smooth',
      block: 'start'
    });
  });
});