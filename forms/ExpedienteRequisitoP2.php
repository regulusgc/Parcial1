<?php
require("../conexion/Db.class.php");

$db = new DB();






session_start();
$_SESSION['usuario'] = $_POST['usuario'];

$proyecto = $_POST['proyecto'];




$estamiel = $db->row("SELECT NUMERO_EXPEDIENTE, ANIO_EXPEDIENTE ,ID_EXPEDIENTE FROM db_prueba.tb_expediente
 WHERE ID_PROYECTO =:adf",array("adf"=>$proyecto));

$lege =$_POST['requisito'];

$nuevo = $db->row("SELECT * FROM db_prueba.tb_requisitos where ID_REQUISITO=:f",array("f"=>"$lege"));

$numero = $estamiel['NUMERO_EXPEDIENTE'];
$anio = $estamiel['ANIO_EXPEDIENTE'];
$expe = $estamiel['ID_EXPEDIENTE'];

print_r($numero);
print_r($anio);
print_r($expe);




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
  <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">

  <title>Requisitos de Expedientes</title>
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

  <form class="well form-horizontal" action="../insertar/InsertarExpedienteRequisito.php " method="post"  id="contact_form">
    <fieldset>

      <!-- Form Name -->
      <legend>Requisitos de Expedientes PARTE 2!</legend>

      <!-- Text input-->

        <div class="form-group">
            <label class="col-md-4 control-label">ID  Expediente</label>
            <div class="col-md-4 inputGroupContainer">
                <div class="input-group">
                    <span class="input-group-addon"><i class="glyphicon glyphicon-earphone"></i></span>
                    <input name="idexpe" value="<?php echo $estamiel['ID_EXPEDIENTE'];?>" placeholder="" class="form-control" type="text"readonly="readonly">
                </div>
            </div>
        </div>

        <div class="form-group">
            <label class="col-md-4 control-label">Numero de Expediente</label>
            <div class="col-md-4 inputGroupContainer">
                <div class="input-group">
                    <span class="input-group-addon"><i class="glyphicon glyphicon-earphone"></i></span>
                    <input name="numexp" value="<?php echo $estamiel['NUMERO_EXPEDIENTE'];?>" placeholder="" class="form-control" type="text"readonly="readonly">
                </div>
            </div>
        </div>

        <div class="form-group">
            <label class="col-md-4 control-label">Año del Expediente</label>
            <div class="col-md-4 inputGroupContainer">
                <div class="input-group">
                    <span class="input-group-addon"><i class="glyphicon glyphicon-calendar"></i></span>
                    <input name="yearexp" value="<?php echo $anio ?>" placeholder="" class="form-control" type="text"readonly="readonly">
                </div>
            </div>
        </div>

      <!-- Text input-->

      <div class="form-group">
        <label class="col-md-4 control-label" >ID Requisito</label>
        <div class="col-md-4 inputGroupContainer">
          <div class="input-group">
            <span class="input-group-addon"><i class="glyphicon glyphicon-eye-open"></i></span>
            <input name="rquisito" placeholder="Contraseña" class="form-control"  type="text" value="<?php echo  $nuevo['ID_REQUISITO']?>"readonly="readonly">
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


      <!-- radio checks -->
      <div class="form-group">
        <label class="col-md-4 control-label">Estado</label>
        <div class="col-md-4">
          <div class="radio">
            <label>
              <input type="radio" name="hosting" value="A" /> Aceptado
            </label>
          </div>
          <div class="radio">
            <label>
              <input type="radio" name="hosting" value="R" /> Rechazado
            </label>
          </div>
        </div>
      </div>

      <!-- Text area -->

      <div class="form-group">
        <label class="col-md-4 control-label">Motivo Del Rechazo</label>
        <div class="col-md-4 inputGroupContainer">
          <div class="input-group">
            <span class="input-group-addon"><i class="glyphicon glyphicon-pencil"></i></span>
            <textarea class="form-control" name="motivo" placeholder="Motivo"></textarea>
          </div>
        </div>
      </div>

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
