<?php
require("../conexion/Db.class.php");

$db = new DB();
$tingreso = $db->query("SELECT * FROM db_prueba.tb_tipo_ingreso ");


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
  <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css">
  <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">


  <title>Requisitos</title>
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

  <form class="well form-horizontal" action=" ../forms/RequisitosP2.php" method="post"  id="contact_form">
    <fieldset>

      <!-- Form Name -->
      <legend>Requisitos!</legend>

      <!-- Text input-->

      <div class="form-group">
        <label class="col-md-4 control-label">ID Requisito</label>
        <div class="col-md-4 inputGroupContainer">
          <div class="input-group">
            <span class="input-group-addon"><i class="glyphicon glyphicon-minus"></i></span>
            <input  name="first_name" placeholder="1" class="form-control"  type="text"readonly="readonly">
          </div>
        </div>
      </div>

      <!-- Text input-->



      <!-- Select Basic -->

      <div class="form-group">
        <label class="col-md-4 control-label">Tipo de Ingreso</label>
        <div class="col-md-4 selectContainer">
          <div class="input-group">
            <span class="input-group-addon"><i class="glyphicon glyphicon-list"></i></span>
            <select name="tipoing" class="form-control selectpicker" >
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

      <!-- Text input-->


      <!-- Text area -->



      <!-- Success message -->
      <div class="alert alert-success" role="alert" id="success_message"> <i class="glyphicon glyphicon-thumbs-up"></i> Tus necesidades no son problema mio</div>

      <!-- Button -->
      <div class="form-group">
        <label class="col-md-4 control-label"></label>
        <div class="col-md-3">
          <button type="submit" class="btn btn-warning" >Send <span class="glyphicon glyphicon-send"></span></button>
        </div>
        <div class="col-md-3">
          <a class="btn btn-warning"  href="../inicio_ventanilla/ventanilla.php">Regresar <span class="glyphicon glyphicon-arrow-left"></span></a>
        </div>
      </div>


    </fieldset>
  </form>
</div>
</div><!-- /.container -->
</body>
</html>
