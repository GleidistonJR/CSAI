// Função que conta de 0 até o valor
function contarAte(span, final, duracao = 1500) {
  let inicio = null;
  function passo(agora) {
    if (!inicio) inicio = agora;
    const progresso = Math.min((agora - inicio) / duracao, 1);
    span.textContent = Math.floor(progresso * final);
    if (progresso < 1) requestAnimationFrame(passo);
  }
  requestAnimationFrame(passo);
}

// Observer
const observer = new IntersectionObserver(
  entries => {
    entries.forEach(entry => {
      if (entry.isIntersecting) {
        entry.target.classList.add('visivel');

        // Se for um parágrafo com contador animado
        if (entry.target.classList.contains('contador-animado')) {
          const valor = +entry.target.dataset.perc;
          const span = entry.target.querySelector('.contador');
          if (parseInt(span.textContent) !== valor) {
            contarAte(span, valor, 700);
          }
        }

      } else {
        entry.target.classList.remove('visivel');

        // Zera contador para repetir animação se sair da tela
        if (entry.target.classList.contains('contador-animado')) {
          const span = entry.target.querySelector('.contador');
          span.textContent = 0;
        }
      }
    });
  },
  { threshold: 0.3 }
);

// Observa imagens animadas
document.querySelectorAll('.animado, .animado2, .animado3').forEach(el => observer.observe(el));

// Observa parágrafos com contador
document.querySelectorAll('.contador-animado').forEach(el => observer.observe(el));
