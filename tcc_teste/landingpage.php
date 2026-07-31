<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Medy - Seu Estoque Pessoal de Medicamentos</title>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    <style>
        :root {
            --primary: #00838F;
            --primary-light: #00ACC1;
            --primary-dark: #006064;
            --accent: #E0F7FA;
            --text-dark: #263238;
            --text-light: #607D8B;
            --white: #FFFFFF;
            --bg-gradient: linear-gradient(135deg, #E0F7FA 0%, #B2EBF2 100%);
        }

        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: 'Inter', sans-serif;
        }

        body {
            color: var(--text-dark);
            background-color: var(--white);
            line-height: 1.6;
        }

        /* --- Header --- */
        header {
            display: flex;
            justify-content: space-between;
            align-items: center;
            padding: 20px 8%;
            background-color: var(--white);
            box-shadow: 0 2px 10px rgba(0, 131, 143, 0.05);
            position: sticky;
            top: 0;
            z-index: 100;
        }

        .logo {
            font-size: 26px;
            font-weight: 700;
            color: var(--primary);
            text-decoration: none;
            display: flex;
            align-items: center;
            gap: 8px;
        }

        .nav-links {
            list-style: none;
            display: flex;
            gap: 30px;
            align-items: center;
        }

        .nav-links a {
            text-decoration: none;
            color: var(--text-light);
            font-weight: 500;
            transition: color 0.3s;
        }

        .nav-links a:hover {
            color: var(--primary);
        }

        .btn {
            background-color: var(--primary);
            color: var(--white);
            padding: 10px 22px;
            border-radius: 50px;
            text-decoration: none;
            font-weight: 600;
            transition: background 0.3s, transform 0.2s;
            box-shadow: 0 4px 12px rgba(0, 131, 143, 0.2);
        }

        .btn:hover {
            background-color: var(--primary-dark);
            transform: translateY(-2px);
        }

        /* --- Hero Section --- */
        .hero {
            display: flex;
            align-items: center;
            justify-content: space-between;
            padding: 80px 8%;
            background: var(--bg-gradient);
            min-height: 80vh;
        }

        .hero-content {
            max-width: 550px;
        }

        .hero-content h1 {
            font-size: 44px;
            color: var(--primary-dark);
            margin-bottom: 20px;
            line-height: 1.2;
        }

        .hero-content p {
            font-size: 18px;
            color: var(--text-light);
            margin-bottom: 30px;
        }

        .hero-buttons {
            display: flex;
            gap: 15px;
        }

        .btn-outline {
            background-color: transparent;
            color: var(--primary);
            border: 2px solid var(--primary);
            padding: 10px 22px;
            border-radius: 50px;
            text-decoration: none;
            font-weight: 600;
            transition: all 0.3s;
        }

        .btn-outline:hover {
            background-color: var(--accent);
        }

        .hero-card-mockup {
            background: var(--white);
            padding: 30px;
            border-radius: 20px;
            box-shadow: 0 15px 35px rgba(0, 131, 143, 0.15);
            width: 320px;
            border-top: 5px solid var(--primary-light);
        }

        .mockup-header {
            font-weight: 600;
            color: var(--primary-dark);
            margin-bottom: 15px;
            display: flex;
            justify-content: space-between;
        }

        .mockup-item {
            display: flex;
            justify-content: space-between;
            align-items: center;
            padding: 10px 0;
            border-bottom: 1px solid #E0E0E0;
            font-size: 14px;
        }

        .badge {
            background-color: #E0F7FA;
            color: var(--primary);
            padding: 4px 8px;
            border-radius: 6px;
            font-size: 12px;
            font-weight: 600;
        }

        .badge-alert {
            background-color: #FFEBEE;
            color: #C62828;
            padding: 4px 8px;
            border-radius: 6px;
            font-size: 12px;
            font-weight: 600;
        }

        /* --- Features Section --- */
        .features {
            padding: 90px 8%;
            text-align: center;
            background-color: var(--white);
        }

        .features h2 {
            font-size: 32px;
            color: var(--primary-dark);
            margin-bottom: 10px;
        }

        .section-subtitle {
            color: var(--text-light);
            margin-bottom: 50px;
            font-size: 16px;
        }

        .features-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(280px, 1fr));
            gap: 30px;
        }

        .feature-card {
            background-color: var(--accent);
            padding: 40px 30px;
            border-radius: 16px;
            transition: transform 0.3s, box-shadow 0.3s;
            text-align: left;
        }

        .feature-card:hover {
            transform: translateY(-5px);
            box-shadow: 0 10px 25px rgba(0, 131, 143, 0.1);
        }

        .feature-icon {
            font-size: 36px;
            margin-bottom: 20px;
        }

        .feature-card h3 {
            font-size: 20px;
            color: var(--primary-dark);
            margin-bottom: 10px;
        }

        .feature-card p {
            font-size: 14px;
            color: var(--text-light);
        }

        /* --- CTA Banner --- */
        .cta-banner {
            background: linear-gradient(135deg, var(--primary) 0%, var(--primary-dark) 100%);
            color: var(--white);
            text-align: center;
            padding: 70px 8%;
            margin: 40px 8%;
            border-radius: 24px;
        }

        .cta-banner h2 {
            font-size: 32px;
            margin-bottom: 15px;
        }

        .cta-banner p {
            font-size: 16px;
            margin-bottom: 30px;
            opacity: 0.9;
        }

        .btn-white {
            background-color: var(--white);
            color: var(--primary);
            padding: 12px 28px;
            border-radius: 50px;
            text-decoration: none;
            font-weight: 600;
            transition: background 0.3s, transform 0.2s;
            box-shadow: 0 4px 15px rgba(0, 0, 0, 0.1);
        }

        .btn-white:hover {
            background-color: var(--accent);
            transform: translateY(-2px);
        }

        /* --- Footer --- */
        footer {
            background-color: #111;
            color: var(--text-light);
            text-align: center;
            padding: 30px 8%;
            font-size: 14px;
        }

        footer p {
            opacity: 0.8;
        }

        /* --- Responsive Design --- */
        @media (max-width: 900px) {
            .hero {
                flex-direction: column;
                text-align: center;
                gap: 50px;
                padding: 50px 5%;
            }

            .hero-content {
                max-width: 100%;
            }

            .hero-buttons {
                justify-content: center;
            }

            .nav-links {
                display: none;
            }
        }
    </style>
