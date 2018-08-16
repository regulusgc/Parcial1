<?php
/**
 * Created by PhpStorm.
 * User: yo
 * Date: 16/08/2018
 * Time: 11:12 AM
 */
require ("../conexion/Db.class.php");

$def = "default";
$nombredesarrollador = $_POST['nombreDesarrollador'];
$email = $_POST['email'];
$telefono = $_POST['telefono'];
$direcEmpresa = $_POST['direcEmpresa'];
$nit = $_POST['nit'];

$db = new DB();

$insert   =  $db->query("INSERT INTO tb_desarrolladores(ID_DESARROLLADOR, TELEFONO, NOMBRE_DESARROLLADOR, NIT, DIRECCION_EMPRESA, CORREO_ELECTRONICO)
 VALUES(:f,:tel,:nombredes, :nit, :dirempresa, :correo)",
    array("f"=>"$def","tel"=>"$telefono","nombredes"=>"$nombredesarrollador","nit"=>"$nit","dirempresa"=>"$direcEmpresa" ,"correo"=>"$email"));

if ($insert){
    header('Location:../forms/Desarrollador.php');
    echo "<script> alert('Insertaste');
    window.location='../forms/Desarrollador.php'
    <script>";
}