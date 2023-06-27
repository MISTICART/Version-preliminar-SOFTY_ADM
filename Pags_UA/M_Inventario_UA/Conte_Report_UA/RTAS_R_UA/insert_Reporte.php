<?php
include_once "../../../../Iniciar_Sesion/conexion.php";
$id_reporte = $_POST["id_reporte"];
$titulo = $_POST["titulo"];
$desc_reporte = $_POST["desc_reporte"];
$hora_fecha_reporte = $_POST["hora_fecha_reporte"];
$tipo_reporte = $_POST["tipo_reporte"];
$prioridad = $_POST["prioridad"];


$sql = "INSERT INTO reporte
(id_reporte,titulo,desc_reporte, hora_fecha_reporte,tipo_reporte, prioridad) VALUES 
('$id_reporte','$titulo','$desc_reporte','$hora_fecha_reporte','$tipo_reporte','$prioridad');";

if ($conex -> query($sql)) {
    include_once "RTA_R_R.php";
}else{
    echo "NO SE LOGRO REGISTRAR EL REPORTE";
}

?>