<!DOCTYPE html>
<html>
<head>
    <title>SOFTY_ADM</title>
    <link rel="stylesheet" href="../../../../Pags_UA/style_rtas.css">
</head>
<body>
<?php
include_once "../../../../Iniciar_Sesion/conexion.php";
$hora_fecha_cf = $_POST["hora_fecha_cf"];
$monto_caja = $_POST["monto_caja"];
$responsable_cf = $_POST["responsable_cf"];

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

$sql = "INSERT INTO cierre_final (hora_fecha_cf,monto_caja, ventas_efectivo, ventas_tarjeta, total_ventas, diferencia, responsable_cf, estado_caja) VALUES 
('$hora_fecha_cf','$monto_caja', '$ventas_efectivo', '$ventas_tarjeta', '$total_ventas', '$diferencia', '$responsable_cf', 'Cerrada')";

if ($conex->query($sql) === TRUE) {
   
} else {
    echo "Error al insertar el cierre en la base de datos: " . $conex->error;
    exit();
}
$fecha_actual = date("Y-m-d");
$sql_verificar_cierre = "SELECT * FROM cierre_final WHERE hora_fecha_cf = '$fecha_actual'";
$result_verificar_cierre = $conex->query($sql_verificar_cierre);
if ($result_verificar_cierre->num_rows == 0) {
    
} else {
    echo "Cierre no se pudo realizar, puedes agregar aquí el código que se debe ejecutar en caso de error";
}  
$conex->close();
?>

    <section class="section-principal">
        <h1 class="title-index">RESULTADO DEL CIERRE</h1>
        <form class="form_CF">
            <p>RESPONSABLE: <?php echo $responsable_cf; ?></p>   
            <p>VENTAS EN EFECTIVO: <?php echo $ventas_efectivo; ?></p>
            <p>VENTAS CON TARJETA: <?php echo $ventas_tarjeta; ?></p>
            <p>DIFERENCIA: <?php echo $diferencia; ?></p>
            <p>TOTAL DE VENTAS: <?php echo $total_ventas; ?></p>
            <p>----------CAJA CERRADA----------</p>
        </form> 
    </section>
    <form action="../../../inicio_ADM.php" method="POST">
        <input class="input_final" type="submit" value="CONTINUAR" />
    </form>
</body>
</html>
