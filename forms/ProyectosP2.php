<?php
require("../conexion/Db.class.php");

$db = new DB();
session_start();
$_SESSION['depto'] = $_POST['depto'];

$nombre = $_SESSION['depto'];


$depar = $db ->row("SELECT DESCRIPCION_DEPARTAMENTO FROM db_prueba.tb_cat_departamento WHERE ID_DEPARTAMENTO = :f ",array("f"=>"$nombre"));


$mpio = $db->query("SELECT * FROM db_prueba.tb_cat_municipios WHERE ID_DEPARTAMENTO = :f ",array("f"=>"$nombre"));

$DES = $db->query("SELECT * FROM db_prueba.tb_desarrolladores ");



?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
  <link rel="shortcut icon" href="../inicio_digitadores/favicon.ico">
  <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap-theme.min.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/jquery.bootstrapvalidator/0.5.0/css/bootstrapValidator.min.css">
  <link rel="stylesheet" href="../css/dis_general.css">
  <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css">
  <link href="../css/bootstrap.min.css" rel="stylesheet" type="text/css" />

  <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <script href="https://ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.js"></script>
    <title>Proyectos</title>
</head>
<body>
<nav>
  <div style="background-color: #000000 " >
    <p class="navbar-text pull-right">
      <a href="../login/lou.php"> Logout</a>
    </p>

    <p class="navbar-text pull-right">
      <a href="#" class="navbar-link"><?php
        if (isset($_COOKIE['username'])){
          echo ' Conectado como '. $_COOKIE['username'];

        }
        else{
          echo 'Conectate -->';
        }

        ?></a>

    </p>

  </div>
</nav>
<div class="container" id="fondo">


  <form class="well form-horizontal" action="../insertar/InsertarProyecto.php" method="post"  id="contact_form">
    <fieldset>

      <!-- Form Name -->
      <legend>Proyectos</legend>

      <!-- Text input-->

      <div class="form-group">
        <label class="col-md-4 control-label">ID Proyecto</label>
        <div class="col-md-4 inputGroupContainer">
          <div class="input-group">
            <span class="input-group-addon"><i class="glyphicon glyphicon-minus"></i></span>
            <input  name="id" placeholder="1" class="form-control"  type="text"readonly="readonly">
          </div>
        </div>
      </div>

      <!-- Text input-->

      <div class="form-group">
        <label class="col-md-4 control-label" >Nombre de Proyecto</label>
        <div class="col-md-4 inputGroupContainer">
          <div class="input-group">
            <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
            <input name="proyecto" placeholder="Proyecto" class="form-control"  type="text"  required pattern="[A-Za-z0-9]+">
          </div>
        </div>
      </div>

      <!-- Text input-->
      <div class="form-group">
        <label class="col-md-4 control-label">Longitud del Proyecto</label>
        <div class="col-md-4 inputGroupContainer">
          <div class="input-group">
            <span class="input-group-addon"><i class="glyphicon glyphicon-road"></i></span>
            <input name="longitud" placeholder="Longitud" class="form-control"  type="text"  required >
          </div>
        </div>
      </div>


      <!-- Text input-->

      <div class="form-group">
        <label class="col-md-4 control-label">Latitud del Proyecto</label>
        <div class="col-md-4 inputGroupContainer">
          <div class="input-group">
            <span class="input-group-addon"><i class="glyphicon glyphicon-road"></i></span>
            <input name="latitud" placeholder="Latitud" class="form-control" type="text"required >
          </div>
        </div>
      </div>

      <!-- Text input-->

      <div class="form-group">
        <label class="col-md-4 control-label">Monto Aproximado del Proyecto</label>
        <div class="col-md-4 inputGroupContainer">
          <div class="input-group">
            <span class="input-group-addon"><i class="glyphicon glyphicon-usd"></i></span>
            <input name="monto" placeholder="Monto" class="form-control" type="text" required >
          </div>
        </div>
      </div>

      <!-- Text input-->

      <div class="form-group">
        <label class="col-md-4 control-label">Fecha de Inicio</label>
        <div class="col-md-4 inputGroupContainer">
          <div class="input-group">
            <span class="input-group-addon"><i class="glyphicon glyphicon-calendar"></i></span>
            <input name="date" placeholder="Fecha" class="form-control"  type="date"  required>
          </div>
        </div>
      </div>

      <!-- Select Basic -->
        <div class="form-group">
            <label class="col-md-4 control-label">Departamento </label>
            <div class="col-md-4 inputGroupContainer">
                <div class="input-group">
                    <span class="input-group-addon"><i class="glyphicon glyphicon-usd"></i></span>
                    <input value="<?php echo $depar['DESCRIPCION_DEPARTAMENTO'] ?>" placeholder="Monto" class="form-control" type="text" readonly="readonly" >
                </div>
            </div>
        </div>





      <!-- Text input-->

      <div class="form-group">
        <label class="col-md-4 control-label">Municipio</label>
        <div class="col-md-4 selectContainer">
          <div class="input-group">
            <span class="input-group-addon"><i class="glyphicon glyphicon-list"></i></span>
            <select name="mpio" class="form-control selectpicker" id="mpio">
                <option value="">Seleccione</option>
                <?php
                foreach ( $mpio as $posicion) { ?>
                    <option value="<?php echo $posicion['ID_MUNICIPIO']?> " ><?php echo $posicion['DESCRIPCION_MUNICIPIO'] ?></option>
                <?php }
                ?>



            </select>
          </div>
        </div>
      </div>

      <!-- Text input-->
      <div class="form-group">
        <label class="col-md-4 control-label">Desarrollador</label>
        <div class="col-md-4 selectContainer">
          <div class="input-group">
            <span class="input-group-addon"><i class="glyphicon glyphicon-list"></i></span>
            <select name="desarrollador" class="form-control selectpicker" >
              <option value=" " >Please select your Desarrollador XD jaja</option>
                <?php
                foreach ( $DES as $posicion) { ?>
                    <option value="<?php echo $posicion['ID_DESARROLLADOR']?> " ><?php echo $posicion['NOMBRE_DESARROLLADOR'] ?></option>
                <?php }
                ?>


            </select>
          </div>
        </div>
      </div>

      <!-- Success message -->
      <div class="alert alert-success" role="alert" id="success_message"> <i class="glyphicon glyphicon-thumbs-up"></i> Gracias por vender tu alma al Diablo</div>

      <!-- Button -->
      <div class="form-group">
        <label class="col-md-4 control-label"></label>
        <div class="col-md-3">
          <button type="submit" class="btn btn-warning" id="enviar" >Send <span class="glyphicon glyphicon-send"></span></button>
        </div>
        <div class="col-md-3">
          <a class="btn btn-warning"  href="../inicio_digitadores/Digitadores.php">Regresar <span class="glyphicon glyphicon-arrow-left"></span></a>
        </div>
      </div>

    </fieldset>
  </form>
</div>
</div><!-- /.container -->
</body>
</html>
<?php
session_destroy();
?>