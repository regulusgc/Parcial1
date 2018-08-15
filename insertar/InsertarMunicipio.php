<?php
/**
 * Created by PhpStorm.
 * User: yo
 * Date: 15/08/2018
 * Time: 9:04 AM
 */
require ("../conexion/Db.class.php");

$def = "default";
$mpio = $_POST['municipio'];
$depa = $_POST['depa'];

$db = new DB();

$insert   =  $db->query("INSERT INTO tb_cat_municipios(ID_MUNICIPIO, ID_DEPARTAMENTO, DESCRIPCION_MUNICIPIO) VALUES(:f,:depi,:muni)",
    array("f"=>"$def","depi"=>"$depa","muni"=>"$mpio"));

if ($insert){
    header('Location:../forms/Municipio.php');
    echo "<script> alert('Insertaste');
    window.location='../forms/Municipio.php'
    <script>";
}