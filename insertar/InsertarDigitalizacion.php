<?php
/**
 * Created by PhpStorm.
 * User: yo
 * Date: 16/08/2018
 * Time: 9:40 AM
 */
require ("../conexion/Db.class.php");

$def = "default";
$IdExpReq = $_POST['IdExpReq'];
$login = $_POST['login'];
$nombre_archivo = $_POST['nombre_archivo'];
$fecha = $_POST['fecha'];

$db = new DB();

$insert   =  $db->query("INSERT INTO tb_digitalizacion(ID_DOCUMENTO_DIGITALIZADO,
 ID_EXPEDIENTE_REQUISITO, ID_USUARIO, NOMBRE_ARCHIVO, FECHA_ESCANEO) VALUES(:f,:idexp,:logi, :nomarchivo, :fecha)",
    array("f"=>"$def","indexp"=>"$IdExpReq","logi"=>"$login","nomarchivo"=>"$nombre_archivo","fecha"=>"$fecha"));

if ($insert){
    header('Location:../forms/Digitalizacion.php');
    echo "<script> alert('Insertaste');
    window.location='../forms/Digitalizacion.php'
    <script>";
}