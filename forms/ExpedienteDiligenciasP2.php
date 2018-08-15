<?php
require("../conexion/Db.class.php");
$db = new DB();
session_start();
$_SESSION['proyecto'] = $_POST['proyecto'];
$_SESSION['dili'] = $_POST['dili'];
$_SESSION['user'] = $_POST['user'];

$proyecto = $_SESSION['proyecto'];
$estamiel = $db->row("SELECT NUMERO_EXPEDIENTE, ANIO_EXPEDIENTE FROM db_prueba.tb_expediente
 WHERE ID_PROYECTO =:adf",array("adf"=>$proyecto));





?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <link rel="shortcut icon" href="../inicio_digitadores/favicon.ico">
  <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap-theme.min.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/jquery.bootstrapvalidator/0.5.0/css/bootstrapValidator.min.css">

  <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css">
<link rel="stylesheet" href="../css/dis_general.css">
  <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
  <title>Expediente de Diligencias</title>
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
<div class="container">

  <form class="well form-horizontal" action="../insertar/InsertarExpDiligencia.php " method="post"  id="contact_form">
    <fieldset>

      <!-- Form Name -->
      <legend>Expediente de Diligencias!</legend>

      <!-- Text input-->

      <div class="form-group">
        <label class="col-md-4 control-label">Numero de Expediente</label>
        <div class="col-md-4 inputGroupContainer">
          <div class="input-group">
            <span class="input-group-addon"><i class="glyphicon glyphicon-earphone"></i></span>
            <input name="numexp" value="<?php echo $estamiel['NUMERO_EXPEDIENTE'];?>" placeholder="00555" class="form-control" type="text"readonly="readonly">
          </div>
        </div>
      </div>

      <div class="form-group">
        <label class="col-md-4 control-label">Año del Expediente</label>
        <div class="col-md-4 inputGroupContainer">
          <div class="input-group">
            <span class="input-group-addon"><i class="glyphicon glyphicon-calendar"></i></span>
            <input name="yearexp" value="<?php $estamiel['ANIO_EXPEDIENTE']?>" placeholder="2018" class="form-control" type="text"readonly="readonly">
          </div>
        </div>
      </div>

        <div class="form-group">
            <label class="col-md-4 control-label">Fecha de Diligencia</label>
            <div class="col-md-4 inputGroupContainer">
                <div class="input-group">
                    <span class="input-group-addon"><i class="glyphicon glyphicon-calendar"></i></span>
                    <input name="date" placeholder="Fecha" class="form-control"  type="date"  >
                </div>
            </div>
        </div>

      <!-- Text input-->
      <div class="form-group">
        <label class="col-md-4 control-label">Resultado de la Diligencia</label>
        <div class="col-md-4 inputGroupContainer">
          <div class="input-group">
            <span class="input-group-addon"><i class="glyphicon glyphicon-minus"></i></span>
            <input  name="Resultado" placeholder="ID Requisito" class="form-control"  type="text" required>
          </div>
        </div>
      </div>


      <!-- radio checks -->
      <div class="form-group">
        <label class="col-md-4 control-label">Diligencia Finalizada</label>
        <div class="col-md-4">
          <div class="radio">
            <label>
              <input type="radio" name="hosting" value="S" /> Si
            </label>
          </div>
          <div class="radio">
            <label>
              <input type="radio" name="hosting" value="N" /> No
            </label>
          </div>
        </div>
      </div>

      <!-- Text area -->



      <!-- Success message -->
      <div class="alert alert-success" role="alert" id="success_message"><i class="glyphicon glyphicon-thumbs-up"></i> Gracias <3</div>

      <!-- Button -->
      <div class="form-group">
        <label class="col-md-4 control-label"></label>
        <div class="col-md-3">
          <button type="submit" class="btn btn-warning" >Send <span class="glyphicon glyphicon-send"></span></button>
        </div>
        <div class="col-md-3">
          <a class="btn btn-warning"   href="../inicio_digitadores/Digitadores.php">Regresar <span class="glyphicon glyphicon-arrow-left"></span></a>
        </div>
      </div>

    </fieldset>
  </form>
</div>
</div><!-- /.container -->
</body>
</html>
