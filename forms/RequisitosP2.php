<?php
require("../conexion/Db.class.php");

$db = new DB();
session_start();
$_SESSION['tipoing'] = $_POST['tipoing'];

$el_Tipo = $_SESSION['tipoing'];

print_r($el_Tipo . "tu hermana");


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


  <title>Requisitos PARTE2</title>
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

  <form class="well form-horizontal" action="../insertar/InsertarRequisito.php " method="post"  id="contact_form">
    <fieldset>

      <!-- Form Name -->


      <!-- Text input-->
        <?php if ($el_Tipo==1) {
            ?>
            <legend>Requisitos parte 2 prrro!</legend>
            <legend>Solicitud Individual!</legend>

            <div class="form-group">
                <label class="col-md-4 control-label">Nombre proyecto que pertenecen estos requistos</label>
                <div class="col-md-4 inputGroupContainer">
                    <div class="input-group">
                        <span class="input-group-addon"><i class="glyphicon glyphicon-minus"></i></span>
                        <input name="nombrerequi" placeholder="bienes" class="form-control" type="text">
                    </div>
                </div>
            </div>

            <div class="form-group">
                <label class="col-md-4 control-label">Carencia de Bienes</label>
                <div class="col-md-4 inputGroupContainer">
                    <div class="input-group">
                        <span class="input-group-addon"><i class="glyphicon glyphicon-minus"></i></span>
                        <input name="bienes" placeholder="bienes" class="form-control" type="text">
                    </div>
                </div>
            </div>

            <div class="form-group">
                <label class="col-md-4 control-label">Salario Minimo</label>
                <div class="col-md-4 inputGroupContainer">
                    <div class="input-group">
                        <span class="input-group-addon"><i class="glyphicon glyphicon-minus"></i></span>
                        <input name="salario" placeholder="salario" class="form-control" type="text">
                    </div>
                </div>
            </div>

            <div class="form-group">
                <label class="col-md-4 control-label">Estudio Socioeconomico</label>
                <div class="col-md-4 inputGroupContainer">
                    <div class="input-group">
                        <span class="input-group-addon"><i class="glyphicon glyphicon-minus"></i></span>
                        <input name="estudio" placeholder="Estudio" class="form-control" type="text">
                    </div>
                </div>
            </div>

            <div class="form-group">
                <label class="col-md-4 control-label">Boleto de Ornato</label>
                <div class="col-md-4 inputGroupContainer">
                    <div class="input-group">
                        <span class="input-group-addon"><i class="glyphicon glyphicon-minus"></i></span>
                        <input name="boleto" placeholder="Estudio" class="form-control" type="text">
                    </div>
                </div>
            </div>

            <div class="form-group">
                <label class="col-md-4 control-label">Observaciones</label>
                <div class="col-md-4 inputGroupContainer">
                    <div class="input-group">
                        <span class="input-group-addon"><i class="glyphicon glyphicon-pencil"></i></span>
                        <textarea class="form-control" name="obs" placeholder="Observaciones"></textarea>
                    </div>
                </div>
            </div>

            <!-- radio checks -->
            <div class="form-group">
                <label class="col-md-4 control-label">Obligatorio</label>
                <div class="col-md-4">
                    <div class="radio">
                        <label>
                            <input type="radio" name="hosting" value="Y" /> Yes
                        </label>
                    </div>
                    <div class="radio">
                        <label>
                            <input type="radio" name="hosting" value="N" /> No
                        </label>
                    </div>
                </div>
            </div>
            <?php
        }
        elseif ($el_Tipo==2) {
            ?>
            <legend>Requisitos parte 2 prrro!</legend>
            <legend>Solicitud Grupal!</legend>

            <div class="form-group">
                <label class="col-md-4 control-label">Nombre proyecto que pertenecen estos requistos</label>
                <div class="col-md-4 inputGroupContainer">
                    <div class="input-group">
                        <span class="input-group-addon"><i class="glyphicon glyphicon-minus"></i></span>
                        <input name="nombrerequi" placeholder="bienes" class="form-control" type="text">
                    </div>
                </div>
            </div>

            <div class="form-group">
                <label class="col-md-4 control-label">Carencia de Bienes</label>
                <div class="col-md-4 inputGroupContainer">
                    <div class="input-group">
                        <span class="input-group-addon"><i class="glyphicon glyphicon-minus"></i></span>
                        <input name="bienes" placeholder="bienes" class="form-control" type="text">
                    </div>
                </div>
            </div>

            <div class="form-group">
                <label class="col-md-4 control-label">Salario Minimo</label>
                <div class="col-md-4 inputGroupContainer">
                    <div class="input-group">
                        <span class="input-group-addon"><i class="glyphicon glyphicon-minus"></i></span>
                        <input name="salario" placeholder="salario" class="form-control" type="text">
                    </div>
                </div>
            </div>

            <div class="form-group">
                <label class="col-md-4 control-label">Estudio Socioeconomico</label>
                <div class="col-md-4 inputGroupContainer">
                    <div class="input-group">
                        <span class="input-group-addon"><i class="glyphicon glyphicon-minus"></i></span>
                        <input name="estudio" placeholder="Estudio" class="form-control" type="text">
                    </div>
                </div>
            </div>

            <div class="form-group">
                <label class="col-md-4 control-label">Boleto de Ornato</label>
                <div class="col-md-4 inputGroupContainer">
                    <div class="input-group">
                        <span class="input-group-addon"><i class="glyphicon glyphicon-minus"></i></span>
                        <input name="boleto" placeholder="Estudio" class="form-control" type="text">
                    </div>
                </div>
            </div>


            <div class="form-group">
                <label class="col-md-4 control-label">Aautorizacion del COCODE</label>
                <div class="col-md-4 inputGroupContainer">
                    <div class="input-group">
                        <span class="input-group-addon"><i class="glyphicon glyphicon-minus"></i></span>
                        <input name="cocode" placeholder="cocode" class="form-control" type="text">
                    </div>
                </div>
            </div>

            <div class="form-group">
                <label class="col-md-4 control-label">Lider del Grupo</label>
                <div class="col-md-4 inputGroupContainer">
                    <div class="input-group">
                        <span class="input-group-addon"><i class="glyphicon glyphicon-minus"></i></span>
                        <input name="lider" placeholder="Lideeer" class="form-control" type="text">
                    </div>
                </div>
            </div>

            <div class="form-group">
                <label class="col-md-4 control-label">Observaciones</label>
                <div class="col-md-4 inputGroupContainer">
                    <div class="input-group">
                        <span class="input-group-addon"><i class="glyphicon glyphicon-pencil"></i></span>
                        <textarea class="form-control" name="obs" placeholder="Observaciones"></textarea>
                    </div>
                </div>
            </div>

            <!-- radio checks -->
            <div class="form-group">
                <label class="col-md-4 control-label">Obligatorio</label>
                <div class="col-md-4">
                    <div class="radio">
                        <label>
                            <input type="radio" name="hosting" value="Y" /> Yes
                        </label>
                    </div>
                    <div class="radio">
                        <label>
                            <input type="radio" name="hosting" value="N" /> No
                        </label>
                    </div>
                </div>
            </div>
            <?php
        }
        elseif ($el_Tipo==3) {
            ?>
            <legend>Requisitos parte 2 prrro!</legend>
            <legend>Solicitud POR DESARROLLADORA!</legend>

            <div class="form-group">
                <label class="col-md-4 control-label">Nombre proyecto que pertenecen estos requistos</label>
                <div class="col-md-4 inputGroupContainer">
                    <div class="input-group">
                        <span class="input-group-addon"><i class="glyphicon glyphicon-minus"></i></span>
                        <input name="nombrerequi" placeholder="bienes" class="form-control" type="text">
                    </div>
                </div>
            </div>

            <div class="form-group">
                <label class="col-md-4 control-label">Carencia de Bienes</label>
                <div class="col-md-4 inputGroupContainer">
                    <div class="input-group">
                        <span class="input-group-addon"><i class="glyphicon glyphicon-minus"></i></span>
                        <input name="bienes" placeholder="bienes" class="form-control" type="text">
                    </div>
                </div>
            </div>

            <div class="form-group">
                <label class="col-md-4 control-label">Salario Minimo</label>
                <div class="col-md-4 inputGroupContainer">
                    <div class="input-group">
                        <span class="input-group-addon"><i class="glyphicon glyphicon-minus"></i></span>
                        <input name="salario" placeholder="salario" class="form-control" type="text">
                    </div>
                </div>
            </div>

            <div class="form-group">
                <label class="col-md-4 control-label">Estudio Socioeconomico</label>
                <div class="col-md-4 inputGroupContainer">
                    <div class="input-group">
                        <span class="input-group-addon"><i class="glyphicon glyphicon-minus"></i></span>
                        <input name="estudio" placeholder="Estudio" class="form-control" type="text">
                    </div>
                </div>
            </div>

            <div class="form-group">
                <label class="col-md-4 control-label">Boleto de Ornato</label>
                <div class="col-md-4 inputGroupContainer">
                    <div class="input-group">
                        <span class="input-group-addon"><i class="glyphicon glyphicon-minus"></i></span>
                        <input name="boleto" placeholder="Boleto" class="form-control" type="text">
                    </div>
                </div>
            </div>


            <div class="form-group">
                <label class="col-md-4 control-label">Proveedor del Estado (inscrito en guatecompras)</label>
                <div class="col-md-4 inputGroupContainer">
                    <div class="input-group">
                        <span class="input-group-addon"><i class="glyphicon glyphicon-minus"></i></span>
                        <input name="proveedor" placeholder="Proveedor" class="form-control" type="text">
                    </div>
                </div>
            </div>

            <div class="form-group">
                <label class="col-md-4 control-label">Solvencia de la Contraloria General de Cuentas</label>
                <div class="col-md-4 inputGroupContainer">
                    <div class="input-group">
                        <span class="input-group-addon"><i class="glyphicon glyphicon-minus"></i></span>
                        <input name="solvencia" placeholder="Solvencia" class="form-control" type="text">
                    </div>
                </div>
            </div>

            <div class="form-group">
                <label class="col-md-4 control-label">Nombre de La empresa</label>
                <div class="col-md-4 inputGroupContainer">
                    <div class="input-group">
                        <span class="input-group-addon"><i class="glyphicon glyphicon-minus"></i></span>
                        <input name="empresa" placeholder="Nombre Empresa" class="form-control" type="text">
                    </div>
                </div>
            </div>

            <div class="form-group">
                <label class="col-md-4 control-label">Observaciones</label>
                <div class="col-md-4 inputGroupContainer">
                    <div class="input-group">
                        <span class="input-group-addon"><i class="glyphicon glyphicon-pencil"></i></span>
                        <textarea class="form-control" name="obs" placeholder="Observaciones"></textarea>
                    </div>
                </div>
            </div>

            <!-- radio checks -->
            <div class="form-group">
                <label class="col-md-4 control-label">Obligatorio</label>
                <div class="col-md-4">
                    <div class="radio">
                        <label>
                            <input type="radio" name="hosting" value="Y"/> Yes
                        </label>
                    </div>
                    <div class="radio">
                        <label>
                            <input type="radio" name="hosting" value="N"/> No
                        </label>
                    </div>
                </div>
            </div>
            <?php
        }
        else
        {
            echo "la Cagaste con sobredosissss";
        }
        ?>



      <!-- Text input-->



      <!-- Select Basic -->



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
          <a class="btn btn-warning"  href="../forms/Requisitos.php">Regresar <span class="glyphicon glyphicon-arrow-left"></span></a>
        </div>
      </div>


    </fieldset>
  </form>
</div>
</div><!-- /.container -->
</body>
</html>
