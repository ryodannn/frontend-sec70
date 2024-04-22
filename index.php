<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width-device-width, initial-scale-1.0">
    <meta http-equiv="X-UA-COMPATIBLE" content="ie-edge">

    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.12.1/css/all.css" crossorigin="anonymous">

    <link rel="stylesheet" href="style.css?v=1">
    <title>EV 1 XD</title>
    </head>
<body>
    <header>
        <h2 class="logo">MZP Company</h2>
        <input type="checkbox" id="check">
        <label for="check" class="verMenu">
            &#8801
        </label>
        <nav class="menu">
            <a href="#">Inicio</a>
            <a href="#">Sobre nosotros</a>
            <a href="#">Contacto</a>
            <label for="check" class="hideMenu">
                &#215
            </label>
        </nav>
    </header>
    <section id="banner">
        <div class="contenidoBanner">
            <h3><span>Empresa N°1 en Servicios</span><br>Servicios de Consultoría de Marketing<br></h3>
            <a href="#" class="botonInicio">INICIAR</a>
        </div>
    </section>
    <section id="sobreNosotros">
        <div>
            <img src="./sobreNosotros2.png" alt="">
            <h4>Misión</h4>
            <p>Nuestra misión es ofrecer soluciones digitales innovadoras y de alta calidad que impulsen el éxito de nuestros clientes, ayudándolos a alcanzar sus objetivos empresariales a través de la tecnología y la creatividad.</p>
            <h4>Visión</h4>
            <p>Nos visualizamos como líderes en el campo de la consultoría y desarrollo de software, reconocidos por nuestra excelencia en el servicio al cliente, nuestra capacidad para adaptarnos a las necesidades cambiantes del mercado y nuestra contribución al crecimiento y la transformación digital de las empresas.</p>
            <a href="#" class="boton-masInfo">Más info</a>
        </div>
    </section>

    <section id="iconos">
        <div class="iconosBanner">
            <div>
                <img src="./github.svg" width="100" height="60">
                <h6>Consultoría digital</h6>
                <p>Identificamos las fallas y conectamos los puntos entre tu negocio y tu estrategia digital. Nuestro equipo experto cuenta con años de experiencia en la definición de estrategias y hojas de ruta en función de tus objetivos específicos.</p>
            </div>
            <div>
            <img src="./mug-hot-solid.svg" width="100" height="60">
                <h6>Soluciones multiexperiencia</h6>
                <p>Deleitamos a las personas usuarias con experiencias interconectadas a través de aplicaciones web, móviles, interfaces conversacionales, digital twin, IoT y AR. Su arquitectura puede adaptarse y evolucionar para adaptarse a los cambios de tu organización.</p>
            </div>
            <div>
            <img src="./user-regular.svg" width="100" height="60">
                <h6>Evolución de ecosistemas</h6>
                <p>Ayudamos a las empresas a evolucionar y ejecutar sus aplicaciones de forma eficiente, desplegando equipos especializados en la modernización y el mantenimiento de ecosistemas técnicos. Creando soluciones robustas en tecnologías de vanguardia.</p>
            </div>
            <div>
            <img src="./code-solid.svg" width="100" height="60">
                <h6>Soluciones Low-Code</h6>
                <p>Traemos el poder de las soluciones low-code y no-code para ayudar a nuestros clientes a acelerar su salida al mercado y añadir valor. Aumentamos la productividad y la calidad, reduciendo los requisitos de cualificación de los desarrolladores.</p>
            </div>
        </div>
        <div class="botonIconos">
            <a href="#" class="boton-masInfo">Saber más</a>
        </div>
    </section>

    <section id="contacto">
        <h4>Contáctanos</h4>
        <form action="#">
            <div class="datos-form">
                <div class="nombre">
                    <label for="name">Nombre</label>
                    <input type="text" name="name" id="name" placeholder="Nombre">
                </div>
                <div class="email">
                    <label for="email">Email</label>
                    <input type="email" name="email" id="email" placeholder="Email">
                </div>
            </div>    
             <div class="mensaje">
                 <label for="mensaje">Mensaje</label> 
                 <textarea name="mensaje" id="mensaje" cols="30" rows="10" placeholder="Mensaje"></textarea>
            </div>
            <div class="botonEnviarForm">
                 <a href="#" class="boton-masInfo">Enviar mensaje</a>
            </div>
        </form>
    </section>
    <footer>
        <p>&copy;2024 Naviscode</p>
    </footer>
</body>
</html>
    