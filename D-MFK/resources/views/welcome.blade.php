<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>D-AFK - Agendamento Simplificado de Salas</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body>
    <header>
        <img src="dmfk.png" alt="Logo D-MFK" class="logo-img">
        <nav>
            <ul>
                <li><a href="#hero">Início</a></li>
                <li><a href="#about">Sobre</a></li>
                <li><a href="#services">Serviços</a></li>
                <li><a href="#testimonials">Depoimentos</a></li>
                <li><a href="#contact">Contato</a></li>
            </ul>
        </nav>
    </header>

    <section id="hero" class="hero">
        <div class="overlay"></div>
        <div class="content">
            <h1>Bem-vindo ao D-MFK</h1>
            <p>Imagine um mundo onde você nunca mais precisa se preocupar em encontrar uma sala de reunião disponível!<br>
                É isso que fazemos: ajudamos você a agendar espaços de forma rápida e fácil, sem dor de cabeça.</p>
            <a href="#about" class="btn">Saiba Mais</a>
        </div>
    </section>

    <section class="segundaPagina">
        <section id="about" class="about">
            <h2>Sobre Nós</h2>
            <p>O D-MFK é uma plataforma inovadora que simplifica o processo de agendamento de salas de reunião. Nossa
                missão é eliminar o estresse e a ineficiência associados à reserva de espaços, proporcionando uma
                experiência rápida e sem complicações.</p>
        </section>

        <section id="services" class="services">
            <h2>Nossos Serviços</h2>
            <div class="service-item">
                <h3>Notificações em Tempo Real</h3>
                <p>Receba atualizações instantâneas sobre o status das suas reservas.</p>
            </div>
            <div class="service-item">
                <h3>Gestão de Espaços</h3>
                <p>Gerencie todos os seus espaços de reunião em um único lugar.</p>
            </div>
            <div class="service-item">
                <h3>Agendamento Rápido</h3>
                <p>Reserve salas de reunião em segundos com nossa interface intuitiva.</p>
                <button id="agendar">Agendar</button>
            </div>
        </section>

        <section id="testimonials" class="testimonials">
            <h2>Depoimentos</h2>
            <div class="testimonial-item">
                <p>"O D-MFK transformou a maneira como reservamos nossas salas de reunião. É rápido e eficiente!"</p>
                <h4>- João Silva, Empresa XYZ</h4>
            </div>
            <div class="testimonial-item">
                <p>"Nunca foi tão fácil gerenciar nossos espaços de reunião. Recomendo a todos!"</p>
                <h4>- Maria Oliveira, Empresa ABC</h4>
            </div>
        </section>
        
        <section id="contact" class="contact">
            <h2>Contato</h2><br>
            <p>Entre em contato conosco para saber mais sobre nossos serviços e como podemos ajudar sua empresa a gerenciar
                suas salas de reunião de forma mais eficiente.</p><br>
                <form>
                    <input type="text" placeholder="Seu Nome" required>
                    <input type="email" placeholder="Seu Email" required>
                    <textarea placeholder="Sua Mensagem" required></textarea>
                    <button type="submit">Enviar</button>
                </form>
            </section>
        </section>

    <footer>
        <p>&copy; 2025 D-AFK. Todos os direitos reservados.</p>
    </footer>

    <script src="apps.js"></script>
</body>
</html>
