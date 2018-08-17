<?php
/**
 * Created by PhpStorm.
 * User: Regulus
 * Date: 17/08/2018
 * Time: 3:45 PM
 */
require ("../conexion/Db.class.php");

$db = new DB();
$proyecto = $_POST['proyecto'];
$id = $db->row("SELECT ID_EXPEDIENTE FROM tb_expediente WHERE ID_PROYECTO = :f ", array("f"=>$proyecto));
$esteId = $id['ID_EXPEDIENTE'];
print_r($esteId);

$_MosrarExpe = $db->query("SELECT 
		E.ID_EXPEDIENTE, 
        TI.DESCRIPCION_INGRESO, 
        TSUB.DESCRIPCION, 
        PRO.ID_PROYECTO,
        PRO.NOMBRE_PROYECTO,
        E.FECHA_REGISTRO, 
        E.OBSERVACIONES_EXPEDIENTE, 
        E.MONTO_SOLICITADO, 
        E.LONGITUD_PROYECTO, 
        E.LATITUD_PROYECTO, 
        E.NUMERO_EXPEDIENTE,
        E.ANIO_EXPEDIENTE, 
        USI.USERNAME
 FROM db_prueba.tb_expediente AS E
 
 INNER JOIN
 db_prueba.tb_tipo_ingreso AS TI ON E.ID_TIPO_INGRESO = TI.ID_TIPO_INGRESO
 INNER JOIN
 tb_cat_destino_subsidio AS TSUB ON E.ID_TIPO_SOILCITUD_SUBSIDIO = TSUB.ID_TIPO_SOILCITUD_SUBSIDIO
 INNER JOIN
 tb_cat_proyectos AS PRO ON E.ID_PROYECTO =PRO.ID_PROYECTO
 INNER JOIN
 tb_usuarios AS USI ON E.ID_USUARIO = USI.ID_USUARIO
WHERE E.ID_EXPEDIENTE = :f", array("f"=>"$esteId"));

$_MostrarExpedienteRequisito = $db->query(" 
SELECT 
		EXREQUI.ID_EXPEDIENTE_REQUISITO, 
        EXREQUI.ID_REQUISITO, 
        EXREQUI.ID_EXPEDIENTE,
        PROY.NOMBRE_PROYECTO,
        EXREQUI.NUMERO_EXPEDIENTE,
        EXREQUI.ANIO_EXPEDIENTE,
        REQUI.ID_TIPO_INGRESO,
        TI.DESCRIPCION_INGRESO,
        REQUI.CARENCIA_BIENES,
        REQUI.SALARIO_MINIMO,
		REQUI.STDSOCIOECONOMICO, 
        REQUI.BOLETO_ORNATO,
        REQUI.NOMBRE_REQPROYEC,
        IFNULL(REQUI.PROVEEDOR_ESTADO,\"N/I\") AS PROVEEDOR_ESTADO, 
        IFNULL(REQUI.SOLVENCIA_CONTRALORIA,\"N/I\") AS SOLVENCIA_CONTRALORIA,
        IFNULL(REQUI.AUTO_COCODE,\"N/I\") AS AUTO_COCODE,
		IFNULL(REQUI.NOMBRE_EMPRESA,\"N/I\")AS NOMBRE_EMPRESA,
        IFNULL(REQUI.LIDER_GRUPO, \"N/I\")AS LIDER_GRUPO, 
        REQUI.OBLIGATORIO,
        REQUI.OBSERVACIONES,
         
        EXREQUI.ID_USUARIO, 
        USI.USERNAME,
        EXREQUI.FECHA_PRESENTACION, 
        EXREQUI.ACEPTADO, 
        EXREQUI.MOTIVO_RECHAZO
        
 FROM db_prueba.tb_expediente_requsitos as EXREQUI
 
 INNER JOIN 
tb_expediente AS EXPI ON EXREQUI.ID_EXPEDIENTE = EXPI.ID_EXPEDIENTE

INNER JOIN
tb_requisitos AS REQUI ON REQUI.ID_REQUISITO = EXREQUI.ID_REQUISITO
 
 INNER JOIN
tb_usuarios AS USI ON USI.ID_USUARIO = EXREQUI.ID_USUARIO
INNER JOIN
tb_cat_proyectos AS PROY ON PROY.ID_PROYECTO = EXPI.ID_PROYECTO
INNER JOIN
 db_prueba.tb_tipo_ingreso AS TI ON REQUI.ID_TIPO_INGRESO = TI.ID_TIPO_INGRESO

WHERE EXREQUI.ID_EXPEDIENTE = :f ", array("f"=>"$esteId"));


$lasDilis = $db ->query("

SELECT 
 EXPD.ID_DILIGENCIA_EXPEDIENTE,
 EXPD.ID_EXPEDIENTE,
 PROY.NOMBRE_PROYECTO,
 EXPD.NUMERO_EXPEDIENTE, 
 EXPD.ANIO_EXPEDIENTE, 
 EXPD.ID_DILIGENCIA,
 CD.DESCRIPCION_DILIGENCIA,
 EXPD.ID_USUARIO,
 UTRA.DESCRIPCION_UNIDAD,
 USI.USERNAME,
 FECHA_DILIGENCIA, 
 RESULTADO_DILIGENCIA, 
 DILIGENCIA_FINALIZADA

FROM db_prueba.tb_expediente_diligencia AS EXPD

INNER JOIN 
tb_expediente AS EXPI ON EXPD.ID_EXPEDIENTE = EXPI.ID_EXPEDIENTE

INNER JOIN
tb_cat_diligencias AS CD ON CD.ID_DILIGENCIA = EXPD.ID_DILIGENCIA

INNER JOIN
tb_usuarios AS USI ON USI.ID_USUARIO = EXPD.ID_USUARIO
INNER JOIN
tb_cat_proyectos AS PROY ON PROY.ID_PROYECTO = EXPI.ID_PROYECTO

INNER JOIN
tb_unidad_trabajo AS UTRA ON UTRA.ID_UNIDAD_TRABAJO = CD.ID_UNIDAD_TRABAJO

WHERE EXPD.ID_EXPEDIENTE = :f" ,array("f"=>"$esteId"));







?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css">

    <link href="//maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css" rel="stylesheet">
    <title>Aprobar</title>
</head>
<body>
<div class="lnr-text-align-center"  >
    <h1> APROBAR</h1>
</div>
<BR>
<br>
<br>

<div class="container-fluid" id="cosas">

    <div class="row text-center">
        <div class="col-sm-4">
            <h3>
                <span class="glyphicon glyphicon-tower"></span> Expediente </h3>
            <?php
            foreach ($_MosrarExpe as $cosas)
            {

                ?>
            <br>
            <br>
            <label>ID EXPEDIENTE </label>
                <br>
          <strong> <?php echo $cosas['ID_EXPEDIENTE'] ?> </strong>
                <br>
            <br>
            <label>TIPO DE INGRESO </label>
                <br>
                <strong> <?php echo $cosas['DESCRIPCION_INGRESO'] ?> </strong>

            <br>
            <br>
            <label>TIPO DE SUBSIDIO </label>
                <br>
                <strong><?php echo $cosas['DESCRIPCION'] ?> </strong>

            <br>
            <br>
            <label>ID PROYECTO </label>
                <br>
                <strong> <?php echo $cosas['ID_PROYECTO'] ?> </strong>

            <br>
            <br>
            <label>NOMBRE DEL PROYECTO </label>
                <br>
                <strong><?php echo $cosas['NOMBRE_PROYECTO'] ?> </strong>

            <br>
            <br>
            <label>FECHA DE REGISTRO </label>
                <br>
                <strong><?php echo $cosas['FECHA_REGISTRO'] ?> </strong>

            <br>
            <br>
            <label>OBSERVACIONES </label>
                <br>
                <strong><?php echo $cosas['OBSERVACIONES_EXPEDIENTE'] ?> </strong>

            <br>
            <br>
            <label>MONTO SOLICITADO </label>
                <br>
                <strong><?php echo $cosas['MONTO_SOLICITADO'] ?> </strong>

            <br>
            <br>
            <label>LONGITUD DEL PROYECTO </label>
                <br>
                <strong><?php echo $cosas['LONGITUD_PROYECTO'] ?> </strong>

            <br>
            <br>
            <label>LATITUD DEL PROYECTO </label>
                <br>
                <strong><?php echo $cosas['LATITUD_PROYECTO'] ?> </strong>

            <br>
            <br>
            <label>NUMERO DEL EXPEDIENTE </label>
                <br>
                <strong><?php echo $cosas['NUMERO_EXPEDIENTE'] ?> </strong>

            <br>
            <br>
            <label>AÑO DEL EXPEDIENTE </label>
                <br>
                <strong><?php echo $cosas['ANIO_EXPEDIENTE'] ?> </strong>

            <br>
            <br>
            <label>USUARIO QUE INGRESO ESTE EXPEDIENTE </label>
                <br>
                <strong><?php echo $cosas['USERNAME'] ?> </strong>
            <br>
                <br>
                <br>
                <label>-------------------------------------------</label>
                <br>
                <br>
            <?php } ?>

        </div>

        <div class="col-sm-4">
            <h3>
                <span class="glyphicon glyphicon-tower"></span> Expediente Requisitos </h3>

            <?php
            foreach ($_MostrarExpedienteRequisito as $cosas)
            {

                ?>
                <br>
                <br>
                <label>ID EXPEDIENTE DE REQUISIO </label>
                <br>
                <strong> <?php echo $cosas['ID_EXPEDIENTE_REQUISITO'] ?> </strong>
                <br>
                <br>
                <label>ID DEL REQUISITO </label>
                <br>
                <strong> <?php echo $cosas['ID_REQUISITO'] ?> </strong>

                <br>
                <br>
                <label>ID DEL EXPEDIENTE </label>
                <br>
                <strong><?php echo $cosas['ID_EXPEDIENTE'] ?> </strong>

                <br>
                <br>
                <label>NOMBRE DEL PROYECTO </label>
                <br>
                <strong> <?php echo $cosas['NOMBRE_PROYECTO'] ?> </strong>

                <br>
                <br>
                <label>NUMERO DE EXPEDIENTE </label>
                <br>
                <strong><?php echo $cosas['NUMERO_EXPEDIENTE'] ?> </strong>

                <br>
                <br>
                <label>AÑO DEL EXPEDIENTE </label>
                <br>
                <strong><?php echo $cosas['ANIO_EXPEDIENTE'] ?> </strong>

                <br>
                <br>
                <label>ID DEL TIPO DE INGRESO </label>
                <br>
                <strong><?php echo $cosas['ID_TIPO_INGRESO'] ?> </strong>

                <br>
                <br>
                <label>TIPO DE SOLICITUD </label>
                <br>
                <strong><?php echo $cosas['DESCRIPCION_INGRESO'] ?> </strong>

            <?php
            if ($cosas['ID_TIPO_INGRESO']==1)
            {
                ?>

                <br>
                <br>
                <label>PRESENTO CARENCIA DE BIENES</label>
                <br>
                <strong><?php echo $cosas['CARENCIA_BIENES'] ?> </strong>

                <br>
                <br>
                <label>PRESENTO SALARIO MINIMO </label>
                <br>
                <strong><?php echo $cosas['SALARIO_MINIMO'] ?> </strong>

                <br>
                <br>
                <label>PRESENTO ESTUDIO SOCIOECONOMICO </label>
                <br>
                <strong><?php echo $cosas['STDSOCIOECONOMICO'] ?> </strong>

                <br>
                <br>
                <label>PRESENTO BOLETO DE ORNATO</label>
                <br>
                <strong><?php echo $cosas['BOLETO_ORNATO'] ?> </strong>

                <br>
                <br>
                <label>NOMBRE DEL PROYECTO </label>
                <br>
                <strong><?php echo $cosas['NOMBRE_REQPROYEC'] ?> </strong>
                <br>
                <br>
                <?php }
                elseif ($cosas['ID_TIPO_INGRESO']==2)
                {
                    ?>
                    <br>
                    <br>
                    <label>PRESENTO CARENCIA DE BIENES</label>
                    <br>
                    <strong><?php echo $cosas['CARENCIA_BIENES'] ?> </strong>

                    <br>
                    <br>
                    <label>PRESENTO SALARIO MINIMO </label>
                    <br>
                    <strong><?php echo $cosas['SALARIO_MINIMO'] ?> </strong>

                    <br>
                    <br>
                    <label>PRESENTO ESTUDIO SOCIOECONOMICO </label>
                    <br>
                    <strong><?php echo $cosas['STDSOCIOECONOMICO'] ?> </strong>

                    <br>
                    <br>
                    <label>PRESENTO BOLETO DE ORNATO</label>
                    <br>
                    <strong><?php echo $cosas['BOLETO_ORNATO'] ?> </strong>

                    <br>
                    <br>
                    <label>NOMBRE DEL PROYECTO </label>
                    <br>
                    <strong><?php echo $cosas['NOMBRE_REQPROYEC'] ?> </strong>
                    <br>
                    <br>

                    <br>
                    <br>
                    <label>HAY AUTORIZACION DEL COCODE </label>
                    <br>
                    <strong><?php echo $cosas['AUTO_COCODE'] ?> </strong>

                    <br>
                    <br>

                    <br>
                    <br>
                    <label>NOMBRE DEL LIDER DEL GRUPO </label>
                    <br>
                    <strong><?php echo $cosas['LIDER_GRUPO'] ?> </strong>

                    <br>
                    <br>
                    <?php }
                    else
                    {
                    ?>
                        <br>
                        <br>
                        <label>PRESENTO CARENCIA DE BIENES </label>
                        <br>
                        <strong><?php echo $cosas['CARENCIA_BIENES'] ?> </strong>

                        <br>
                        <br>
                        <label>PRESENTO SALARIO MINIMO </label>
                        <br>
                        <strong><?php echo $cosas['SALARIO_MINIMO'] ?> </strong>

                        <br>
                        <br>
                        <label>PRESENTO ESTUDIO SOCIOECONOMICO </label>
                        <br>
                        <strong><?php echo $cosas['STDSOCIOECONOMICO'] ?> </strong>

                        <br>
                        <br>
                        <label>PRESENTO BOLETO DE ORNATO </label>
                        <br>
                        <strong><?php echo $cosas['BOLETO_ORNATO'] ?> </strong>

                        <br>
                        <br>
                        <label>NOMBRE DEL PROYECTO </label>
                        <br>
                        <strong><?php echo $cosas['NOMBRE_REQPROYEC'] ?> </strong>
                        <br>
                        <br>
                        <br>
                        <br>
                        <label>PROVEEDOR DEL ESTADO </label>
                        <br>
                        <strong><?php echo $cosas['PROVEEDOR_ESTADO'] ?> </strong>

                        <br>
                        <br>

                        <br>
                        <br>
                        <label>SOLVENCIA EN CONTRALORIA </label>
                        <br>
                        <strong><?php echo $cosas['SOLVENCIA_CONTRALORIA'] ?> </strong>

                        <br>
                        <br>
                        <label>NOMBRE DE LA EMPRESA </label>
                        <br>
                        <strong><?php echo $cosas['NOMBRE_EMPRESA'] ?> </strong>

                        <br>
                        <br>
                    <?php } ?>

                <br>
                <br>
                <label>ES OBLIGATORIO </label>
                <br>
                <strong><?php echo $cosas['OBLIGATORIO'] . "ES" ?> </strong>

                <br>
                <br>

                <br>
                <br>
                <label>ID DEL USUARIO </label>
                <br>
                <strong><?php echo $cosas['ID_USUARIO'] ?> </strong>

                <br>
                <br>

                <br>
                <br>
                <label>NOMBRE DEL USUARIO QUE REALIZO EL EXPEDIENTE </label>
                <br>
                <strong><?php echo $cosas['USERNAME'] ?> </strong>

                <br>
                <br>

                <br>
                <br>
                <label>FECHA DE PRESENTACION </label>
                <br>
                <strong><?php echo $cosas['FECHA_PRESENTACION']  ?> </strong>

                <br>
                <br>

                <br>
                <br>
                <label>(A = ACEPTADO / R = RECHAZADO) </label>
                <br>
                <strong><?php echo $cosas['ACEPTADO'] ?> </strong>

                <br>
                <br>

                <br>
                <br>
                <label>MOTIVO DEL RECHAZO </label>
                <br>
                <strong><?php echo $cosas['MOTIVO_RECHAZO']  ?> </strong>

                <br>
                <br>








                <br>
                <label>-------------------------------------------</label>
                <br>
                <br>
            <?php } ?>

        </div>

        <div class="col-sm-4">
            <h3>
                <span class="glyphicon glyphicon-tower"></span> Expediente Diligencias </h3>
            <?php
            foreach ($lasDilis as $cosas)
            {

                ?>
                <br>
                <br>
                <label>ID EXPEDIENTE DE LAS DILIGENCIAS</label>
                <br>
                <strong> <?php echo $cosas['ID_DILIGENCIA_EXPEDIENTE'] ?> </strong>
                <br>
                <br>
                <label>ID DEL EXPEDIENTE </label>
                <br>
                <strong> <?php echo $cosas['ID_EXPEDIENTE'] ?> </strong>

                <br>
                <br>
                <label>NOMBRE DEL PROYECTO</label>
                <br>
                <strong><?php echo $cosas['NOMBRE_PROYECTO'] ?> </strong>

                <br>
                <br>
                <label>NUMERO DEL EXPEDIENTE </label>
                <br>
                <strong> <?php echo $cosas['NUMERO_EXPEDIENTE'] ?> </strong>

                <br>
                <br>
                <label>AÑO DEL EXPEDIENTE </label>
                <br>
                <strong><?php echo $cosas['ANIO_EXPEDIENTE'] ?> </strong>

                <br>
                <br>
                <label>ID DE LA DILIGENCIA </label>
                <br>
                <strong><?php echo $cosas['ID_DILIGENCIA'] ?> </strong>

                <br>
                <br>
                <label>TIPO DE LA DILIGENCIA </label>
                <br>
                <strong><?php echo $cosas['DESCRIPCION_DILIGENCIA'] ?> </strong>

                <br>
                <br>
                <label>ID DEL USUARIO </label>
                <br>
                <strong><?php echo $cosas['ID_USUARIO'] ?> </strong>

                <br>
                <br>
                <label>UNIDAD DE TRABAJO QUE EVALUO LA DILIGENCIA </label>
                <br>
                <strong><?php echo $cosas['DESCRIPCION_UNIDAD'] ?> </strong>

                <br>
                <br>

                <label>USUARIO QUE LLENO ESTE EXPEDIENTE </label>
                <br>
                <strong><?php echo $cosas['USERNAME'] ?> </strong>

                <br>
                <br>
                <label>FECHA DE LA DILIGENCIA </label>
                <br>
                <strong><?php echo $cosas['FECHA_DILIGENCIA'] ?> </strong>

                <br>
                <br>
                <label>RESULTADO DE LA DILIGENCIA </label>
                <br>
                <strong><?php echo $cosas['RESULTADO_DILIGENCIA'] ?> </strong>

                <br>
                <br>
                <label>DILIGENCIA FINALIZADA (S = SI/ N=NO) </label>
                <br>
                <strong><?php echo $cosas['DILIGENCIA_FINALIZADA'] ?> </strong>

                <br>



                <br>
                <label>-------------------------------------------</label>
                <br>
                <br>
            <?php } ?>











        </div>



    </div>
</div>
</body>
</html>



