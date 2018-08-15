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
	<title>Catalogos</title>
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
		<div class="pages-nav__item"><a class="link link--page" href="#page-depto">Departamento</a></div>
		<div class="pages-nav__item"><a class="link link--page" href="#page-Municipio">Municipio</a></div>
		<div class="pages-nav__item"><a class="link link--page" href="#page-software">Rol</a></div>
        <div class="pages-nav__item"><a class="link link--page" href="#page-training">Sexo</a></div>
        <div class="pages-nav__item"><a class="link link--page" href="#page-bitacora">TipoIngreso</a></div>
        <div class="pages-nav__item"><a class="link link--page" href="#page-Expediente">Unidad_Trabajo</a></div>
        <div class="pages-nav__item"><a class="link link--page" href="#page-Usuarios">Destino_Subsidio</a></div>
	</nav>
	<!-- /navigation-->
	<!-- pages stack -->
	<div class="pages-stack">
		<!-- page -->
		<div class="page" id="page-home">
			<!-- Blueprint header -->
			<header class="bp-header cf">
                <span class="bp-header__present">CATALOGOS <span class="bp-tooltip bp-icon bp-icon--about" data-content="The Blueprints are a collection of basic and minimal website concepts, components, plugins and layouts with minimal style for easy adaption and usage, or simply for inspiration."></span></span>
                <h1 class="bp-header__title">Bienvenido</h1>
                <p class="bp-header__desc">Actualilzar Catalogos </p>
                <p class="bp-header__title"><?php echo $completo['NOMBRE']; ?></p>
                <p class="bp-header__title"><?php echo $completo['APELLIDO']; ?></p>
			</header>
			<img class="poster" src="images/umg.png" alt="img01" />
		</div>
		<!-- /page -->
		<div class="page" id="page-depto">
			<header class="bp-header cf">
				<h1 class="bp-header__title">Departamento</h1>
				<p class="bp-header__desc">Formulario de departamento</p>
                <br>
                <a class="boton_personalizado"  href="../forms/Departamento.php">Crear</a>
			</header>
			<img class="poster" src="images/pro.png" alt="img06" />
		</div>

		<div class="page" id="page-Municipio">
			<header class="bp-header cf">
				<h1 class="bp-header__title">Municipio</h1>
				<p class="bp-header__desc">Formulario de Municipio</p>
        <br>
        <br>
        <a class="boton_personalizado"  href="../forms/Municipio.php">Crear</a>
			</header>
			<img class="poster" src="images/des.png" alt="img02" />
		</div>

		<div class="page" id="page-software">
			<header class="bp-header cf">
				<h1 class="bp-header__title">Rol</h1>
				<p class="bp-header__desc">Formulario de Roles</p>
				<p class="info">
					AGREGAR LOS ROLES DE LOS USUARIOS
				</p>
        <br>
        <br>
        <a class="boton_personalizado"  href="../forms/Roles.php">Crear</a>
			</header>
			<img class="poster" src="images/requi.png" alt="img03" />
		</div>

		<div class="page" id="page-training">
			<header class="bp-header cf">
				<h1 class="bp-header__title">Requisitos de Expedientes</h1>
				<p class="bp-header__desc">Formulario de Requisitos de Expedientes</p>
				<p class="info">
					Para añadir informacion necesaria sobre el expediente llene el siguiente formulario
				</p>
        <br>
        <br>
        <a class="boton_personalizado"  href="../forms/exp.php">Crear</a>
			</header>
			<img class="poster" src="images/expii.png" alt="img04" />
		</div>

		<div class="page" id="page-training">
			<header class="bp-header cf">
				<h1 class="bp-header__title">Sexo</h1>
				<p class="bp-header__desc">Expediente de Sexo</p>
				<p class="info">
					AGREGAR LOS DIFERENTES SEXOS PORQUE AHORA CADA MAJE SALE CON QUE QUIERE SER
                    PERRO O SABER QUE DIABLOS SI NO ME  DEMANDAN LOS DE LA LGTBI
				</p>
        <br>
        <br>
        <a class="boton_personalizado"  href="../forms/sexo.php">Crear</a>
			</header>
			<img class="poster" src="images/pers.png" alt="img05" />
		</div>

    <div class="page" id="page-bitacora">
      <header class="bp-header cf">
        <h1 class="bp-header__title">Tipo Ingreso</h1>
        <p class="bp-header__desc">Tipo de Ingreso</p>
        <p class="info">
         Para llenar la bitacora es importante llenar el siguiente formulario
        </p>
        <br>
        <br>
        <a class="boton_personalizado"  href="../forms/bitacora.php">Crear</a>
      </header>
      <img class="poster" src="images/pangea-bitacora-510x330.png" alt="img05" />
    </div>

    <div class="page" id="page-Usuarios">
      <header class="bp-header cf">
        <h1 class="bp-header__title">Usuarios</h1>
        <p class="bp-header__desc">Formulario de Usuarios</p>
        <p class="info">
          Para solicitar un usuario o un nuevo usuario
          por favor llene el siguiente formulario

        </p>
        <br>
        <br>
        <a class="boton_personalizado"  href="../forms/usi.php">Crear</a>
      </header>
      <img class="poster" src="images/usi.png" alt="img05" />
    </div>

    <div class="page" id="page-Expediente">
    <header class="bp-header cf">
      <h1 class="bp-header__title">Expedientes</h1>
      <p class="bp-header__desc">Formularios de Expedientes</p>
      <p class="info">
        Para llenar un expediente llene el siguiente formulario
      </p>
      <br>
      <br>
      <a class="boton_personalizado"  href="../forms/expirme.php">Crear</a>
    </header>
    <img class="poster" src="images/Firma-Electronica-Avanzada.png" alt="img05" />
  </div>
<! >
    <div class="page" id="page-dili">
      <header class="bp-header cf">
        <h1 class="bp-header__title">Categoria Diligencias</h1>
        <p class="bp-header__desc">Formularios de Diligencias</p>
        <p class="info">
          Para agregar una Diligencia  llene el siguiente formulario
        </p>
        <br>
        <br>
        <a class="boton_personalizado"  href="../forms/dili.php">Crear</a>
      </header>
      <img class="poster" src="images/dili.png" alt="img05" />
    </div>
    <!>
    <div class="page" id="page-digi">
      <header class="bp-header cf">
        <h1 class="bp-header__title">Digitalizacion</h1>
        <p class="bp-header__desc">Formularios de digitadores</p>
        <p class="info">
          Para tener digitalizacion llene el siguiente formulario
        </p>
        <br>
        <br>
        <a class="boton_personalizado"  href="../forms/Digitalizacion.php">Crear</a>
      </header>
      <img class="poster" src="images/digi.png" alt="img05" />
    </div>
    <!>
    <div class="page" id="page-expdili">
      <header class="bp-header cf">
        <h1 class="bp-header__title">Expedientes Diligencia</h1>
        <p class="bp-header__desc">Formularios de Expedientes de diligencias</p>
        <p class="info">
          Para llenar un expediente de diligencias llene el siguiente formulario
        </p>
        <br>
        <br>
        <a class="boton_personalizado"  href="../forms/exdili.php">Crear</a>
      </header>
      <img class="poster" src="images/est.png" alt="img05" />
    </div>

	</div>
	<!-- /pages-stack -->
	<button class="menu-button"><span>Menu</span></button>
	<script src="js/classie.js"></script>
	<script src="js/main.js"></script>
</body>

</html>
