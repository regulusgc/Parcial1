<?php
/**
 * Created by PhpStorm.
 * User: Regulus
 * Date: 15/08/2018
 * Time: 2:10 AM
 */

require ("../conexion/Db.class.php");
$def = "default";
$user = $_POST['usuario'];
$rolin = $_POST['Rol'];
$unity = $_POST['Unidad'];
$nombre = $_POST['Nombre'];
$status = $_POST['hosting'];
$contra = $_POST['password'];
$apellido = $_POST['Apellido'];

$db = new DB();

$insert   =  $db->query("INSERT INTO db_prueba.tb_usuarios(ID_USUARIO, USERNAME, ID_ROL, ID_UNIDAD, NOMBRE, ESTATUS, CLAVE, APELLIDO) 
VALUES(:i,:ursa,:r,:unidad,:nom,:est,:pass,:apellido)",
    array("i"=>"$def","ursa"=>"$user","r"=>"$rolin","unidad"=>"$unity","nom"=>"$nombre","est"=>"$status","pass"=>"$contra","apellido"=>"$apellido"));

if ($insert){
    header('Location:../inicio_catalogos/index_catalogos.php');
    echo "<script> alert('Insertaste');
    window.location='../inicio_catalogos/index_catalogos.php'
    <script>";
}



?>