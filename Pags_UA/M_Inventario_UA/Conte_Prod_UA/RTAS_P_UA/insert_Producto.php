<?php
include_once "../../../../Iniciar_Sesion/conexion.php";
$id_producto = $_POST["id_producto"];
$nombre_p = $_POST["nombre_p"];
$estado_p = $_POST["estado_p"];
$precio_p = $_POST["precio_p"];
$descripcion_p  = $_POST["descripcion_p"];
$unidad_p = $_POST["unidad_p"];
$n_paquetes = $_POST["n_paquetes"];
$n_cajas_p = $_POST["n_cajas_p"];

$sql = "INSERT INTO producto
(id_producto,nombre_p,estado_p,precio_p,descripcion_p,unidad_p,n_paquetes,n_cajas_p) VALUES 
('$id_producto','$nombre_p','$estado_p','$precio_p','$descripcion_p','$unidad_p','$n_paquetes','$n_cajas_p');";

if ($conex -> query($sql)) {
    include_once "RTA_P_R.php";
}else{
    echo "NO SE LOGRO REGISTRAR EL PRORUCTO";
}

?>