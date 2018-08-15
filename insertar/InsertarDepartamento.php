<?php
/**
 * Created by PhpStorm.
 * User: yo
 * Date: 15/08/2018
 * Time: 3:14 AM
 */
require ("../conexion/Db.class.php");

$def = "default";
$depa = $_POST['departamento'];

$db = new DB();

$insert   =  $db->query("INSERT INTO tb_cat_departamento(ID_DEPARTAMENTO, DESCRIPCION_DEPARTAMENTO) VALUES(:f,:depi)",
    array("f"=>"$def","depi"=>"$depa"));

if ($insert){
    header('Location:../forms/Departamento.php');
    echo "<script> alert('Insertaste');
    window.location='../forms/Departamento.php'
    <script>";
}