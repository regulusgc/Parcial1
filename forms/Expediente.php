<?php

require("../conexion/Db.class.php");

$db = new DB();

$username = $_COOKIE['username'];
$id = $db->row("SELECT ID_USUARIO FROM tb_usuarios WHERE USERNAME = :f ", array("f"=>$username));

$tingreso = $db->query("SELECT * FROM db_prueba.tb_tipo_ingreso ");

$desSub = $db->query("SELECT * FROM db_prueba.tb_cat_destino_subsidio ");

$project = $db->query("SELECT * FROM db_prueba.tb_cat_proyectos ");


?>


<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <link rel="shortcut icon" href="../inicio/favicon.ico">
  <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap-theme.min.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/jquery.bootstrapvalidator/0.5.0/css/bootstrapValidator.min.css">
  <link rel="stylesheet" href="../css/dis_general.css">
  <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">

  <title>Expedientes</title>
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

  <form class="well form-horizontal" action="../insertar/InsertarExpediente.php" method="post"  id="contact_form">
    <fieldset>

      <!-- Form Name -->
      <legend>Expedientes</legend>

      <!-- Text input-->



      <!-- Text input-->

      <div class="form-group">
        <label class="col-md-4 control-label" >Usuario</label>
        <div class="col-md-4 inputGroupContainer">
          <div class="input-group">
            <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
            <input name="user" placeholder="login" class="form-control"  type="text" value="<?php echo $username?>" >
          </div>
        </div>
      </div>

      <div class="form-group">
        <label class="col-md-4 control-label">Tipo de Ingreso</label>
        <div class="col-md-4 selectContainer">
          <div class="input-group">
            <span class="input-group-addon"><i class="glyphicon glyphicon-list"></i></span>
            <select name="tingreso" class="form-control selectpicker" >
                <option value="">Seleccione</option>
                <?php
                foreach ( $tingreso as $posicion) { ?>
                    <option value="<?php echo $posicion['ID_TIPO_INGRESO']?> " ><?php echo $posicion['DESCRIPCION_INGRESO'] ?></option>
                <?php }
                ?>


            </select>
          </div>
        </div>
      </div>

      <div class="form-group">
        <label class="col-md-4 control-label">Tipo de solicitud de subsidio</label>
        <div class="col-md-4 selectContainer">
          <div class="input-group">
            <span class="input-group-addon"><i class="glyphicon glyphicon-list"></i></span>
            <select name="dsubsidio" class="form-control selectpicker" >
                <option value="">Seleccione</option>
                <?php
                foreach ( $desSub as $posicion) { ?>
                    <option value="<?php echo $posicion['ID_TIPO_SOILCITUD_SUBSIDIO']?> " ><?php echo $posicion['DESCRIPCION'] ?></option>
                <?php }
                ?>


            </select>
          </div>
        </div>
      </div>
        <div class="form-group">
            <label class="col-md-4 control-label">Numero de Expediente</label>
            <div class="col-md-4 inputGroupContainer">
                <div class="input-group">
                    <span class="input-group-addon"><i class="glyphicon glyphicon-earphone"></i></span>
                    <input name="numeroe" placeholder="" class="form-control" type="text">
                </div>
            </div>
        </div>

        <div class="form-group">
            <label class="col-md-4 control-label">Año del Expediente</label>
            <div class="col-md-4 inputGroupContainer">
                <div class="input-group">
                    <span class="input-group-addon"><i class="glyphicon glyphicon-calendar"></i></span>
                    <input name="yearexp" placeholder="" class="form-control" type="text">
                </div>
            </div>
        </div>



      <div class="form-group">
        <label class="col-md-4 control-label">Proyecto</label>
        <div class="col-md-4 selectContainer">
          <div class="input-group">
            <span class="input-group-addon"><i class="glyphicon glyphicon-list"></i></span>
            <select name="proyecto" class="form-control selectpicker" >
                <option value="">Seleccione</option>
                <?php
                foreach ( $project as $posicion) { ?>
                    <option value="<?php echo $posicion['ID_PROYECTO']?> " ><?php echo $posicion['NOMBRE_PROYECTO'] ?></option>
                <?php }
                ?>


            </select>
          </div>
        </div>
      </div>

      <div class="form-group">
        <label class="col-md-4 control-label">Fecha de regisstro</label>
        <div class="col-md-4 inputGroupContainer">
          <div class="input-group">
            <span class="input-group-addon"><i class="glyphicon glyphicon-calendar"></i></span>
            <input name="fecha" placeholder="Fecha" class="form-control"  type="date" required>
          </div>
        </div>
      </div>


      <!-- Text input-->
      <div class="form-group">
        <label class="col-md-4 control-label">Monto Aproximado del Proyecto</label>
        <div class="col-md-4 inputGroupContainer">
          <div class="input-group">
            <span class="input-group-addon"><i class="glyphicon glyphicon-usd"></i></span>
            <input name="monto" placeholder="Monto" class="form-control" type="text" required>
          </div>
        </div>
      </div>

      <!-- Text input-->
      <div class="form-group">
        <label class="col-md-4 control-label">Longitud del Proyecto</label>
        <div class="col-md-4 inputGroupContainer">
          <div class="input-group">
            <span class="input-group-addon"><i class="glyphicon glyphicon-road"></i></span>
            <input name="longitud" placeholder="Longitud" class="form-control"  type="text" required>
          </div>
        </div>
      </div>


      <!-- Text input-->

      <div class="form-group">
        <label class="col-md-4 control-label">Latitud del Proyecto</label>
        <div class="col-md-4 inputGroupContainer">
          <div class="input-group">
            <span class="input-group-addon"><i class="glyphicon glyphicon-road"></i></span>
            <input name="latitud" placeholder="Latitud" class="form-control" type="text" required>
          </div>
        </div>
      </div>


      <!-- Text input-->

      <div class="form-group">
        <label class="col-md-4 control-label">OBservaciones</label>
        <div class="col-md-4 inputGroupContainer">
          <div class="input-group">
            <span class="input-group-addon"><i class="glyphicon glyphicon-pencil"></i></span>
            <textarea class="form-control" name="obs" placeholder="OBservaciones"></textarea>
          </div>
        </div>
      </div>

      <!-- Text input-->






      <!-- Select Basic -->



      <!-- Success message -->
      <div class="alert alert-success" role="alert" id="success_message"> <i class="glyphicon glyphicon-thumbs-up"></i> Gracias ahora ya se quien sos</div>

      <!-- Button -->
      <div class="form-group">
        <label class="col-md-4 control-label"></label>
        <div class="col-md-3">
          <button type="submit" class="btn btn-warning" >Send <span class="glyphicon glyphicon-send"></span></button>
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
