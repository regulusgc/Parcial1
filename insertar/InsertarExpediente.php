<?php
/**
 * Created by PhpStorm.
 * User: Regulus
 * Date: 15/08/2018
 * Time: 6:57 AM
 */

require ("../conexion/Db.class.php");
$def = "default";
$usuario = "levman";//$_POST['user'];
$tingreso = $_POST['tingreso'];
$dsubsidio = $_POST['dsubsidio'];
$numeroe = $_POST['numeroe'];
$yearexp = $_POST['yearexp'];
$proyecto = $_POST['proyecto'];
$fecha = $_POST['fecha'];
$monto = $_POST['monto'];
$longitud = $_POST['longitud'];
$latitud = $_POST['latitud'];
$obs = $_POST['obs'];

$db = new DB();
$merousuario = $db->row("SELECT ID_USUARIO FROM tb_usuarios WHERE USERNAME = :f ", array("f"=>$usuario));
print_r($merousuario["ID_USUARIO"]);
$KAMISAMA = $merousuario["ID_USUARIO"];


$insert   =  $db->query("INSERT INTO tb_expediente
(ID_EXPEDIENTE, ID_TIPO_INGRESO, ID_TIPO_SOILCITUD_SUBSIDIO, ID_PROYECTO, FECHA_REGISTRO, OBSERVACIONES_EXPEDIENTE, MONTO_SOLICITADO, 
LONGITUD_PROYECTO, LATITUD_PROYECTO, NUMERO_EXPEDIENTE, ANIO_EXPEDIENTE, ID_USUARIO)
VALUES(:id,:itipoin,:isub,:iproy,:fecha,:obser,:monto,:longi,:lati,:numexpe,:yearex,:usuario)",
    array("id"=>"$def","itipoin"=>"$tingreso","isub"=>"$dsubsidio","iproy"=>"$proyecto",
        "fecha"=>"$fecha","obser"=>"$obs","monto"=>"$monto","longi"=>"$longitud",
        "lati"=>"$latitud","numexpe"=>"$numeroe","yearex"=>"$yearexp","usuario"=>"$KAMISAMA"));

if ($insert){
    header("Location:../forms/Expediente.php");



}