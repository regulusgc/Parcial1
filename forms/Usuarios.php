<?php
require ("../conexion/Db.class.php");

$db = new DB();

$rol = $db ->query("SELECT * FROM db_prueba.tb_roles");
$unidad = $db ->query("SELECT * FROM db_prueba.tb_unidad_trabajo");



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
  <title>Usuarios</title>
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

  <form class="well form-horizontal" action=" ../insertar/InsertarUsuarios.php" method="post"  id="contact_form">
    <fieldset>

      <!-- Form Name -->
      <legend>Usuarios</legend>



      <!-- Text input-->

      <div class="form-group">
        <label class="col-md-4 control-label" >Username</label>
        <div class="col-md-4 inputGroupContainer">
          <div class="input-group">
            <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
            <input name="usuario" placeholder="username" class="form-control"  type="text" required>
          </div>
        </div>
      </div>

      <div class="form-group">
        <label class="col-md-4 control-label">Rol</label>
        <div class="col-md-4 selectContainer">
          <div class="input-group">
            <span class="input-group-addon"><i class="glyphicon glyphicon-list"></i></span>
            <select name="Rol" class="form-control selectpicker" >
                <option >Please select your Rolin </option>
                <?php foreach ( $rol as $rolines) { ?>
                    <option value="<?php echo $rolines['ID_ROL']?> " ><?php echo $rolines['DESCRIPCION_ROL'] ?></option>
                <?php }?>


            </select>
          </div>
        </div>
      </div>

      <div class="form-group">
        <label class="col-md-4 control-label">Unidad</label>
        <div class="col-md-4 selectContainer">
          <div class="input-group">
            <span class="input-group-addon"><i class="glyphicon glyphicon-list"></i></span>
            <select name="Unidad" class="form-control selectpicker" >
                <option >Please select your Unidad </option>
                <?php foreach ( $unidad as $uni) { ?>
                    <option value="<?php echo $uni['ID_UNIDAD_TRABAJO']?> " ><?php echo $uni['DESCRIPCION_UNIDAD'] ?></option>
                <?php }?>


            </select>
          </div>
        </div>
      </div>

      <!-- Text input-->
      <div class="form-group">
        <label class="col-md-4 control-label">Nombre del usuario</label>
        <div class="col-md-4 inputGroupContainer">
          <div class="input-group">
            <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
            <input  name="Nombre" placeholder=" Nombre" class="form-control"  type="text" required>
          </div>
        </div>
      </div>


      <!-- Text input-->
      <div class="form-group">
        <label class="col-md-4 control-label">Estatus</label>
        <div class="col-md-4">
          <div class="radio">
            <label>
              <input type="radio" name="hosting" value="A" /> Activo
            </label>
          </div>
          <div class="radio">
            <label>
              <input type="radio" name="hosting" value="I" /> Inactivo
            </label>
          </div>
        </div>
      </div>


      <!-- Text input-->
      <div class="form-group">
        <label class="col-md-4 control-label" >Contraseña</label>
        <div class="col-md-4 inputGroupContainer">
          <div class="input-group">
            <span class="input-group-addon"><i class="glyphicon glyphicon-eye-open"></i></span>
            <input name="password" placeholder="Contraseña" class="form-control"  type="password" required>
          </div>
        </div>
      </div>


      <!-- Text input-->
        <div class="form-group">
            <label class="col-md-4 control-label" >Apellido</label>
            <div class="col-md-4 inputGroupContainer">
                <div class="input-group">
                    <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
                    <input name="Apellido" placeholder="Apellido" class="form-control"  type="text" required>
                </div>
            </div>
        </div>

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
          <a class="btn btn-warning"  href="../inicio_catalogos/index_catalogos.php">Regresar <span class="glyphicon glyphicon-arrow-left"></span></a>
        </div>
      </div>

    </fieldset>
  </form>
</div>
</div><!-- /.container -->
</body>
</html>
