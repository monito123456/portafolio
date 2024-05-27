<!DOCTYPE html>
<html lang="en">
<head>
    <title>Acerca de mí - Nicolás Cortés</title>
    <?php include '../modulos/head.php';?>
    <link rel="stylesheet" href="../styles/stylesAcercaDeMi.css">
</head>
<body>
    <div class="wrapper">
        <?php include '../modulos/header.php';?>
        <main class="about-page">
            <section class="hero-section">
                <img src="../images/Perfil.jpeg" alt="Nicolás Cortés">
                <div class="hero-content">
                    <h1>Sobre mí</h1>
                    <p>¡Hola! Soy Nicolás Cortés Matta, un apasionado estudiante de Ingeniería de Sistemas en la Universidad Uniminuto, con una fuerte inclinación hacia el diseño web y la tecnología. Vivo en Ricaurte, donde he dedicado mi tiempo a desarrollar habilidades técnicas y conocimientos que me permitan enfrentar los desafíos del mundo digital.</p>
                    <a download="" href="#">
                        <button>Download CV</button>
                    </a>    
                </div>
            </section>
            <section class="background-section">
                <h2>Mi Trayectoria</h2>
                <div class="divider"></div>
                <p>Desde mi juventud, me he interesado por la tecnología y la informática. Me gradué como bachiller en la Institución Educativa Antonio Nariño de Ricaurte, donde también obtuve un título técnico en Agroindustria. Actualmente, compagino mis estudios universitarios con mi trabajo en el condominio San Marcos, lo que me permite aplicar mis conocimientos en un entorno real.</p>
            </section>
            <section class="skills-section">
                <h2>Habilidades</h2>
                <div class="divider"></div>
                <div class="skills-container">
                    <div class="skill">
                        <h3>Diseño Web</h3>
                        <p>Me especializo en crear sitios web intuitivos y estéticamente agradables utilizando HTML, CSS y JavaScript.</p>
                    </div>
                    <div class="skill">
                        <h3>Desarrollo Backend</h3>
                        <p>Tengo experiencia en el desarrollo backend utilizando lenguajes como Python y bases de datos SQL.</p>
                    </div>
                    <div class="skill">
                        <h3>Resolución de Problemas</h3>
                        <p>Soy eficiente en identificar problemas y encontrar soluciones innovadoras y efectivas.</p>
                    </div>
                </div>
            </section>
            <section class="contact-section">
                <h2>Contacto</h2>
                <div class="divider"></div>
                <p>Si deseas saber más sobre mí o discutir oportunidades, no dudes en ponerte en contacto.</p>
                <form class="contact-form">
                    <div class="form-group">
                        <label for="name">Nombre</label>
                        <input type="text" class="form-control" id="name" placeholder="Tu nombre">
                    </div>
                    <div class="form-group">
                        <label for="email">Correo Electrónico</label>
                        <input type="email" class="form-control" id="email" placeholder="tuemail@example.com">
                    </div>
                    <div class="form-group">
                        <label for="message">Mensaje</label>
                        <textarea class="form-control" id="message" placeholder="Escribe tu mensaje"></textarea>
                    </div>
                    <button type="submit" class="btn btn-primary">Enviar Mensaje</button>
                </form>
            </section>
        </main>
    </div>
    <?php include '../modulos/footer.php';?>
    <?php include '../modulos/script.php';?>
</body>
</html>