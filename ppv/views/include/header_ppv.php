<!DOCTYPE html>
<!--[if lt IE 7]>
<html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>
<html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>
<html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!-->
<html class="no-js"> <!--<![endif]-->
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>PPV</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Free HTML5 Template by FREEHTML5.CO"/>
    <meta name="keywords" content="free html5, free template, free bootstrap, html5, css3, mobile first, responsive"/>
    <meta name="author" content="FREEHTML5.CO"/>

    <!-- Facebook and Twitter integration -->
    <meta property="og:title" content=""/>
    <meta property="og:image" content=""/>
    <meta property="og:url" content=""/>
    <meta property="og:site_name" content=""/>
    <meta property="og:description" content=""/>
    <meta name="twitter:title" content=""/>
    <meta name="twitter:image" content=""/>
    <meta name="twitter:url" content=""/>
    <meta name="twitter:card" content=""/>

    <!-- Place favicon.ico and apple-touch-icon.png in the root directory -->
    <link rel="shortcut icon" href="../images/icons/favicon.ico">

    <link href='https://fonts.googleapis.com/css?family=Open+Sans:300,400,700,300' rel='stylesheet' type='text/css'>

    <!-- Animate.css -->
    <link rel="stylesheet" href="css/animate.css">
    <!-- Icomoon Icon Fonts-->
    <link rel="stylesheet" href="css/icomoon.css">
    <!-- Bootstrap  -->
    <link rel="stylesheet" href="css/bootstrap.css">
    <!-- Superfish -->
    <link rel="stylesheet" href="css/superfish.css">
    <!-- Flexslider  -->
    <link rel="stylesheet" href="css/flexslider.css">
    <!-- Magnific Popup -->
    <link rel="stylesheet" href="css/magnific-popup.css">
    <!-- Date Picker -->
    <link rel="stylesheet" href="css/bootstrap-datepicker.min.css">
    <!-- CS Select -->
    <link rel="stylesheet" href="css/cs-select.css">
    <link rel="stylesheet" href="css/cs-skin-border.css">

    <link rel="stylesheet" href="css/style.css">

    <!--Chat-->
    <link rel="stylesheet" href="css/Chat.css">
    <!-- Modernizr JS -->
    <script src="js/modernizr-2.6.2.min.js"></script>
    <!-- FOR IE9 below -->
    <!--[if lt IE 9]>
    <script src="js/respond.min.js"></script>
    <![endif]-->

</head>
<body>
<div id="fh5co-wrapper">
  <div id="fh5co-page">
     <header id="fh5co-header-section" class="sticky-banner">
            <div class="container">
                <div class="nav-header">
                    <a href="index.php" class="js-fh5co-nav-toggle fh5co-nav-toggle dark"><i></i></a>
                    <h1 id="fh5co-logo"><a href="index.php"><i class="icon-home"></i>PP<span>V</span></a></h1>
                    <!-- START #fh5co-menu-wrap -->
                    <nav id="fh5co-menu-wrap" role="navigation">
                        <?php if (isset($_SESSION['user'])): ?>
                            <ul class="sf-menu" id="fh5co-primary-menu">
                                <li class="active"><a href="index.php">Inicio</a></li><!--Home Menu-->
                                <li>
                                    <a href="#" class="fh5co-sub-ddown">Pisos</a>
                                    <ul class="fh5co-sub-menu">
                                        <li><a href="#">Pisos en Venta</a></li>
                                        <li><a href="#">Pisos en Renta</a></li>
                                    </ul>
                                </li><!--Floor Menu-->
                                <li>
                                    <a href="#" class="fh5co-sub-ddown">Cuenta</a>
                                    <ul class="fh5co-sub-menu">
                                        <li><a href="EditeProfileAdmin.php">Perfil</a></li>
                                        <li><a href="../LC/LC_Login.php?logoutUser=1">logout</a></li>
                                    </ul>
                                </li><!--Account Menu-->
                            </ul>
                        <?php elseif (isset($_SESSION['admin'])): ?>
                            <ul class="sf-menu" id="fh5co-primary-menu">
                                <li class="active"><a href="index.php">Inicio</a></li><!--Home Menu-->
                                <li>
                                    <a href="#" class="fh5co-sub-ddown">Configuraciones</a>
                                    <ul class="fh5co-sub-menu">
                                        <li>
                                            <a href="#" class="fh5co-sub-ddown">Pisos</a>
                                            <ul class="fh5co-sub-menu">
                                                <li><a href="CreateFloorAdmin.php">Crear Pisos</a></li>
                                                <li><a href="floorAdmin.php">Pisos</a></li>
                                            </ul>
                                        </li><!--floor Menu-->
                                        <li>
                                            <a href="#" class="fh5co-sub-ddown">Usuarios</a>
                                            <ul class="fh5co-sub-menu">
                                                <li><a href="CreateUserAdmin.php">Crear Usuarios</a></li>
                                                <li><a href="userAdmin.php">Usuarios</a></li>
                                            </ul>
                                        </li><!--Users Menu-->
                                        <li>
                                            <a href="#" class="fh5co-sub-ddown">Administradores</a>
                                            <ul class="fh5co-sub-menu">
                                                <li><a href="adminAdmin.php">Crear Administradores</a></li>
                                            </ul>
                                        </li><!--Admins Menu-->
                                        <li>
                                            <a href="#" class="fh5co-sub-ddown">Logo</a>
                                            <ul class="fh5co-sub-menu">
                                                <li><a href="logo.php">Cambiar logo</a></li>
                                            </ul>
                                        </li><!--Logo Menu-->
                                    </ul>
                                </li><!--Config Menu-->
                                <li>
                                    <a href="#" class="fh5co-sub-ddown">Cuenta</a>
                                    <ul class="fh5co-sub-menu">
                                        <li><a href="EditeProfileAdmin.php">Perfil</a></li>
                                        <li><a href="ChatRoomAdmin.php">Mensajes</a></li>
                                        <li><a href="../LC/LC_Login.php?logoutAdmin=1">logout</a></li>
                                    </ul>
                                </li><!--Account Menu-->
                            </ul>
                        <?php else: ?>
                            <ul class="sf-menu" id="fh5co-primary-menu">
                                <li class="active"><a href="index.php">Inicio</a></li>
                                <li>
                                    <a href="#" class="fh5co-sub-ddown">Pisos</a>
                                    <ul class="fh5co-sub-menu">
                                        <li><a href="#">Pisos en Renta</a></li>
                                        <li><a href="#">Pisos en Venta</a></li>
                                    </ul>
                                </li>
                                <li><a href="../views/login.php" class="fh5co-sub-ddown">Log In</a></li><!--SignUp Menu-->
                                <li><a href="../views/signup.php" class="fh5co-sub-ddown">Registrate</a></li><!--SignUp Menu-->
                            </ul>
                        <?php endif; ?>
                    </nav>
                </div>
            </div>
        </header>
        <!-- end:header-top -->
