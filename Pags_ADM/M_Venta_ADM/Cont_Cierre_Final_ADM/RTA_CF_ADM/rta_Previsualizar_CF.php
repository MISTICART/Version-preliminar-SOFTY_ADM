<!DOCTYPE html>
<html>
<head>
    <title>SOFTY_ADM</title>
    <link rel="stylesheet" href="../../../../Pags_UA/style_rtas.css">
</head>
<body>
<?php
include_once "../../../../Iniciar_Sesion/conexion.php";
$monto_caja = $_POST["monto_caja"];

$sql_efectivo = "SELECT COUNT(*) AS total_efectivo FROM venta WHERE metodo_pago_venta = 'efectivo'";
$result_efectivo = $conex->query($sql_efectivo);
$row_efectivo = $result_efectivo->fetch_assoc();
$ventas_efectivo = $row_efectivo['total_efectivo'];

$sql_tarjeta = "SELECT COUNT(*) AS total_tarjeta FROM venta WHERE metodo_pago_venta = 'tarjeta'";
$result_tarjeta = $conex->query($sql_tarjeta);
$row_tarjeta = $result_tarjeta->fetch_assoc();
$ventas_tarjeta = $row_tarjeta['total_tarjeta'];

$sql_total = "SELECT SUM(monto_venta) AS total_ventas FROM venta";
$result_total = $conex->query($sql_total);
$row_total = $result_total->fetch_assoc();
$total_ventas = $row_total['total_ventas'];

$diferencia = $total_ventas - $monto_caja;

$conex->close();
?>

    <section class="section-principal">
        <h1 class="title-index">PREVISUALIZACION CF</h1>
        <form class="form_CF">
         
            <p>VENTAS EN EFECTIVO: <?php echo $ventas_efectivo; ?></p>
            <p>VENTAS CON TARJETA: <?php echo $ventas_tarjeta; ?></p>
            <p>DIFERENCIA: <?php echo $diferencia; ?></p>
            <p>TOTAL DE VENTAS: <?php echo $total_ventas; ?></p>
            <p>PREVISUALIZACION DE CIERRE</p>
        </form> 
    </section>
    <form action="../../../Ventas_ADM.html" method="POST">
        <input class="input_final" type="submit" value="CONTINUAR" />
    </form>
</body>
</html>
