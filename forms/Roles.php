<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Roles</title>
    <link rel="stylesheet" href="../css/bootstrap.min.css">
    <script src="../js/jquery-3.3.1.min.js"></script>
    <script src="../js/bootstrap.min.js"></script>
</head>
<body>
<div class="container">
    <div class="form-control bg-white">
        <form action="../insertar/InsertarRoles.php" method="post" class="container text-center">
            <h3>Roles</h3>
            <div class="form-control-lg">
                <input name="descRol" type="text" placeholder="Descripcion" required>
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