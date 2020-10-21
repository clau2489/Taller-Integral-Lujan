<?php
require_once ("config/db.php");
require_once ("config/conexion.php");
$fecha = $_POST['fecha'];
$propietario = $_POST['propietario'];
$domicilio = $_POST['domicilio'];
$telefono = $_POST['telefono'];
$plazo = $_POST['plazo'];
$clase = $_POST['clase'];
$marca = $_POST['marca'];
$tipo = $_POST['tipo'];
$mesanio = $_POST['mesanio'];
$motorochasis = $_POST['motorochasis'];
$patente = $_POST['patente'];
$kilometraje = $_POST['kilometraje'];
$trabajos = $_POST['trabajos'];
$repuestos = $_POST['repuestos'];
$pintura = $_POST['pintura'];
$manoobrachapa = $_POST['manoobrachapa'];
$manoobramecanica = $_POST['manoobramecanica'];
$manoobrapintura = $_POST['manoobrapintura'];
$varios = $_POST['varios'];
$comentarios = $_POST['comentarios'];
$total = $_POST['total'];

$sql = "INSERT INTO presupuesto (fecha,	propietario, domicilio, telefono, plazo, clase, marca, tipo, mesanio, 	motorochasis, patente, kilometraje, trabajos, repuestos, pintura, manoobrachapa, manoobramecanica, manoobrapintura, varios, comentarios, total) VALUES ('$fecha', '$propietario','$domicilio','$telefono','$plazo','$clase','$marca','$tipo','$mesanio','$motorochasis','$patente','$kilometraje','$trabajos','$repuestos','$pintura','$manoobrachapa','$manoobramecanica','$manoobrapintura','$varios', '$comentarios','$total')";

if ($con->query($sql) === TRUE) {
	header("Location:verpresupuestos.php");
} else {
	echo "Error: " . $sql . "<br>" . $con->error; //Redireccion de la página
}


?>