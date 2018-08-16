<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Destino Subsidio</title>
    <link rel="stylesheet" href="../css/bootstrap.min.css">
    <script src="../js/jquery-3.3.1.min.js"></script>
    <script src="../js/bootstrap.min.js"></script>
</head>
<body>
<div class="container">
    <div class="form-control bg-white">
        <form method="post" action="../insertar/InsertarDestinoSubsidio.php" class="container text-center">
            <h3>Destino subsidio</h3>
            <div class="form-control-lg">
                <input name="Descrip_destino" type="text" placeholder="Ingrese una descripcion" required>
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