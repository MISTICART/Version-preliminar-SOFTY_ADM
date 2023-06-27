<?php
include_once "../../../../Iniciar_Sesion/conexion.php";


$id_venta = $_POST["id_venta"];
$n°_ventas = $_POST["n°_ventas"];
$descripcion_venta = $_POST["descripcion_venta"];
$metodo_pago_venta  = $_POST["metodo_pago_venta"];
$monto_venta = $_POST["monto_venta"];
$cant_vendida = $_POST["cant_vendida"];
$hora_fecha_venta = $_POST["hora_fecha_venta"];

$sql = "INSERT INTO venta
(id_venta,n°_ventas,descripcion_venta,metodo_pago_venta,monto_venta,cant_vendida,hora_fecha_venta) VALUES 
('$id_venta','$n°_ventas','$descripcion_venta','$metodo_pago_venta','$monto_venta','$cant_vendida','$hora_fecha_venta');";

if ($conex -> query($sql)) {
    include_once "RTA_V_R.php";
}else{
    echo "NO SE LOGRO REGISTRAR LA VENTA";
}

?>