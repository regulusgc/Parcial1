<?php

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
  <link rel="shortcut icon" href="favicon.ico">
  <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap-theme.min.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/jquery.bootstrapvalidator/0.5.0/css/bootstrapValidator.min.css">
  <link rel="stylesheet" href="dis_pro.css">
  <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css">
  <link href="../css/bootstrap.min.css" rel="stylesheet" type="text/css" />
  <!script src="validacion.js">/script>>
  <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">

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


  <form class="well form-horizontal" action=" " method="post"  id="contact_form">
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
            <input name="first_name" placeholder="Proyecto" class="form-control"  type="text" id="nombre"
                   required pattern="[A-Za-z0-9]+">
          </div>
        </div>
      </div>

      <!-- Text input-->
      <div class="form-group">
        <label class="col-md-4 control-label">Longitud del Proyecto</label>
        <div class="col-md-4 inputGroupContainer">
          <div class="input-group">
            <span class="input-group-addon"><i class="glyphicon glyphicon-road"></i></span>
            <input name="cantidad" placeholder="Longitud" class="form-control"  type="text" id="longitud"
                   required pattern="[A-Za-z0-9]+">
          </div>
        </div>
      </div>


      <!-- Text input-->

      <div class="form-group">
        <label class="col-md-4 control-label">Latitud del Proyecto</label>
        <div class="col-md-4 inputGroupContainer">
          <div class="input-group">
            <span class="input-group-addon"><i class="glyphicon glyphicon-road"></i></span>
            <input name="cantidad" placeholder="Latitud" class="form-control" type="text" id="lat"
                   required pattern="[A-Za-z0-9]+">
          </div>
        </div>
      </div>

      <!-- Text input-->

      <div class="form-group">
        <label class="col-md-4 control-label">Monto Aproximado del Proyecto</label>
        <div class="col-md-4 inputGroupContainer">
          <div class="input-group">
            <span class="input-group-addon"><i class="glyphicon glyphicon-usd"></i></span>
            <input name="cantidad" placeholder="Monto" class="form-control" type="text" id="dinero"
                   required pattern="[A-Za-z0-9]+">
          </div>
        </div>
      </div>

      <!-- Text input-->

      <div class="form-group">
        <label class="col-md-4 control-label">Fecha de Inicio</label>
        <div class="col-md-4 inputGroupContainer">
          <div class="input-group">
            <span class="input-group-addon"><i class="glyphicon glyphicon-calendar"></i></span>
            <input name="date" placeholder="Fecha" class="form-control"  type="date" id="fecha" required>
          </div>
        </div>
      </div>

      <!-- Select Basic -->

      <div class="form-group">
        <label class="col-md-4 control-label">Departamento</label>
        <div class="col-md-4 selectContainer">
          <div class="input-group">
            <span class="input-group-addon"><i class="glyphicon glyphicon-list"></i></span>
            <select name="state" class="form-control selectpicker" required="required" >
              <option value=" " >Please select your departament XD jaja</option>
              <option>Jutiapa</option>
              <option>Guatemala</option>
              <option >Alta Verapaz</option>
              <option >Baja Verapaz</option>
              <option >Chimaltenango</option>
              <option >Chiquimula</option>
              <option >El Progreso</option>
              <option >Escuintla</option>
              <option >Huehuetenango</option>
              <option> Izabal</option>
              <option >Jalapa</option>
              <option >Peten</option>
              <option >Quetzaltenango</option>
              <option >Quiche</option>
              <option >Retalhuleu</option>
              <option >Sacatepequez</option>
              <option> San Marcos</option>
              <option >Santa Rosa</option>
              <option >Solola</option>
              <option>Suchitepequez</option>
              <option >Totonicapan</option>
              <option> Zacapa</option>

            </select>
          </div>
        </div>
      </div>

      <!-- Text input-->

      <div class="form-group">
        <label class="col-md-4 control-label">Municipio</label>
        <div class="col-md-4 selectContainer">
          <div class="input-group">
            <span class="input-group-addon"><i class="glyphicon glyphicon-list"></i></span>
            <select name="state" class="form-control selectpicker" >
              <option value=" " >Please select your Municipio XD jaja</option>
              <option>Agua Blanca</option>
              <option>Asuncion Mita</option>
              <option >Atescatempa</option>
              <option >Comapa</option>
              <option >Conguaco</option>
              <option >El adelanto</option>
              <option >El Progreso</option>
              <option >Jalpatagua</option>
              <option >Jutiapa</option>
              <option> Moyuta</option>
              <option >Pasaco</option>
              <option >Quezada</option>
              <option >San Jose Acatempa</option>
              <option >Santa Catarina Mita</option>
              <option >Yupiltepeque</option>
              <option >Zapotitlan</option>


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
            <select name="state" class="form-control selectpicker" >
              <option value=" " >Please select your Desarrollador XD jaja</option>
              <option>Yo quien mas</option>
              <option>Regulus M</option>
              <option >Rene Gonzalez</option>


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
          <a class="btn btn-warning"  href="../inicio/index.php">Regresar <span class="glyphicon glyphicon-arrow-left"></span></a>
        </div>
      </div>

    </fieldset>
  </form>
</div>
</div><!-- /.container -->
</body>
</html>
