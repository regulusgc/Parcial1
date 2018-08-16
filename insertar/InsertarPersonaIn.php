<?php
/**
 * Created by PhpStorm.
 * User: Regulus
 * Date: 16/08/2018
 * Time: 1:06 AM
 */

require("../conexion/Db.class.php");

$db = new DB();

session_start();
$def = "default";
$exprequi = $_POST['exprequi'];
$Rel = $_SESSION['relacionf'];
$sex = $_SESSION['sexo'];
$Nombre = $_POST['Nombre'];
$segundo = $_POST['segundo'];
$apellido = $_POST['apellido'];
$segundoape = $_POST['segundoape'];
$maje = $_POST['maje'];
$phone = $_POST['phone'];
$address = $_POST['address'];
$dpi = $_POST['dpi'];
$birthday = $_POST['birthday'];


$insert   =  $db->query("INSERT INTO db_prueba.tb_informacion_personas_involucradas
(ID_INFORMACION_SOLICITANTE, ID_EXPEDIENTE_REQUISITO, ID_RELACION_FAMILIAR, 
ID_SEXO, TELEFONO, NUMERO_DOCUMENTO, NOMBRE1, NOMBRE2, APELLIDO1, APELLIDO2, 
APELLIDOCASADA, FECHA_NACIMIENTO, DIRECCION) VALUES(:insoli,:idexre,:idrel,:sexo,:telefono,:dpi,
:nom1,:nom2,:ape1,:ape2,:maje,:datee,:direc)",
    array("insoli"=>"$def","idexre"=>"$exprequi","idrel"=>"$Rel","sexo"=>"$sex",
        "telefono"=>"$phone","dpi"=>"$dpi","nom1"=>"$Nombre","nom2"=>"$segundo",
        "ape1"=>"$apellido","ape2"=>"$segundoape","maje"=>"$maje","datee"=>"$birthday","direc"=>"$address"));
if ($insert){
    header('Location:../forms/Personain.php');
    echo "<script> alert('Insertaste');
    window.location='../forms/Personain.php'
    <script>";
}