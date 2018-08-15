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
        <form class="container text-center" >
            <div class="form-control-lg">
                <br>
                <h3>Municipio</h3>
                <div class="form-control-lg">
                    <label for="select_depto">Elija un Departamento para poder agregar un municipio</label>
                    <br>
                    <select class="text-lg-center" id="select_depto">
                        <option selected>Elija un departamento</option>
                        <option value="1">Uno</option>
                        <option value="2">Dos</option>
                        <option value="3">Tres</option>
                    </select>
                </div>
                <div class="form-control-lg">
                    <input type="text" id="municipio" placeholder="Ingrese Municipio" >
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