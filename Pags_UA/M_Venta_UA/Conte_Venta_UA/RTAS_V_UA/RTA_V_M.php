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
    <div class="h2">
         <h2>MODIFICACION EXITOSA</h2> 
    </div>
    <?php
    include_once "../../../../Iniciar_Sesion/conexion.php";
    
    $id_venta = $_POST['id_venta']; 
       

        $sql = "SELECT * FROM venta WHERE id_venta = '$id_venta' ";
        $RTA = $conex->query($sql);

        if ($RTA->num_rows > 0) {
            $row = $RTA->fetch_assoc();
            $id_venta = $row["id_venta"];
            $descripcion_venta = $row["descripcion_venta"];
            $metodo_pago_venta = $row["metodo_pago_venta"];
            $monto_venta = $row["monto_venta"];
            $cant_vendida = $row["cant_vendida"];
            $hora_fecha_venta = $row["hora_fecha_venta"];
        } else {
            echo "Venta no encontrada";
        }
    

    if ($_SERVER['REQUEST_METHOD'] === 'POST' ) {
        $id_venta = $row["id_venta"];
        $descripcion_venta = $_POST["descripcion_venta"];
        $metodo_pago_venta = $_POST["metodo_pago_venta"];
        $monto_venta = $_POST["monto_venta"];
        $cant_vendida = $_POST["cant_vendida"];
        $hora_fecha_venta = $_POST["hora_fecha_venta"];

        $sql = "UPDATE venta SET id_venta='$id_venta', descripcion_venta = '$descripcion_venta', metodo_pago_venta = '$metodo_pago_venta', monto_venta = '$monto_venta', 
        cant_vendida = '$cant_vendida', hora_fecha_venta = '$hora_fecha_venta' WHERE id_venta = '$id_venta'";

        if ($conex->query($sql) === TRUE) {
            
        } else {
            echo "ERROR AL ACTUALIZAR LA VENTA: " . $conex->error;
        }
    }

    $conex->close();
    ?>

    <form method="POST" action="../M_Venta_UA.html">
       
    
        <label for="descripcion_venta">DESCRIPCION DE LA VENTA</label><br>
        <input class="controls" type="text" id="descripcion_venta" name="descripcion_venta" value="<?php echo $descripcion_venta; ?>" ><br>
        <label for="metodo_pago_venta">MÉTODO DE PAGO DE LA VENTA</label><br>
        <input class="controls" type="text" id="metodo_pago_venta" name="metodo_pago_venta" value="<?php echo $metodo_pago_venta; ?>" ><br>
        <label for="monto_venta">MONTO DE LA VENTA</label><br>
        <input class="controls" type="number" id="monto_venta" name="monto_venta" value="<?php echo $monto_venta; ?>"><br>
        <label for="cant_vendida">CANTIDAD DE LA VENTA</label><br>
        <input class="controls" type="number" id="cant_vendida" name="cant_vendida" value="<?php echo $cant_vendida; ?>" ><br>
        <label for="hora_fecha_venta">HORA Y FECHA DE LA VENTA</label><br>
        <input class="controls" type="datetime-local" id="hora_fecha_venta" name="hora_fecha_venta" value="<?php echo $hora_fecha_venta; ?>" required><br>
       
        <input class="input_final" type="submit" name="update" value="CONTINUAR" onclick="location.href='../M_Venta_UA.html'">
    </form>>
    </form>
</body>
</html>
