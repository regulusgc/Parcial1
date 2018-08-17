<?php

require ("../conexion/Db.class.php");
$db = new DB();
$username = $_COOKIE['username'];




$completo = $db->row("SELECT NOMBRE,APELLIDO FROM db_prueba.tb_usuarios WHERE USERNAME = :t ",array("t"=>$username));

?>

<!DOCTYPE html>
<html lang="en" class="no-js">

<head>
	<meta charset="UTF-8" />
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Digitadores</title>
	<meta name="description" content="Blueprint: A basic template for a page stack navigation effect" />
	<meta name="keywords" content="blueprint, template, html, css, page stack, 3d, perspective, navigation, menu" />
	<meta name="author" content="Codrops" />
	<link rel="shortcut icon" href="favicon.ico">
	<link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css">
	<link rel="stylesheet" type="text/css" href="css/demo.css" />
	<link rel="stylesheet" type="text/css" href="css/component.css" />
	<script src="js/modernizr-custom.js"></script>
</head>

<body>
<nav  id="log">
  <div >
    <p class="navbar-text pull-right "style="padding-left: 15px " >
      <a  class="btn btn-dark" href="../login/lou.php"> Logout</a>
      <br>

    </p>

    <p class="navbar-text pull-right">
      Conectado como <a href="#" class="navbar-link"><?php echo $_COOKIE['username']; ?></a>

    </p>

  </div>

</nav>
	<!-- navigation -->
<br>
<br>

	<nav class="pages-nav">
		<div class="pages-nav__item"><a class="link link--page" href="#page-home">Home</a></div>
		<div class="pages-nav__item"><a class="link link--page" href="#page-docu">Proyecto</a></div>
        <div class="pages-nav__item"><a class="link link--page" href="#page-custom">Expediente</a></div>

		<div class="pages-nav__item"><a class="link link--page" href="#page-software">Expediente Requisitos</a></div>
        <div class="pages-nav__item"><a class="link link--page" href="#page-manuals">Personas Involucradas</a></div>
		<div class="pages-nav__item pages-nav__item--social">
			<a class="link link--social link--faded" href="https://www.instagram.com/regulus_gc/"><i class="fa fa-instagram" aria-hidden="true"></i><span class="text-hidden">Instagram</span></a>

			<a class="link link--social link--faded" href=" https://www.facebook.com/maareneg"><i class="fa fa-facebook"></i><span class="text-hidden">Facebook</span></a>
			<a class="link link--social link--faded" href="https://www.youtube.com/channel/UC3ZuHVaMv8ENHOpNNvHd9xw?view_as=subscriber"><i class="fa fa-youtube-play"></i><span class="text-hidden">YouTube</span></a>
		</div>
	</nav>
	<!-- /navigation-->
	<!-- pages stack -->
	<div class="pages-stack">
		<!-- page -->
		<div class="page" id="page-home">
			<!-- Blueprint header -->
			<header class="bp-header cf">
				<span class="bp-header__present">Digitacion <span class="bp-tooltip bp-icon bp-icon--about" data-content="The Blueprints are a collection of basic and minimal website concepts, components, plugins and layouts with minimal style for easy adaption and usage, or simply for inspiration."></span></span>
				<h1 class="bp-header__title">Bienvenido</h1>
				<p class="bp-header__desc">Creacion de Formularios </p>
                <p class="bp-header__title"><?php echo $completo['NOMBRE']; ?></p>
                <p class="bp-header__title"><?php echo $completo['APELLIDO']; ?></p>

			</header>
			<img class="poster" src="images/umg.png" alt="img01" />
		</div>
		<!-- /page -->
		<div class="page" id="page-docu">
			<header class="bp-header cf">
				<h1 class="bp-header__title">Proyectos</h1>
				<p class="bp-header__desc">Formularios de Proyectos</p>
				<p class="info">
					Llene el siguiente formulario para poder solicitar un nuevo proyecto :3
				</p>
        <br>
        <br>
      <a class="boton_personalizado"  href="../forms/Proyectos.php">Crear</a>
			</header>
			<img class="poster" src="images/pro.png" alt="img06" />
            <!-- /page -->
        </div>

            <div class="page" id="page-custom">
                <header class="bp-header cf">
                    <h1 class="bp-header__title">Expediente</h1>
                    <p class="bp-header__desc"></p>
                    <p class="info">

                    </p>
                    <br>
                    <br>
                    <a class="boton_personalizado"  href="../forms/Expediente.php">Crear</a>
                </header>
                <img class="poster" src="images/expii.png" alt="img04" />
            </div>
            <!-- /page -->


            <!-- /page -->
        <div class="page" id="page-software">
            <header class="bp-header cf">
                <h1 class="bp-header__title">Expediente Requisitos</h1>
                <p class="bp-header__desc">Formulario de Expediente Requisitos</p>
                <p class="info">
                    Para añadir informacion necesaria sobre el expediente llene el siguiente formulario
                </p>
                <br>
                <br>
                <a class="boton_personalizado"  href="../forms/ExpedienteRequisito.php">Crear</a>
            </header>
            <img class="poster" src="images/requi.png" alt="img03" />
        </div>
        <!-- /page -->

        <div class="page" id="page-manuals">
            <header class="bp-header cf">
                <h1 class="bp-header__title">Personas Involucradas</h1>
                <p class="bp-header__desc">Formulario de Personas Involucradas</p>
                <p class="info">
                    Llenar todas las personas involucradas en el proyecto, ya sea
                    padres, hijos, esposos, abuelos y hasta tu hermanaaaaaaaaaaa

                </p>
                <br>
                <br>
                <a class="boton_personalizado"  href="../forms/Personain.php">Crear</a>
            </header>
            <img class="poster" src="images/usi.png" alt="img05" />
        </div>



		</div>




	<!-- /pages-stack -->
	<button class="menu-button"><span>Menu</span></button>
	<script src="js/classie.js"></script>
	<script src="js/main.js"></script>
</body>

</html>
