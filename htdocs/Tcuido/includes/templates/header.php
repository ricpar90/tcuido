<!doctype html>
<html class="no-js" lang="">

<head>
    <meta charset="utf-8">
    <title></title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="manifest" href="site.webmanifest">
    <link rel="apple-touch-icon" href="icon.png">
    <!-- Place favicon.ico in the root directory -->

    <link rel="stylesheet" href="css/normalize.css">
    <link rel="stylesheet" href="css/all.min.css">

    <?php
        $archivo = basename($_SERVER['PHP_SELF']);
        $pagina = str_replace('.php', "", $archivo);
        if ($pagina == 'estetica'){
            echo '<link rel="stylesheet" href="css/colorbox.css">';
        } else if($pagina == 'instalaciones'){
            echo '<link rel="stylesheet" href="css/lightbox.css">';
        } else if($pagina == 'index')
            echo '<link rel="stylesheet" href="css/colorbox.css">';
    ?>
    
    
    <link href="https://fonts.googleapis.com/css2?family=Acme&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans&family=Oswald&family=PT+Sans&family=Permanent+Marker&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Lobster&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://unpkg.com/leaflet@1.7.1/dist/leaflet.css" />
    <link rel="stylesheet" href="css/main.css">

    <meta name="theme-color" content="#fafafa">
</head>

<body class="<?php echo $pagina; ?>">
    <header class="site-header">
        <div class="hero">
            <div class="contenido-header">
                <nav class="redes-sociales">
                    <a href="#"><i class="fab fa-facebook-f"></i></a>
                    <a href="#"><i class="fab fa-twitter"></i></a>
                    <a href="#"><i class="fab fa-youtube"></i></a>
                    <a href="#"><i class="fab fa-instagram"></i></a>
                    <a href="#"><i class="fab fa-whatsapp"></i>  981 67 30 61</a>
                </nav>
                <div class="informacion-evento">
                    <div class="clearfix">
                    </div>
                    <h1 class="nombre-sitio">Centro de estética en Betanzos</h1>
                </div>
            </div>
        </div>
    </header>

    <div class="barra">
        <div class="contenedor clearfix">
            <div class="logo">
                <a href="index.php">
                <img src="img/logotipocuida.svg" alt="Logo tcuida">
                </a>
            </div>
            <div class="menu-movil">
                <span></span>
                <span></span>
                <span></span>
            </div>
            <nav class="navegacion-principal clearfix">
                <a href="instalaciones.php">Instalaciones</a>  
                <a href="registro.php">Registro</a>
                <a href="servicios.php">Servicios</a>
                <a href="estetica.php">Estética</a>
            </nav>
        </div>
        <!-- contenedor -->
    </div>