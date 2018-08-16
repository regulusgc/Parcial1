<?php
/**
 * Created by PhpStorm.
 * User: Regulus
 * Date: 15/08/2018
 * Time: 10:28 PM
 */

require("../conexion/Db.class.php");

$db = new DB();
session_start();

$def = "default";
$rquisito = $_POST['rquisito'];
$idexpe = $_POST['idexpe'];
$numexp = $_POST['numexp'];
$yearexp = $_POST['yearexp'];
$usuario = $_SESSION['usuario'];
$date = $_POST['date'];
$hosting = $_POST['hosting'];
$motivo = $_POST['motivo'];

$merousuario = $db->row("SELECT ID_USUARIO FROM tb_usuarios WHERE USERNAME = :f ", array("f"=>$usuario));

$KAMISAMA = $merousuario["ID_USUARIO"];





$insert   =  $db->query("INSERT INTO  db_prueba.tb_expediente_requsitos
(ID_EXPEDIENTE_REQUISITO, ID_REQUISITO, ID_EXPEDIENTE, NUMERO_EXPEDIENTE, 
ANIO_EXPEDIENTE, ID_USUARIO, FECHA_PRESENTACION, ACEPTADO, MOTIVO_RECHAZO)
VALUES(:idEXPRE,:idreq,:idexp,:numex,:anioex,:idusario,:fecha,:acp,:motivo)",
    array("idEXPRE"=>"$def","idreq"=>"$rquisito","idexp"=>"$idexpe","numex"=>"$numexp",
        "anioex"=>"$yearexp","idusario"=>"$KAMISAMA","fecha"=>"$date","acp"=>"$hosting",
        "motivo"=>"$motivo"));

if ($insert){
    header("Location:../forms/ExpedienteDiligencias.php");



}

session_destroy();