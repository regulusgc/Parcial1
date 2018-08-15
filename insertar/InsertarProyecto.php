<?php
/**
 * Created by PhpStorm.
 * User: Regulus
 * Date: 15/08/2018
 * Time: 5:25 AM
 */

require ("../conexion/Db.class.php");
$def = "default";

$proyecto = $_POST['proyecto'];
$longitud = $_POST['longitud'];
$latitud = $_POST['latitud'];
$monto = $_POST['monto'];
$date = $_POST['date'];

$mpio = $_POST['mpio'];
$desarrollador = $_POST['desarrollador'];

$db = new DB();

$insert   =  $db->query("INSERT INTO tb_cat_proyectos
(ID_PROYECTO, ID_MUNICIPIO_PROYECTO, ID_DESARROLLADOR, NOMBRE_PROYECTO, LONGITUD_PROYECTO, LATITUD_PROYECTO, MONTO_APROXIMADO_PROYECTO, FECHA_INICIO_TRABAJOS)
VALUES(:id,:mpio,:des,:nproye,:longi,:lati,:monto,:fecha)",
    array("id"=>"$def","mpio"=>"$mpio","des"=>"$desarrollador","nproye"=>"$proyecto","longi"=>"$longitud","lati"=>"$latitud","monto"=>"$monto","fecha"=>"$date"));

if ($insert){
    header("Location:../forms/Proyectos.php");



}