<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <link rel="shortcut icon" href="favicon.ico">
  <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap-theme.min.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/jquery.bootstrapvalidator/0.5.0/css/bootstrapValidator.min.css">
  <link rel="stylesheet" href="../usuarios/dis_usuarios.css">
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

  <form class="well form-horizontal" action=" " method="post"  id="contact_form">
    <fieldset>

      <!-- Form Name -->
      <legend>Usuarios</legend>

      <!-- Text input-->

      <div class="form-group">
        <label class="col-md-4 control-label">ID Usuario</label>
        <div class="col-md-4 inputGroupContainer">
          <div class="input-group">
            <span class="input-group-addon"><i class="glyphicon glyphicon-minus"></i></span>
            <input  name="first_name" placeholder="1" class="form-control"  type="text"readonly="readonly">
          </div>
        </div>
      </div>

      <!-- Text input-->

      <div class="form-group">
        <label class="col-md-4 control-label" >Login</label>
        <div class="col-md-4 inputGroupContainer">
          <div class="input-group">
            <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
            <input name="last_name" placeholder="1" class="form-control"  type="text" required>
          </div>
        </div>
      </div>

      <div class="form-group">
        <label class="col-md-4 control-label">Rol</label>
        <div class="col-md-4 selectContainer">
          <div class="input-group">
            <span class="input-group-addon"><i class="glyphicon glyphicon-list"></i></span>
            <select name="state" class="form-control selectpicker" >
              <option value=" " >Please select your rol XD jaja</option>
              <option>pues saber</option>
              <option>Falta la base de datos</option>
              <option >HOLIIIIIS</option>


            </select>
          </div>
        </div>
      </div>

      <div class="form-group">
        <label class="col-md-4 control-label">Unidad</label>
        <div class="col-md-4 selectContainer">
          <div class="input-group">
            <span class="input-group-addon"><i class="glyphicon glyphicon-list"></i></span>
            <select name="state" class="form-control selectpicker" >
              <option value=" " >Please select your unidad XD jaja</option>
              <option>Reconocimiento</option>
              <option>Policia militar</option>
              <option >HOLIIIIIS</option>


            </select>
          </div>
        </div>
      </div>

      <!-- Text input-->
      <div class="form-group">
        <label class="col-md-4 control-label">Nombre de usuario</label>
        <div class="col-md-4 inputGroupContainer">
          <div class="input-group">
            <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
            <input  name="first_name" placeholder=" Nombre" class="form-control"  type="text" required>
          </div>
        </div>
      </div>


      <!-- Text input-->
      <div class="form-group">
        <label class="col-md-4 control-label">EStatus</label>
        <div class="col-md-4">
          <div class="radio">
            <label>
              <input type="radio" name="hosting" value="Aceptado" /> Disponible
            </label>
          </div>
          <div class="radio">
            <label>
              <input type="radio" name="hosting" value="recha" /> Desconectado
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
            <input name="password" placeholder="Contraseña" class="form-control"  type="text" required>
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
          <a class="btn btn-warning"  href="../inicio/index.php">Regresar <span class="glyphicon glyphicon-arrow-left"></span></a>
        </div>
      </div>

    </fieldset>
  </form>
</div>
</div><!-- /.container -->
</body>
</html>
