<?php
/**
 * Created by PhpStorm.
 * User: Regulus
 * Date: 1/08/2018
 * Time: 1:13 AM
 */
$submitted = isset($_POST['username']) && isset($_POST['password']);
$estado = false;
if ($submitted) {
  setcookie('username', $_POST['username'], time()+86400, '/');
  $estado = true;
}

header('Location:../inicio/index.php');
?>
