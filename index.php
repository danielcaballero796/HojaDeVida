<?php require_once 'helpers.php' ?>
<!DOCTYPE html>
<html class='no-js'>

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Daniel Caballero</title>
    <link rel="shortcut icon" href="img/Logodan2.png" type="image/x-icon" />
    <link rel='stylesheet' type='text/css' href='bootstrap/css/bootstrap.min.css'>
    <link rel='stylesheet' type='text/css' href='css/ionicons.min.css'>
    <link rel='stylesheet' type='text/css' href='css/owl.carousel.css'>
    <link rel='stylesheet' type='text/css' href='css/owl.theme.css'>
    <link rel='stylesheet' type='text/css' href='css/owl.transitions.css'>
    <link rel='stylesheet' type='text/css' href='css/magnific-popup.css'>
    <link rel='stylesheet' type='text/css' href='css/style.css'>
    <link rel='stylesheet' type='text/css' href='css/color-default.css'>
</head>

<body>
    <!--===================================Main Wrapper================================-->
    <div id='wrapper'>
        <div style="margin-left: 10px;">
            <h5>Idiomas Disponibles:</h5>
            <a onclick="español()"><img src="img/spain.svg" alt="idioma" style="width: 5%"></a>
            <a onclick="ingles()"><img src="img/great_britain.svg" alt="idioma" style="width: 5.5%"></a>
        </div>
        <!--================================Front Section============================-->
        <?php require_once("./views/principal.php") ?>
        <!--================================About Section============================-->
        <?php require_once("./views/about.php") ?>
        <!--================================Resume Section============================-->
        <?php require_once("./views/resume.php") ?>
        <!--================================Services Section============================-->
        <?php require_once("./views/service.php") ?>
        <!--================================Portfolio Section============================-->
        <?php require_once("./views/portfolio.php") ?>
        <!--================================Contact Section============================-->
        <?php require_once("./views/contact.php") ?>

        <!--close button-->
        <div id="cerrarVentana" class='close-btn'>
            <span></span>
            <span></span>
        </div>
    </div>
    <!--===============================JavaScript Files============================-->
    <script src='js/jquery-3.1.1.min.js'></script>
    <script src='js/script.js'></script>
    <script src="js/jquery.min.js"></script>
    <script src='js/jquery.stellar.min.js'></script>
    <script src='js/modernizr.js'></script>
    <script src='js/owl.carousel.min.js'></script>
    <script src='js/jquery.shuffle.min.js'></script>
    <script src='js/jquery.magnific-popup.min.js'></script>
    <script src='js/validator.min.js'></script>
    <script src='js/smoothscroll.js'></script>
    <script src='js/languages.js?v=<?= md5_file('js/languages.js');?>'></script>
</body>

</html>