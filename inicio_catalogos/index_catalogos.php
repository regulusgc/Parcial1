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
        <div class="pages-nav__item"><a class="link link--page" href="#page-dessubsi">Destino_Subsidio</a></div>
        <div class="pages-nav__item"><a class="link link--page" href="#page-usuario">Usuario</a></div>
        <div class="pages-nav__item"><a class="link link--page" href="#page-manuals">Desarrolladores</a></div>
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
         Tipo de ingreso, ya sea individual, grupal o por constructora o por tu hermanaaaaaaa
        </p>
        <br>
        <br>
        <a class="boton_personalizado"  href="../forms/tipo_ingreso.php">Crear</a>
      </header>
      <img class="poster" src="images/pangea-bitacora-510x330.png" alt="img05" />
    </div>

    <div class="page" id="page-Expediente">
      <header class="bp-header cf">
        <h1 class="bp-header__title">Unidad de Trabajo</h1>
        <p class="bp-header__desc">Formulario de unidades de trabajo</p>
        <p class="info">
         Agregar unidades de trabajo para que todo sea mas ordenado diceeen

        </p>
        <br>
        <br>
        <a class="boton_personalizado"  href="../forms/unidad_de_trabajo.php">Crear</a>
      </header>
      <img class="poster" src="images/usi.png" alt="img05" />
    </div>

    <div class="page" id="page-dessubsi">
    <header class="bp-header cf">
      <h1 class="bp-header__title">Destino_Subsidio</h1>
      <p class="bp-header__desc">Formularios de Destinos de Subsidio</p>
      <p class="info">
    Diferentes subsisdios que tendran ay ya no se que poner aca
      </p>
      <br>
      <br>
      <a class="boton_personalizado"  href="../forms/destino_subsidio.php">Crear</a>
    </header>
    <img class="poster" src="images/Firma-Electronica-Avanzada.png" alt="img05" />
  </div>
<! >
    <div class="page" id="page-usuario">
      <header class="bp-header cf">
        <h1 class="bp-header__title">Usuario</h1>
        <p class="bp-header__desc">Formularios de Usuario</p>
        <p class="info">
  Agregar usuarios
        </p>
        <br>
        <br>
        <a class="boton_personalizado"  href="../forms/Usuarios.php">Crear</a>
      </header>
      <img class="poster" src="images/dili.png" alt="img05" />
    </div>
    <!>
    <div class="page" id="page-manuals">
      <header class="bp-header cf">
        <h1 class="bp-header__title">Desarrolladores</h1>
        <p class="bp-header__desc">Formularios Para Desarrolladores</p>
        <p class="info">
         AGREGAR DESARROLLADORES
        </p>
        <br>
        <br>
        <a class="boton_personalizado"  href="../forms/Desarrollador.php">Crear</a>
      </header>
      <img class="poster" src="images/digi.png" alt="img05" />
    </div>
    <!>


	</div>
	<!-- /pages-stack -->
	<button class="menu-button"><span>Menu</span></button>
	<script src="js/classie.js"></script>
	<script src="js/main.js"></script>
</body>

</html>
