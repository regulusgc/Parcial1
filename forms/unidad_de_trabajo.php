<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Unidad de trabajo</title>
    <link rel="stylesheet" href="../css/bootstrap.min.css">
    <script src="../js/jquery-3.3.1.min.js"></script>
    <script src="../js/bootstrap.min.js"></script>
</head>
<body>
<div class="container">
    <div class="form-control bg-white">
        <form action="../insertar/InsertarUnidad_de_trabajo.php" method="post" class="container text-center">
            <h3>Unidad de trabajo</h3>
            <div class="form-control-lg">
                <input name="DESCRIPCION_UNIDAD" id="DESCRIPCION_UNIDAD" type="text" placeholder="Descripcion" required>
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