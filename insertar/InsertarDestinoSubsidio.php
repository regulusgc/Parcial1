<?php
/**
 * Created by PhpStorm.
 * User: yo
 * Date: 16/08/2018
 * Time: 9:27 AM
 */
require ("../conexion/Db.class.php");

$def = "default";
$ddestino = $_POST['Descrip_destino'];

$db = new DB();

$insert   =  $db->query("INSERT INTO tb_cat_destino_subsidio(ID_TIPO_SOILCITUD_SUBSIDIO, DESCRIPCION) VALUES(:f,:solsub)",
    array("f"=>"$def","solsub"=>"$ddestino"));

if ($insert){
    header('Location:../forms/destino_subsidio.php');
    echo "<script> alert('Insertaste');
    window.location='../forms/destino_subsidio.php'
    <script>";
}