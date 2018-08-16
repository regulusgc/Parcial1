<?php
require("../conexion/Db.class.php");

$db = new DB();
session_start();
$_proyecto = $_POST['proyecto'];


$estamiel = $db->row("SELECT ID_EXPEDIENTE FROM db_prueba.tb_expediente WHERE ID_PROYECTO =:adf",array("adf"=>$_proyecto));



$expe = $estamiel['ID_EXPEDIENTE'];

$experequi = $db->row("SELECT ID_EXPEDIENTE_REQUISITO
FROM db_prueba.tb_expediente_requsitos WHERE ID_EXPEDIENTE =:exp",array("exp"=>"$expe") );



$requisitoexpe = $experequi['ID_EXPEDIENTE_REQUISITO'];

$_SESSION['relacionf'] = $_POST['relacionf'];
$_SESSION['sexo'] = $_POST['sexo'];

$Rel = $_SESSION['relacionf'];
$sex = $_SESSION['sexo'];

$yoteame = $db->row("SELECT RFAMILIAR_NOMBRE FROM db_prueba.tb_cat_relacion_familiar WHERE ID_RELACION_FAMILIAR =:exp",array("exp"=>"$Rel"));
$sexi = $db->row("SELECT SEXO_NOMBRE FROM db_prueba.tb_sexo WHERE ID_SEXO =:exp",array("exp"=>"$sex"));

$camino = $yoteame['RFAMILIAR_NOMBRE'];
$sex = $sexi['SEXO_NOMBRE'];


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

  <form class="well form-horizontal" action=" ../insertar/InsertarPersonaIn.php" method="post"  id="contact_form">
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
            <label class="col-md-4 control-label">ID Expediente Requsito</label>
            <div class="col-md-4 inputGroupContainer">
                <div class="input-group">
                    <span class="input-group-addon"><i class="glyphicon glyphicon-minus"></i></span>
                    <input  value="<?php echo $requisitoexpe ?>" name="exprequi" placeholder="1" class="form-control"  type="text"readonly="readonly">
                </div>
            </div>
        </div>



        <div class="form-group">
            <label class="col-md-4 control-label"> Relacion Familiar</label>
            <div class="col-md-4 inputGroupContainer">
                <div class="input-group">
                    <span class="input-group-addon"><i class="glyphicon glyphicon-minus"></i></span>
                    <input  value="<?php echo $camino ?>" name="refmi" placeholder="1" class="form-control"  type="text"readonly="readonly">
                </div>
            </div>
        </div>
      <!-- Text input-->

        <div class="form-group">
            <label class="col-md-4 control-label">Sexo </label>
            <div class="col-md-4 inputGroupContainer">
                <div class="input-group">
                    <span class="input-group-addon"><i class="glyphicon glyphicon-minus"></i></span>
                    <input  value="<?php echo $sex ?>" name="sexoo" placeholder="1" class="form-control"  type="text"readonly="readonly">
                </div>
            </div>
        </div>



      <div class="form-group">
        <label class="col-md-4 control-label">Primer Nombre</label>
        <div class="col-md-4 inputGroupContainer">
          <div class="input-group">
            <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
            <input  name="Nombre" placeholder="Primer Nombre" class="form-control"  type="text" required>
          </div>
        </div>
      </div>

      <div class="form-group">
        <label class="col-md-4 control-label">Segundo Nombre</label>
        <div class="col-md-4 inputGroupContainer">
          <div class="input-group">
            <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
            <input  name="segundo" placeholder="Segundo Nombre" class="form-control"  type="text">
          </div>
        </div>
      </div>

      <!-- Text input-->

      <div class="form-group">
        <label class="col-md-4 control-label" >Primer Apellido</label>
        <div class="col-md-4 inputGroupContainer">
          <div class="input-group">
            <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
            <input name="apellido" placeholder="Primer Apellido" class="form-control"  type="text"required>
          </div>
        </div>
      </div>

      <div class="form-group">
        <label class="col-md-4 control-label" >Segundo Apellido</label>
        <div class="col-md-4 inputGroupContainer">
          <div class="input-group">
            <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
            <input name="segundoape" placeholder="Segundo Apellido" class="form-control"  type="text" >
          </div>
        </div>
      </div>

      <div class="form-group">
        <label class="col-md-4 control-label" >Apellido de Casada</label>
        <div class="col-md-4 inputGroupContainer">
          <div class="input-group">
            <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
            <input name="maje" placeholder="Apellido de Casada" class="form-control"  type="text" >
          </div>
        </div>
      </div>

      <!-- Text input-->

      <!-- Text input-->

      <div class="form-group">
        <label class="col-md-4 control-label">Telefono #</label>
        <div class="col-md-4 inputGroupContainer">
          <div class="input-group">
            <span class="input-group-addon"><i class="glyphicon glyphicon-earphone"></i></span>
            <input name="phone" placeholder="(845)555-1212" class="form-control" type="text" required>
          </div>
        </div>
      </div>

      <!-- Text input-->

      <div class="form-group">
        <label class="col-md-4 control-label">Direccion</label>
        <div class="col-md-4 inputGroupContainer">
          <div class="input-group">
            <span class="input-group-addon"><i class="glyphicon glyphicon-home"></i></span>
            <input name="address" placeholder="Direccion" class="form-control" type="text" required>
          </div>
        </div>
      </div>

      <!-- Text input-->

      <div class="form-group">
        <label class="col-md-4 control-label">Numero de Identificacion</label>
        <div class="col-md-4 inputGroupContainer">
          <div class="input-group">
            <span class="input-group-addon"><i class="glyphicon glyphicon-home"></i></span>
            <input name="dpi" placeholder="Numero" class="form-control"  type="text" required>
          </div>
        </div>
      </div>

      <!-- Select Basic -->

      <div class="form-group">
        <label class="col-md-4 control-label">Fecha de Nacimiento</label>
        <div class="col-md-4 inputGroupContainer">
          <div class="input-group">
            <span class="input-group-addon"><i class="glyphicon glyphicon-calendar"></i></span>
            <input name="birthday" placeholder="Fecha" class="form-control"  type="date" required>
          </div>
        </div>
      </div>

      <!-- Text input-->



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
          <a class="btn btn-warning"   href="../forms/Personain.php">Regresar <span class="glyphicon glyphicon-arrow-left"></span></a>
        </div>
      </div>

    </fieldset>
  </form>
</div>
</div><!-- /.container -->
</body>
</html>
