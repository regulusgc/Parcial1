<?php
/**
 * Created by PhpStorm.
 * User: yo
 * Date: 15/08/2018
 * Time: 11:51 PM
 */
require ("../conexion/Db.class.php");

$def = "default";
$tip_ingreso = $_POST['DESCRIPCION_INGRESO'];

$db = new DB();

$insert   =  $db->query("INSERT INTO tb_tipo_ingreso(ID_TIPO_INGRESO, DESCRIPCION_INGRESO) VALUES(:f,:ti)",
    array("f"=>"$def","ti"=>"$tip_ingreso"));

if ($insert){
    header('Location:../forms/tipo_ingreso.php');
    echo "<script> alert('Insertaste');
    window.location='../forms/tipo_ingreso.php'
    <script>";
}