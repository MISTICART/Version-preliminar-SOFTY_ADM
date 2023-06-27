<?php

include_once "../../../../Iniciar_Sesion/conexion.php";

$responsable = $_POST["responsable"];


$sql_efectivo = "SELECT COUNT(*) AS total_efectivo FROM venta WHERE metodo_pago_venta = 'efectivo'";
$result_efectivo = $conex->query($sql_efectivo);
$row_efectivo = $result_efectivo->fetch_assoc();
$ventas_efectivo = $row_efectivo['total_efectivo'];

$sql_tarjeta = "SELECT COUNT(*) AS total_tarjeta FROM venta WHERE metodo_pago_venta = 'tarjeta'";
$result_tarjeta = $conex->query($sql_tarjeta);
$row_tarjeta = $result_tarjeta->fetch_assoc();
$ventas_tarjeta = $row_tarjeta['total_tarjeta'];

$sql_total = "SELECT SUM(monto_venta) AS n°_ventas FROM venta";
$result_total = $conex->query($sql_total);
$row_total = $result_total->fetch_assoc();
$total_ventas = $row_total['n°_ventas'];
$diferencia = $total_ventas - $monto_caja;
$conex->close();
?>

<!DOCTYPE html>|
<html>
<head>
    <title>Resultados del Cierre</title>
</head>
<body>
    <h1>RESULTADO DEL CIERRE</h1>
    <p>RESPONSABLE: <?php echo $responsable; ?></p   
    <p>Ventas en Efectivo: <?php echo $ventas_efectivo; ?></p>
    <p>Ventas en Tarjeta: <?php echo $ventas_tarjeta; ?></p>
    <p>Total de Ventas: <?php echo $total_ventas; ?></p>
    
    <p>Caja cerrada</p>
</body>
</html>
