<?php
/**
 * Created by PhpStorm.
 * User: Regulus
 * Date: 15/08/2018
 * Time: 3:18 AM
 */

require ("../conexion/Db.class.php");

$db = new DB();



$depar = $db->query("SELECT * FROM db_prueba.tb_cat_departamento order by ID_DEPARTAMENTO ASC ");

echo '<option value="0" >Seleccione </option>';

foreach ( $depar as $posicion) {

    echo '<option value='. $posicion['ID_DEPARTAMENTO'].'">'.$posicion['DESCRIPCION_DEPARTAMENTO']. '</option>';
              }

?>




