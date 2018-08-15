<?php
/**
 * Created by PhpStorm.
 * User: Regulus
 * Date: 1/08/2018
 * Time: 1:13 AM
 */

require("../conexion/Db.class.php");

$username = $_POST['username'];
$password = $_POST['password'];

$db = new DB();



$login 	 =     $db->row("SELECT USERNAME, CLAVE FROM tb_usuarios WHERE USERNAME = :f AND CLAVE = :a", array("f"=>$username,"a"=>$password));


if ($login['USERNAME']== $username && $login['CLAVE']==$password)
{
    $submitted = isset($_POST['username']) && isset($_POST['password']);
    $estado = false;
    if ($submitted) {
        setcookie('username', $_POST['username'], time()+86400, '/');
        $estado = true;
    }
    $paradonde = $db->row("SELECT DISTINCT ID_UNIDAD FROM db_prueba.tb_usuarios WHERE USERNAME = :t ",array("t"=>$username));
    print_r ($paradonde);
    if (isset($paradonde)== true )
    {
        if ($paradonde['ID_UNIDAD']==1 ){
            header('Location:../inicio_ventanilla/ventanilla.php');
        }
        elseif ($paradonde['ID_UNIDAD']==2){
            header('Location:../inicio_digitadores/Digitadores.php');
        }
        elseif ($paradonde['ID_UNIDAD']==6){
            header('Location:../inicio_catalogos/index_catalogos.php');
        }
        elseif ($paradonde['ID_UNIDAD']==3){
            header('Location:../inicio_juridico/juridico.php');
        }
        elseif ($paradonde['ID_UNIDAD']==4){
            header('Location:../inicio_financiero/financiero.php');
        }

        elseif ($paradonde['ID_UNIDAD']==5){
            header('Location:../inicio_social/social.php');
        }
        else
        {
            echo "fallaste maje";
        }

    }




    else
    {
      echo "de nuevo no pudiste pendejo";
    }


}
else{

    header('Location:../login/lou.php');

}







?>
