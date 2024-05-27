<!DOCTYPE html>
<html lang="en">
<head>
    <title>Document</title>
    <link rel="stylesheet" href="../styles/styles.css">
    <?php include '../modulos/head.php';?>
</head>
<body>
    <div class="wrapper">
        <?php include '../modulos/header.php';?>
        <main class="main">
            <div class="info-content">
                <h1>SOY <span>NICOLAS</span> CORTES</h1>
                <p>Soy Nicolás Cortés Matta, tengo 22 años y actualmente soy estudiante de Ingeniería de Sistemas en la Universidad Uniminuto. Resido en el municipio de Ricaurte, donde he desarrollado mis habilidades y conocimientos en el ámbito de la tecnología y la informática.</p>
                <a download="" href="#">
                    <button>Download CV</button>
                </a>    
            </div>
            <img src="../images/Perfil.jpeg" alt="Nicolás Cortés">
        </main>
    </div>
    <div class="about">
        <img src="../images/Acercademi.jpeg" alt="Nicolás imagen">
        <div class="about-info">
            <h2>Acerca de mí</h2>
            <div class="divider"></div>
            <p>Soy Nicolás Cortés Matta, tengo 22 años y actualmente estudio Ingeniería de Sistemas en la Universidad Uniminuto. Vivo en el municipio de Ricaurte, donde también trabajo en el condominio San Marcos. Me gradué como bachiller en la Institución Educativa Antonio Nariño de Ricaurte, obteniendo además un título técnico en Agroindustria. Uno de mis objetivos a largo plazo es graduarme como Ingeniero de Sistemas, con un gran interés en especializarme en el diseño web, que es una de mis mayores pasiones.</p>
            <a download="" href="#">
                <button>Download CV</button>
            </a>  
        </div>
    </div>
    <div class="galeria">
        <div class="content-image">
            <div class="imagen">
                <img src="../images/Aamon.jpg" alt="">
                <div class="overlay">
                    <h2>Aamon</h2>
                </div>
            </div>
            <div class="imagen">
                    <img src="../images/AfterDark.jpg" alt="">
                    <div class="overlay">
                        <h2>After Dark</h2>
                    </div>
            </div>
            <div class="imagen">
                    <img src="../images/Awake.jpg" alt="">
                    <div class="overlay">
                        <h2>Awake</h2>
                    </div>
            </div>
            <div class="imagen">
                    <img src="../images/Stonebank.jpg" alt="">
                    <div class="overlay">
                        <h2>Back to Start</h2>
                    </div>
            </div>
            <div class="imagen">
                    <img src="../images/BlurredVision.jpg" alt="">
                    <div class="overlay">
                        <h2>Blurred Vision</h2>
                    </div>
            </div>
            <div class="imagen">
                    <img src="../images/CloseToHell.jpg" alt="">
                    <div class="overlay">
                        <h2>Close To Hell</h2>
                    </div>
            </div>
            <div class="imagen">
                    <img src="../images/CloserbyLaszlo.jpg" alt="">
                    <div class="overlay">
                        <h2>Closer</h2>
                    </div>
            </div>
            <div class="imagen">
                    <img src="../images/ColdSkin.jpg" alt="">
                    <div class="overlay">
                        <h2>Cold Skin</h2>
                    </div>
            </div>
            <div class="imagen">
                    <img src="../images/CravebyTristam.jpg" alt="">
                    <div class="overlay">
                        <h2>Crave</h2>
                    </div>
            </div>
            <div class="contact" id="contact">
                <h1 class="text-center mb-4">Contactame</h1>
                <div class="contact_box">
                    <div class="form-group">
                        <label for="nombre">Nombre:</label>
                        <input id="nombre" class="form-control" type="text" placeholder="Nicolás Cortes">
                    </div>
                    <div class="form-group">
                        <label for="email">Correo electrónico:</label>
                        <input id="email" class="form-control" type="email" placeholder="nicolas@example.com">
                    </div>
                    <div class="form-group">
                        <label for="mensaje">Mensaje:</label>
                        <textarea id="mensaje" class="form-control" placeholder="Escribe tu mensaje"></textarea>
                    </div>
                    <button class="btn btn-primary btn-block">Enviar mensaje</button>
                </div>
            </div>            
        </div>
    </div>
        <?php include '../modulos/footer.php';?>
        <?php include '../modulos/script.php';?>
    </body>
    </html>