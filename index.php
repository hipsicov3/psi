<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8" />
    <title>NeoPsi</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <style>
    @import url('https://fonts.googleapis.com/css2?family=Noto+Sans:ital,wght@0,100..900;1,100..900&display=swap');
    </style>
    <link rel="stylesheet" href="_assets/_css/index.css">
    <link rel="icon" href="_assets/_img/favicon.ico" type="image/x-icon">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="theme-color" content="#000000">
    <meta name="description" content="NeoPsi - A new way to experience the web">
    <meta name="keywords" content="NeoPsi, web, experience, new, technology">
    <meta name="author" content="Vincent, meu marido ❤️">
    <meta name="robots" content="index, follow">
    <meta property="og:title" content="NeoPsi">
    <meta property="og:description" content="A new way to experience the web">
    <meta property="og:image" content="_assets/_img/og-image.png">
    <meta property="og:url" content="https://neopsi.com">
    <meta property="og:type" content="website">
    <meta property="og:site_name" content="NeoPsi">
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="NeoPsi">
    <meta name="twitter:description" content="A new way to experience the web">
    <meta name="twitter:image" content="_assets/_img/twitter-image.png">
    <meta name="twitter:site" content="@neopsi">
    <meta name="twitter:creator" content="@vincent">
    <link rel="apple-touch-icon" sizes="180x180" href="_assets/_img/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="_assets/_img/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="_assets/_img/favicon-16x16.png">
    <link rel="manifest" href="_assets/_img/site.webmanifest">
    <link rel="mask-icon" href="_assets/_img/safari-pinned-tab.svg" color="#5bbad5">
    <link rel="shortcut icon" href="_assets/_img/favicon.ico">
    <meta name="msapplication-TileColor" content="#da532c">
    <meta name="msapplication-config" content="_assets/_img/browserconfig.xml">
    <meta name="theme-color" content="#ffffff">
