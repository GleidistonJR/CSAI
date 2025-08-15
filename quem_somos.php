<?php 
    include 'base/partials/head.html';
    include 'base/partials/header.html';
?>

<body>
    <main>
        <div class="container">
            <section style="text-align:center; margin: 3rem 0;">
                <h1 style="font-size:3rem; font-weight:bold; margin-bottom:0.5rem;">Quem Somos</h1>
            </section>

            <section style="margin: 3rem 0; ">
                <h2 style="font-size:2rem; ">Nossa Missão</h2>
                <p style="font-size:1.1rem;">
                    No CSAI, somos apaixonados por inovação e tecnologia. Nossa missão é transformar o setor de saúde, tornando-o mais eficiente, humano e acessível. Acreditamos que a Inteligência Artificial pode ser uma aliada poderosa para clínicas e consultórios, automatizando tarefas rotineiras e liberando tempo para o que realmente importa: o cuidado com o paciente.
                </p>
            </section>

            <section style="margin: 3rem 0;">
                <h2 style="font-size:2rem;">O Que Fazemos</h2>
                <p style="font-size:1.1rem;">
                    Desenvolvemos soluções inteligentes que facilitam o agendamento, desmarcação e gestão de consultas. Nosso sistema utiliza IA para responder dúvidas, organizar agendas e melhorar a comunicação entre profissionais e pacientes. Com tecnologia de ponta, garantimos segurança, rapidez e praticidade no atendimento.
                </p>
            </section>

            <section style="margin: 3rem 0;">
                <h2 style="font-size:2rem;">Nossos Valores</h2>
                <div style="display:flex; gap:2rem; flex-wrap:wrap; justify-content:center;">
                    <div style="flex:1; min-width:200px; text-align:center;">
                        <i class="bi bi-lightbulb" style="font-size: 4em; color: #36aeeb;"></i>  
                        <h3>Inovação</h3>
                        <p>Criamos soluções modernas para desafios reais.</p>
                    </div>
                    <div style="flex:1; min-width:200px; text-align:center;">
                        <i class="bi bi-people" style="font-size: 4em; color: #36aeeb;"></i>
                        <h3>Humanização</h3>
                        <p>Colocamos o paciente no centro de tudo.</p>
                    </div>
                    <div style="flex:1; min-width:200px; text-align:center;">
                        <i class="bi bi-shield-lock" style="font-size: 4em; color: #36aeeb;"></i>
                        <h3>Segurança</h3>
                        <p>Protegemos dados e garantimos privacidade.</p>
                    </div>
                </div>
            </section>

            <section style="margin: 3rem 0;">
                <h2 style="font-size:2rem;">Impacto em Números</h2>
                <canvas id="graficoImpacto" width="400" height="200"></canvas>
                <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
                <script>
                    const ctx = document.getElementById('graficoImpacto').getContext('2d');
                    new Chart(ctx, {
                        type: 'bar',
                        data: {
                            labels: ['Aumento em agendamentos', 'Taxa de resposta em até 1 minuto', 'Redução em faltas e cancelamentos', 'Redução na carga de trabalho da recepção'],
                            datasets: [{
                                label: 'Resultados 2025',
                                data: [32, 89, -47, -28],
                                backgroundColor: [
                                    '#008cffff',
                                    '#008cffff',
                                    '#c50505ff',
                                    '#c50505ff'
                                ]
                            }]
                        },
                        options: {
                            responsive: true,
                            plugins: {
                                legend: { display: false }
                            }
                        }
                    });
                </script>
            </section>

            <section style="margin: 3rem 0;">
                <h2 style="font-size:2rem;">Junte-se a Nós!</h2>
                <p style="font-size:1.1rem;">
                    Venha fazer parte dessa revolução na saúde. Nossa equipe está pronta para ajudar sua clínica a crescer com tecnologia, eficiência e cuidado. Entre em contato e descubra como podemos transformar juntos o atendimento aos pacientes!
                </p>
            </section>
        </div>
    </main>
</body>
<?php 
    include 'base/partials/footer.html';
?>