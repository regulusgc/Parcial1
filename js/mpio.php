<?php
/**
 * Created by PhpStorm.
 * User: Regulus
 * Date: 15/08/2018
 * Time: 3:18 AM
 */
require ("../conexion/Db.class.php");

$db = new DB();
$el_depto = $_POST['departamento'];

$munic = $db->query("SELECT * FROM db_prueba.tb_cat_municipios where ID_DEPARTAMENTO = :firstname ",array("firstname"=>"$el_depto"));;

echo '<option value ="0">Seleccione</option>';

?>
<?php
foreach ( $munic as $posicion) { ?>
    <option value="<?php echo $posicion['ID_MUNICIPIO']?> " ><?php echo $posicion['DESCRIPCION_MUNICIPIO'] ?></option>
<?php }
?>

