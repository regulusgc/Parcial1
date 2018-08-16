<?php
/**
 * Created by PhpStorm.
 * User: yo
 * Date: 16/08/2018
 * Time: 10:28 AM
 */
require ("../conexion/Db.class.php");

$def = "default";
$descRol = $_POST['descRol'];

$db = new DB();

$insert   =  $db->query("INSERT INTO tb_roles(ID_ROL, DESCRIPCION_ROL) VALUES(:f,:descr)",
    array("f"=>"$def","descr"=>"$descRol"));

if ($insert){
    header('Location:../forms/Roles.php');
    echo "<script> alert('Insertaste');
    window.location='../forms/Roles.php'
    <script>";
}