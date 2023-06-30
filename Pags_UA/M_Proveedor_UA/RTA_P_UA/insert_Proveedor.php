<?php
include_once "../../../Iniciar_Sesion/conexion.php";

$nombre_proveedor = $_POST["nombre_proveedor"];
$tipo_proveedor = $_POST["tipo_proveedor"];
$direccion_proveedor  = $_POST["direccion_proveedor"];
$ubicacion_proveedor = $_POST["ubicacion_proveedor"];
$contacto_proveedor = $_POST["contacto_proveedor"];
$email_proveedor = $_POST["email_proveedor"];
 
$sql = "INSERT INTO proveedor
(nombre_proveedor,tipo_proveedor,direccion_proveedor,ubicacion_proveedor,contacto_proveedor,email_proveedor) VALUES 
('$nombre_proveedor','$tipo_proveedor','$direccion_proveedor','$ubicacion_proveedor','$contacto_proveedor','$email_proveedor');";

if ($conex -> query($sql)) {
    include_once "RTA_R_P.php";
}else{
    echo "NO SE LOGRO REGISTRAR  EL PROVEEDOR";
}

?>