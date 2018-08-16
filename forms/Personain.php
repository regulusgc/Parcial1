<?php
require("../conexion/Db.class.php");

$db = new DB();
$project = $db->query("SELECT * FROM db_prueba.tb_cat_proyectos ");
$refamiliar = $db->query("SELECT * FROM db_prueba.tb_cat_relacion_familiar");
$sexo = $db->query("SELECT * FROM tb_sexo");


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

<link rel="stylesheet" href="../css/dis_general.css">
  <title>Personas Involucradas</title>
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

  <form class="well form-horizontal" action="../forms/PersonainP2.php " method="post"  id="contact_form">
    <fieldset>

      <!-- Form Name -->
      <legend>Personas Involucradas</legend>

      <div class="form-group">
        <label class="col-md-4 control-label">ID Solicitante</label>
        <div class="col-md-4 inputGroupContainer">
          <div class="input-group">
            <span class="input-group-addon"><i class="glyphicon glyphicon-minus"></i></span>
            <input  name="first_name" placeholder="1" class="form-control"  type="text"readonly="readonly">
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
        <label class="col-md-4 control-label">Relacion Familiar</label>
        <div class="col-md-4 selectContainer">
          <div class="input-group">
            <span class="input-group-addon"><i class="glyphicon glyphicon-list"></i></span>
            <select name="relacionf" class="form-control selectpicker" >
                <option value="">Seleccione</option>
                <?php
                foreach ( $refamiliar as $posicion) { ?>
                    <option value="<?php echo $posicion['ID_RELACION_FAMILIAR']?> " ><?php echo $posicion['RFAMILIAR_NOMBRE'] ?></option>
                <?php }
                ?>


            </select>
          </div>
        </div>
      </div>
      <!-- Text input-->

        <div class="form-group">
            <label class="col-md-4 control-label">Sexo </label>
            <div class="col-md-4 selectContainer">
                <div class="input-group">
                    <span class="input-group-addon"><i class="glyphicon glyphicon-list"></i></span>
                    <select name="sexo" class="form-control selectpicker" >
                        <option value="">Seleccione</option>
                        <?php
                        foreach ( $sexo as $posicion) { ?>
                            <option value="<?php echo $posicion['ID_SEXO']?> " ><?php echo $posicion['SEXO_NOMBRE'] ?></option>
                        <?php }
                        ?>


                    </select>
                </div>
            </div>
        </div>







      <!-- Success message -->
      <div class="alert alert-success" role="alert" id="success_message"> <i class="glyphicon glyphicon-thumbs-up"></i>
        Su solicitud jamas llegara, no se preocupe, no nos llame, nosotros lo llamaremos ;)  (claroooooo)</div>

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