</head>
<body>
    <div class="dashboard-container">
        <aside class="sidebar">
            <div class="sidebar-header">
                <h3>Portal do Psicólogo</h3>
            </div>
            <nav class="sidebar-nav">
                <ul>
                    <li><a href="#" class="active"><i class="bi bi-house-door-fill"></i> Início</a></li>
                    <li><a href="#"><i class="bi bi-calendar-check"></i> Agendamento Online</a></li>
                    <li><a href="#"><i class="bi bi-people-fill"></i> Gestão de Pacientes</a></li>
                    <li><a href="#"><i class="bi bi-journal-medical"></i> Prontuário Digital</a></li>
                    <li><a href="#"><i class="bi bi-person-circle"></i> Página do Profissional</a></li>
                    <li><a href="#"><i class="bi bi-currency-dollar"></i> Controle Financeiro</a></li>
                    <li><a href="#"><i class="bi bi-book"></i> Materiais e Orientações</a></li>
                    <li><a href="#"><i class="bi bi-lightbulb-fill"></i> Insights IA</a></li>
                    <li><a href="#"><i class="bi bi-megaphone-fill"></i> Marketing e Divulgação</a></li>
                    <li><a href="#"><i class="bi bi-chat-left-dots-fill"></i> Comunidade / Rede Colaborativa</a></li>
                    <li><a href="#"><i class="bi bi-gear-fill"></i> Configurações</a></li>
                    <li><a href="#"><i class="bi bi-box-arrow-right"></i> Sair</a></li>
                </ul>
            </nav>
        </aside>
        <main class="main-content">
            <header class="navbar">
                <div class="search-bar">
                    <input type="text" placeholder="Pesquisar...">
                    <i class="bi bi-search"></i>
                </div>
                <div class="user-info">
                    <span>Olá, Dr(a). [Seu Nome]</span>
                    <img src="https://via.placeholder.com/40" alt="Avatar do Usuário" class="user-avatar">
                </div>
            </header>
            <section class="dashboard-overview">
                <h2>Bem-vindo ao seu Dashboard!</h2>
                <div class="stats-grid">
                    <div class="stat-card">
                        <i class="bi bi-calendar-check icon-large"></i>
                        <h3>Próximos Agendamentos</h3>
                        <p>5 hoje, 12 esta semana</p>
                    </div>
                    <div class="stat-card">
                        <i class="bi bi-person-add icon-large"></i>
                        <h3>Novos Pacientes</h3>
                        <p>2 este mês</p>
                    </div>
                    <div class="stat-card">
                        <i class="bi bi-graph-up icon-large"></i>
                        <h3>Receita Estimada</h3>
                        <p>R$ 2.500,00</p>
                    </div>
                    <div class="stat-card">
                        <i class="bi bi-folder-fill icon-large"></i>
                        <h3>Prontuários Atualizados</h3>
                        <p>15 pendentes</p>
                    </div>
                </div>

                <div class="quick-access">
                    <h3>Acesso Rápido</h3>
                    <div class="quick-access-buttons">
                        <button><i class="bi bi-plus-circle-fill"></i> Novo Agendamento</button>
                        <button><i class="bi bi-person-plus-fill"></i> Adicionar Paciente</button>
                        <button><i class="bi bi-file-medical-fill"></i> Criar Prontuário</button>
                        <button><i class="bi bi-bar-chart-fill"></i> Ver Relatórios</button>
                    </div>
                </div>

                <section class="insights-ia-section hidden">
                    <header>
                        <h2><i class="bi bi-lightbulb-fill"></i> Insights da Inteligência Artificial</h2>
                        <p class="subheader">Descubra padrões e insights para otimizar sua prática clínica.</p>
                    </header>

                    <div class="insights-container">
                        <div class="insight-card">
                            <h3>Tendências de Humor dos Pacientes</h3>
                            <div class="insight-content">
                                <p>Análise das anotações e prontuários sugere um aumento na prevalência de sintomas relacionados à ansiedade nos últimos três meses, particularmente entre pacientes na faixa etária de 25 a 35 anos.</p>
                                <ul>
                                    <li><i class="bi bi-arrow-up-short text-danger"></i> Aumento de 15% nos relatos de ansiedade.</li>
                                    <li><i class="bi bi-dot text-primary"></i> Faixa etária mais afetada: 25-35 anos.</li>
                                    <li><i class="bi bi-chat-left-fill text-info"></i> Foco em estratégias de manejo de ansiedade nas próximas sessões.</li>
                                </ul>
                                <button class="btn btn-outline-primary btn-sm">Ver Detalhes</button>
                            </div>
                        </div>

                        <div class="insight-card">
                            <h3>Engajamento em Materiais Educacionais</h3>
                            <div class="insight-content">
                                <p>Os materiais sobre técnicas de relaxamento e mindfulness têm apresentado alta taxa de visualização e download pelos pacientes, indicando um interesse significativo nessa área.</p>
                                <ul>
                                    <li><i class="bi bi-eye-fill text-success"></i> Média de 80 visualizações por material.</li>
                                    <li><i class="bi bi-download text-success"></i> 60 downloads na última semana.</li>
                                    <li><i class="bi bi-lightbulb-fill text-warning"></i> Considerar a criação de mais conteúdo relacionado.</li>
                                </ul>
                                <button class="btn btn-outline-primary btn-sm">Ver Materiais</button>
                            </div>
                        </div>

                        <div class="insight-card">
                            <h3>Padrões de Agendamento e Cancelamento</h3>
                            <div class="insight-content">
                                <p>A análise dos dados de agendamento revela uma maior frequência de cancelamentos nas segundas-feiras pela manhã. Isso pode indicar um padrão a ser explorado.</p>
                                <ul>
                                    <li><i class="bi bi-calendar-x-fill text-warning"></i> Pico de cancelamentos às segundas-feiras (9h-11h).</li>
                                    <li><i class="bi bi-question-circle-fill text-muted"></i> Investigar possíveis causas (compromissos de trabalho, etc.).</li>
                                    <li><i class="bi bi-bell-fill text-info"></i> Considerar lembretes de agendamento mais eficazes.</li>
                                </ul>
                                <button class="btn btn-outline-primary btn-sm">Ver Agendamentos</button>
                            </div>
                        </div>
                    </div>
                </section>

                <div class="recent-activity">
                    <h3>Atividade Recente</h3>
                    <ul>
                        <li><i class="bi bi-clock-fill"></i> Agendamento com João Silva - 10:00 AM (Hoje)</li>
                        <li><i class="bi bi-pencil-fill"></i> Prontuário de Maria Santos atualizado</li>
                        <li><i class="bi bi-chat-quote-fill"></i> Nova mensagem na Comunidade</li>
                        <li><i class="bi bi-credit-card-fill"></i> Pagamento recebido de Ana Paula</li>
                    </ul>
                </div>
            </section>
        </main>
    </div>
</body>
</html>