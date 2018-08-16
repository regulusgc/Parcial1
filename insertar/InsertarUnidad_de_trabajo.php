<?php
/**
 * Created by PhpStorm.
 * User: yo
 * Date: 15/08/2018
 * Time: 11:36 PM
 */
require ("../conexion/Db.class.php");

$def = "default";
$uni_trab = $_POST['DESCRIPCION_UNIDAD'];

$db = new DB();

$insert   =  $db->query("INSERT INTO tb_unidad_trabajo(ID_UNIDAD_TRABAJO, DESCRIPCION_UNIDAD) VALUES(:f,:ut)",
    array("f"=>"$def","ut"=>"$uni_trab"));

if ($insert){
    header('Location:../forms/unidad_de_trabajo.php');
    echo "<script> alert('Insertaste');
    window.location='../forms/unidad_de_trabajo.php'
    <script>";
}