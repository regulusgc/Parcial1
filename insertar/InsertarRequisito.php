<?php
?>
<?php
require("../conexion/Db.class.php");

$db = new DB();
session_start();
$el_Tipo = $_SESSION['tipoing'];
if ($el_Tipo==1 )
{
    $defa = "default";
    $_bienes = $_POST['bienes'];
    $_salario =$_POST['salario'];
    $_estudio = $_POST['estudio'];
    $_boleto = $_POST['boleto'];
    $_obs = $_POST['obs'];
    $_hosting = $_POST['hosting'];

    $insert   =  $db->query("INSERT INTO db_prueba.tb_requisitos (ID_REQUISITO, ID_TIPO_INGRESO, CARENCIA_BIENES, 
SALARIO_MINIMO, OBSERVACIONES, OBLIGATORIO, STDSOCIOECONOMICO, 
PROVEEDOR_ESTADO, SOLVENCIA_CONTRALORIA, AUTO_COCODE, BOLETO_ORNATO, 
NOMBRE_EMPRESA, LIDER_GRUPO)
 VALUES(:id,:tipo,:carencia,:salario,:obsr,:obli,:estudio,
:proveedor,:solvencia,:cocode,:boleto,:empresa,:lider)",
        array("id"=>"$defa","tipo"=>"$el_Tipo","carencia"=>"$_bienes","salario"=>"$_salario",
            "obsr"=>"$_obs","obli"=>"$_hosting","estudio"=>"$_estudio","proveedor"=>null,
            "solvencia"=>null,"cocode"=>null,"boleto"=>"$_boleto","empresa"=>null,
            "lider"=>null ));


    if ($insert){
        header("Location:../forms/Requisitos.php");



    }

}
elseif($el_Tipo ==2)
{
    $defa = "default";
    $_bienes = $_POST['bienes'];
    $_salario =$_POST['salario'];
    $_estudio = $_POST['estudio'];
    $_boleto = $_POST['boleto'];
    $_obs = $_POST['obs'];
    $_hosting = $_POST['hosting'];
    $_cocode = $_POST['cocode'];
    $_lider = $_POST['lider'];


    $insert   =  $db->query("INSERT INTO db_prueba.tb_requisitos
(ID_REQUISITO, ID_TIPO_INGRESO, CARENCIA_BIENES, 
SALARIO_MINIMO, OBSERVACIONES, OBLIGATORIO, STDSOCIOECONOMICO, 
PROVEEDOR_ESTADO, SOLVENCIA_CONTRALORIA, AUTO_COCODE, BOLETO_ORNATO, 
NOMBRE_EMPRESA, LIDER_GRUPO)
VALUES(:id,:tipo,:carencia,:salario,:obsr,:obli,:std,:proveedor,:solvencia,:cocode,:boleto,:empresa,:lider)",
        array("id"=>"$defa","tipo"=>"$el_Tipo","carencia"=>"$_bienes","salario"=>"$_salario",
            "obsr"=>"$_obs","obli"=>"$_hosting","std"=>"$_estudio","proveedor"=>null,
            "solvencia"=>null,"cocode"=>"$_cocode","boleto"=>"$_boleto","empresa"=>null,
            "lider"=>"$_lider" ));

    if ($insert){
        header("Location:../forms/Requisitos.php");



    }



}
elseif($el_Tipo ==3)
{
    $defa = "default";
    $_bienes = $_POST['bienes'];
    $_salario =$_POST['salario'];
    $_estudio = $_POST['estudio'];
    $_boleto = $_POST['boleto'];
    $_obs = $_POST['obs'];
    $_hosting = $_POST['hosting'];
    $_cocode = $_POST['cocode'];
    $_lider = $_POST['lider'];
    $_proveedor = $_POST['proveedor'];
    $_solvencia = $_POST['solvencia'];
    $_empresa = $_POST['empresa'];


    $insert   =  $db->query("INSERT INTO db_prueba.tb_requisitos
(ID_REQUISITO, ID_TIPO_INGRESO, CARENCIA_BIENES, 
SALARIO_MINIMO, OBSERVACIONES, OBLIGATORIO, STDSOCIOECONOMICO, 
PROVEEDOR_ESTADO, SOLVENCIA_CONTRALORIA, AUTO_COCODE, BOLETO_ORNATO, 
NOMBRE_EMPRESA, LIDER_GRUPO)
VALUES(:id,:tipo,:carencia,:salario,:obsr,:obli,:std,:proveedor,:solvencia,:cocode,:boleto,:empresa,:lider)",
        array("id"=>"$defa","tipo"=>"$el_Tipo","carencia"=>"$_bienes","salario"=>"$_salario",
            "obsr"=>"$_obs","obli"=>"$_hosting","std"=>"$_estudio","proveedor"=>"$_proveedor",
            "solvencia"=>"$_solvencia" ,"cocode"=>null,"boleto"=>"$_boleto","empresa"=>"$_empresa",
            "lider"=>null ));

    if ($insert){
        header("Location:../forms/Requisitos.php");



    }




}

if ($el_Tipo==1)
{



}
elseif ($el_Tipo=2)
{

}

elseif ($el_Tipo=3)
{

}

else
{
    echo "la ultra mega hiper cagaste majeee";
}












?>