</head>
<body>

    <!-- Header -->
    <header>
        <a href="#" class="logo">💊 Medy</a>
        <ul class="nav-links">
            <li><a href="#recursos">Recursos</a></li>
            <li><a href="#como-funciona">Como Funciona</a></li>
            <li><a href="#beneficios">Benefícios</a></li>
        </ul>
        <a href="#comecar" class="btn">Criar conta</a>
    </header>

    <!-- Hero Section -->
    <section class="hero">
        <div class="hero-content">
            <h1>Controle seus remédios sem complicações com o Medy</h1>
            <p>Gerencie sua farmácia caseira, acompanhe validades e receba alertas para nunca mais perder o horário ou jogar remédio fora.</p>
            <div class="hero-buttons">
                <a href="#comecar" class="btn">Começar Gratuitamente</a>
                <a href="#recursos" class="btn-outline">Ver Recursos</a>
            </div>
        </div>

        <div class="hero-card-mockup">
            <div class="mockup-header">
                <span>Estoque Atual</span>
                <span>🏠 Casa</span>
            </div>
            <div class="mockup-item">
                <span>Paracetamol 500mg</span>
                <span class="badge">12 comprimidos</span>
            </div>
            <div class="mockup-item">
                <span>Vitamina C</span>
                <span class="badge-alert">Vence em 5 dias</span>
            </div>
            <div class="mockup-item">
                <span>Ibuprofeno 600mg</span>
                <span class="badge">8 comprimidos</span>
            </div>
        </div>
    </section>

    <!-- Features Section -->
    <section class="features" id="recursos">
        <h2>Tudo o que você precisa em um só lugar</h2>
        <p class="section-subtitle">Projetado para simplificar a sua rotina de saúde e da sua família.</p>
        
        <div class="features-grid">
            <div class="feature-card">
                <div class="feature-icon">📅</div>
                <h3>Controle de Validade</h3>
                <p>Receba notificações antecipadas antes que seus medicamentos expirem e evite desperdícios.</p>
            </div>
            <div class="feature-card">
                <div class="feature-icon">🔍</div>
                <h3>Busca Rápida</h3>
                <p>Saiba exatamente o que você tem em casa em segundos, evitando compras desnecessárias na farmácia.</p>
            </div>
            <div class="feature-card">
                <div class="feature-icon">👨‍👩‍👧‍👦</div>
                <h3>Perfis Familiares</h3>
                <p>Organize os remédios por membro da família ou por categorias (urgência, uso contínuo, etc).</p>
            </div>
        </div>
    </section>

    <!-- CTA Banner -->
    <section class="cta-banner" id="comecar">
        <h2>Pronto para organizar sua saúde?</h2>
        <p>Junte-se a centenas de pessoas que simplificaram o gerenciamento de seus medicamentos com o Medy.</p>
        <a href="#" class="btn-white">Experimente</a>
    </section>

    <!-- Footer -->
    <footer>
        <p>&copy; 2026 Medy. Todos os direitos reservados. Feito com foco no seu bem-estar.</p>
    </footer>

</body>
</html>