<!DOCTYPE html>
<html lang="en">
<head>
<title>SOFTY_ADM</title>
    <meta name="description" content="Esta es una pagina web para administracion">
    <meta name="author" content="MISTIC_ART">
    <meta name="keywords" content="administracion, pagina web para administracion,pagina web">
    <meta charset="UTF-8"> 
    <script src="https://kit.fontawesome.com/e9121b317f.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="../../../style_rtas.css">
</head>
<body>
    <?php
include_once "../../../../Iniciar_Sesion/conexion.php";

$sql_caja = "SELECT estado_caja FROM cierre_final ORDER BY id_cf DESC LIMIT 1";
$result_caja = $conex->query($sql_caja);
if ($result_caja->num_rows > 0) {
    $row_caja = $result_caja->fetch_assoc();
    $estado_caja = $row_caja['estado_caja'];

    if ($estado_caja == "abierta") {
        $n°_ventas = $_POST["n°_ventas"];
        $descripcion_venta = $_POST["descripcion_venta"];
        $metodo_pago_venta = $_POST["metodo_pago_venta"];
        $monto_venta = $_POST["monto_venta"];
        $cant_vendida = $_POST["cant_vendida"];
        $hora_fecha_venta = $_POST["hora_fecha_venta"];

        $sql = "INSERT INTO venta
        (n°_ventas, descripcion_venta, metodo_pago_venta, monto_venta, cant_vendida, hora_fecha_venta) VALUES 
        ('$n°_ventas', '$descripcion_venta', '$metodo_pago_venta', '$monto_venta', '$cant_vendida', '$hora_fecha_venta');";

        if ($conex->query($sql)) {
            include_once "RTA_V_R.php";
        } else {
            echo "NO SE LOGRÓ REGISTRAR LA VENTA";
        }
    } else {
        echo '<div class="solicitud">LA CAJA ESTA CERRADA. POR FAVOR, SOLICITE LA APERTURA DE LA CAJA.</div>';
        echo '<table>
        <tr>
            <td><a href="../../Cont_Cierre_Final_UA/Solicitud_CF.php">SOLICITAR APERTURA</a></td> 
            <td><a href="../../../Ventas_UA.html">CONTINUAR</a></td> 
        </tr>';
    }
} else {
    echo "Error al obtener información de la caja.";
}

$conex->close();
?>





</body>
</html>

