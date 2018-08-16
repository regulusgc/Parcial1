<?php
/**
 * Created by PhpStorm.
 * User: yo
 * Date: 16/08/2018
 * Time: 10:39 AM
 */
require ("../conexion/Db.class.php");

$def = "default";
$sexonombre = $_POST['SEXO_NOMBRE'];

$db = new DB();

$insert   =  $db->query("INSERT INTO tb_sexo(ID_SEXO, SEXO_NOMBRE) VALUES(:f,:sexNo)",
    array("f"=>"$def","sexNo"=>"$sexonombre"));

if ($insert){
    header('Location:../forms/sexo.php');
    echo "<script> alert('Insertaste');
    window.location='../forms/sexo.php'
    <script>";
}