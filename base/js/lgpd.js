document.addEventListener('DOMContentLoaded', () => {
  const banner  = document.getElementById('lgpd-banner');
  const botao   = document.getElementById('lgpd-aceitar');

  // Clique em "Aceitar"
  botao.addEventListener('click', () => {
    banner.classList.add('oculto');            // esconde banner
  });
});