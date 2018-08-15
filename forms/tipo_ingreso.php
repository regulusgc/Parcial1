<?php
/*   session_start();


   if (isset($_SESSION['autorizado']) == true) {

   } else {
       require("../libreria/notaNoAutorizado.php");
   exit;
   }*/
require("../conexion/logs/Db.Class.php");

if (mysqli_connect_errno())
{
    echo "Failed to connect to MySQL: " . mysqli_connect_error();
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Tipo Ingreso</title>
    <link rel="stylesheet" href="../css/bootstrap.min.css">
    <script src="../js/jquery-3.3.1.min.js"></script>
    <script src="../js/bootstrap.min.js"></script>
</head>
<body>
<div class="container">
    <div class="form-control bg-white">
        <form class="container text-center">
            <h3>Tipo Ingreso</h3>
            <div class="form-control-lg">
                <input id="DESCRIPCION_INGRESO" type="text" placeholder="Descripcion">
            </div>
            <button type="submit" class="btn btn-dark">Enviar Formulario</button>
            <div class="form-control-lg">
                <a class="btn btn-danger" href="../inicio_catalogos/index_catalogos.php"> Ir a Inicio</a>
            </div>
        </form>
    </div>
</div>
</body>
</html>