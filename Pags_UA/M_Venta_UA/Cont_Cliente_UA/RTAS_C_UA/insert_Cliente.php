<?php
include_once "../../../../Iniciar_Sesion/conexion.php";

$id_cliente = $_POST["id_cliente"];
$n°_cliente_reg = $_POST["n°_cliente_reg"];
$nombre_cliente = $_POST["nombre_cliente"];
$direccion_cliente = $_POST["direccion_cliente"];
$ubicacion_cliente = $_POST["ubicacion_cliente"];
$contacto_cliente = $_POST["contacto_cliente"];
$email_cliente = $_POST["email_cliente"];
$tipo_contacto_cliente = $_POST["tipo_contacto_cliente"];

$sql = "INSERT INTO cliente
(id_cliente,n°_cliente_reg,nombre_cliente,direccion_cliente,ubicacion_cliente,contacto_cliente,email_cliente,tipo_contacto_cliente) VALUES 
('$id_cliente','$n°_cliente_reg','$nombre_cliente','$direccion_cliente','$ubicacion_cliente','$contacto_cliente','$email_cliente','$tipo_contacto_cliente');";
if ($conex -> query($sql)) {
    include_once "RTA_C_R.php";
}else{
    echo "NO SE LOGRO REGISTRAR EL CLIENTE";
}

?>