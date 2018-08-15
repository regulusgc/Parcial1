
<?php
/*   session_start();


   if (isset($_SESSION['autorizado']) == true) {

   } else {
       require("../libreria/notaNoAutorizado.php");
   exit;
   }*/
require("../conexion/Db.class.php");

if (mysqli_connect_errno())
{
    echo "Failed to connect to MySQL: " . mysqli_connect_error();
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Departamento</title>

    <link rel="stylesheet" href="../css/bootstrap.min.css">
    <script src="../js/jquery-3.3.1.min.js"></script>
    <script src="../js/bootstrap.min.js"></script>

</head>
<body>

<div class="container">
    <div class="form-control bg-white">
        <form class="container text-center" method="post" action="../insertar/InsertarDepartamento.php" >
            <div class="form-control-lg">
                <h3>Departamento</h3>
                <div class="form-control-lg">
                    <input type="text" name="departamento" placeholder="Ingrese Departamento" required>
                </div>
            </div>
            <button class="btn btn-dark" type="submit">Enviar Formulario</button>
            <div class="form-control-lg">
                <a class="btn btn-danger" href="../inicio_catalogos/index_catalogos.php"> Ir a Inicio</a>
            </div>
        </form>
    </div>
</div>

</body>
</html>