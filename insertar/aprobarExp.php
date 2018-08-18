<?php
/**
 * Created by PhpStorm.
 * User: Regulus
 * Date: 17/08/2018
 * Time: 6:05 PM
 */
session_start();
$aprobado = $_POST['aprobar'];
print_r($aprobado);

require ("../conexion/Db.class.php");

$db = new DB();
$proyecto = $_SESSION['proyecto'];
$id = $db->row("SELECT ID_EXPEDIENTE FROM tb_expediente WHERE ID_PROYECTO = :f ", array("f"=>$proyecto));
$Charizar = $id['ID_EXPEDIENTE'];
$update   =  $db->query("UPDATE tb_expediente SET APROBADO = :f WHERE ID_EXPEDIENTE = :id", array("f"=>"$aprobado","id"=>"$Charizar"));

if ($update){



    header("Location:../inicio_jefesote/jefesote.php");



}
session_destroy();