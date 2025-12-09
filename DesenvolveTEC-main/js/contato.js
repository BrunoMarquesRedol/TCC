document.addEventListener('DOMContentLoaded', function() {
  const form = document.getElementById('contatoForm');
  const msg = document.getElementById('contatoMsg');
  if (form) {
    form.addEventListener('submit', function(e) {
      e.preventDefault();
      msg.textContent = 'Enviando...';

      const formData = new FormData(form);

      fetch('enviar_contato.php', {
        method: 'POST',
        body: formData
      })
      .then(resp => resp.text())
      .then(data => {
        if (data.trim() === "ok") {
          msg.textContent = 'Mensagem enviada com sucesso!';
          form.reset();
        } else {
          msg.textContent = 'Erro ao enviar. Tente novamente.';
        }
      })
      .catch(() => {
        msg.textContent = 'Erro ao enviar. Tente novamente.';
      });
    });
  }
});