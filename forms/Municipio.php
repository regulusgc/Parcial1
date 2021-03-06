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
$db = new DB();
$depto = $db->query("SELECT * FROM db_prueba.tb_cat_departamento ORDER BY ID_DEPARTAMENTO ASC");

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Municipio</title>

    <link rel="stylesheet" href="../css/bootstrap.min.css">
    <script src="../js/jquery-3.3.1.min.js"></script>
    <script src="../js/bootstrap.min.js"></script>

</head>
<body>

<div class="container">
    <div class="form-control bg-white">
        <form method="post" action="../insertar/InsertarMunicipio.php" class="container text-center" >
            <div class="form-control-lg">
                <br>
                <h3>Municipio</h3>
                <div class="form-control-lg">
                    <label for="select_depto">Elija un Departamento para poder agregar un municipio</label>
                    <br>
                    <select name="depa" class="text-lg-center" id="select_depto" required>
                        <option selected>Elija un departamento</option>
                                       <?php
                        foreach ( $depto as $posicion) { ?>
                            <option value="<?php echo $posicion['ID_DEPARTAMENTO']?> " ><?php echo $posicion['DESCRIPCION_DEPARTAMENTO'] ?></option>
                        <?php }
                        ?>
                    </select>
                </div>
                <div class="form-control-lg">
                    <input type="text" name="municipio" id="municipio" placeholder="Ingrese Municipio" required>
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