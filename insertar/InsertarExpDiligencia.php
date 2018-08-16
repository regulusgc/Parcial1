<?php
/**
 * Created by PhpStorm.
 * User: Regulus
 * Date: 15/08/2018
 * Time: 2:11 PM
 */
require("../conexion/Db.class.php");
$db = new DB();
session_start();
$def = "default";
$proyecto = $_SESSION['proyecto'];
$diligencia = $_SESSION['dili'];
$usuario = $_SESSION['user'];

$numexp = $_POST['numexp'];
$yearexp = $_POST['yearexp'];
$date = $_POST['date'];
$resultado = $_POST['Resultado'];
$hosting = $_POST['hosting'];


$id = $db->row("SELECT ID_EXPEDIENTE,NUMERO_EXPEDIENTE,ANIO_EXPEDIENTE FROM tb_expediente WHERE ID_PROYECTO = :f ", array("f"=>$proyecto));
$idexpediente = $id['ID_EXPEDIENTE'];
$numerin = $id['NUMERO_EXPEDIENTE'];
$anin = $id['ANIO_EXPEDIENTE'];

print_r($idexpediente);
print_r($numerin);
print_r($anin);

$merousuario = $db->row("SELECT ID_USUARIO FROM tb_usuarios WHERE USERNAME = :f ", array("f"=>$usuario));

$KAMISAMA = $merousuario["ID_USUARIO"];

$insert   =  $db->query("INSERT INTO  db_prueba.tb_expediente_diligencia
(ID_EXPEDIENTE, NUMERO_EXPEDIENTE, ANIO_EXPEDIENTE, ID_DILIGENCIA, ID_DILIGENCIA_EXPEDIENTE, 
ID_USUARIO, FECHA_DILIGENCIA, RESULTADO_DILIGENCIA, DILIGENCIA_FINALIZADA)
VALUES(:idEXP,:numExp,:anioExp,:idDili,:id,:Usuario,:fecha,:resultado,:Dilifina)",
    array("idEXP"=>"$idexpediente","numExp"=>"$numerin","anioExp"=>"$anin","idDili"=>"$diligencia",
        "id"=>"$def","Usuario"=>"$KAMISAMA","fecha"=>"$date","resultado"=>"$resultado",
        "Dilifina"=>"$hosting"));

if ($insert){
    header("Location:../forms/ExpedienteDiligencias.php");



}

