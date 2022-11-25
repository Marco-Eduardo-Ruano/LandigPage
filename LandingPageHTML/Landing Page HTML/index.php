<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Landing Page HTML programacion para internet</title>
    <link href="https://fonts.googleapis.com/css?family=Raleway:200,300,400,500&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="css/estilos.css">
</head>

<body>
    <header class="hero">
        <div class="textos-hero">
            <h1>Landing Page</h1>
            <p>By Marco Ruano</p>
            <a href="#contacto">Contactame</a>
        </div>
        <div class="svg-hero" style="height: 150px; overflow: hidden;"><svg viewBox="0 0 500 150" preserveAspectRatio="none"
                style="height: 100%; width: 100%;">
                <path d="M0.00,49.98 C149.99,150.00 349.20,-49.98 500.00,49.98 L500.00,150.00 L0.00,150.00 Z"
                    style="stroke: none; fill: #fff;"></path>
            </svg></div>
    </header>


    <section class="wave-contenedor website">
        <img src="img/ilustracion1.svg" alt="">
        <div class="contenedor-textos-main">
            <h2 class="titulo left">Title of section</h2>
            <p class="parrafo">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Incidunt enim reiciendis
                molestias nam tempore. Ullam hic accusantium eligendi ipsam corrupti!</p>
            <a href="" class="cta">Learn more</a>
        </div>
    </section>

    <section class="info">
        <div class="contenedor">
            <h2 class="titulo left">Juntos podemos apoyar</h2>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit.</p>
        </div>
    </section>

    <section class="cards contenedor">
        <h2 class="titulo">Our services</h2>
        <div class="content-cards">
            <article class="card">
                <i class="far fa-clone"></i>
                <h3>Title Card</h3>
                <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit.</p>
                <a href="" class="cta">Learn more</a>
            </article>
            <article class="card">
                <i class="fas fa-database"></i>
                <h3>Title Card</h3>
                <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit.</p>
                <a href="" class="cta">Learn more</a>
            </article>
            <article class="card">
                <i class="far fa-object-group"></i>
                <h3>Title Card</h3>
                <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit.</p>
                <a href="" class="cta">Learn more</a>
            </article>
        </div>
    </section>

    <section class="galeria">
        <div class="contenedor">
            <h2 class="titulo">Our work</h2>
            <article class="galeria-cont">
                <img src="img/uno.jpg" alt="">
                <img src="img/dos.jpg" alt="">
                <img src="img/tres.jpg" alt="">
                <img src="img/cuatro.jpg" alt="">
                <img src="img/cinco.jpg" alt="">
                <img src="img/seis.jpg" alt="">
            </article>
        </div>
    </section>

    <section class="info-last">

        <div class="contenedor last-section">
            <div class="contenedor-textos-main">
                <h2 class="titulo left">Title of section</h2>
                <p class="parrafo">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Dolorum reprehenderit nostrum expedita quasi odio architecto laudantium sunt nemo dicta atque?</p>
                <a href="" class="cta">Learn more</a>
            </div>
            <img src="img/ilustracion.svg" alt="">
        </div>
        
        <div class="svg-wave" style="height: 150px; overflow: hidden;"><svg viewBox="0 0 500 150" preserveAspectRatio="none"
            style="height: 100%; width: 100%;">
            <path d="M0.00,49.98 C149.99,150.00 349.20,-49.98 500.00,49.98 L500.00,150.00 L0.00,150.00 Z"
                style="stroke: none; fill: #f5576c;"></path>
        </svg></div>
    </section>

    <footer id="contacto">
        <div class="contenedor">
            <h2 class="titulo">Contact us</h2>
            <form action="" class="form">
                <input type="text" name= "nombre" placeholder="nombre">
                <input type="email" name="email" placeholder="email">
                <input type="text" name=" comentarios" placeholder="comentarios">
                <input type="submit" name="Enviar">

<?php
            include("registrar.php");
            ?>

            </form>
           
            
        </div>
        
    </footer>


     
</body>

</html>