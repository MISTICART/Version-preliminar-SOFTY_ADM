<!DOCTYPE html>
<html lang="en">
<head>
    <title>SOFTY_ADM</title>
    <meta name="description" content="Esta es una pagina web para administracion">
    <meta name="author" content="MISTIC_ART">
    <meta name="keywords" content="administracion, pagina web para administracion,pagina web">
    <meta charset="UTF-8"> 
    <script src="https://kit.fontawesome.com/e9121b317f.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="../../../../Pags_UA/style_rtas.css">
</head>
<body>
    <div class="h2">
         <h2>CONSULTA EXITOSA</h2> 
    </div>
    <?php
    
     include_once "../../../../Iniciar_Sesion/conexion.php";
    $id_venta = $_POST['id_venta'];
     $sql = "SELECT * FROM venta WHERE id_venta = '$id_venta' LIMIT 1";
     $result = $conex->query($sql);
     echo '<table>
            <tr>
                <th> ID VENTA               </th> 
                <th> N° VENTAS              </th>
                <th> DESCRIPCION DE VENTA   </th>
                <th> METODO PAGO DE VENTA   </th>
                <th> MONTO DE VENTA         </th>
                <th> CANTIDAD DE VENTA      </th>
                <th> HORA Y FECHA DE VENTA  </th> 
            </tr>';

    if ($result && $result->num_rows > 0) {
        $row = $result->fetch_assoc();
            $id_venta = $row["id_venta"];
            $n°_ventas = $row["n°_ventas"];
            $descripcion_venta = $row["descripcion_venta"];
            $metodo_pago_venta = $row["metodo_pago_venta"];
            $monto_venta = $row["monto_venta"];
            $cant_vendida = $row["cant_vendida"];
            $hora_fecha_venta = $row["hora_fecha_venta"];
    echo '<tr>
                <td>' . $id_venta . '</td> 
                <td>' . $n°_ventas . '</td>
                <td>' . $descripcion_venta . '</td>
                <td>' . $metodo_pago_venta . '</td>
                <td>' . $monto_venta . '</td>
                <td>' . $cant_vendida . '</td>
                <td>' . $hora_fecha_venta . '</td>
    </tr>';
} else {
    echo "<p>No se encontró la venta con el ID: $id_venta</p>";
        }
         echo '<table class="table2";>
            <tr>
                <th><a href="../M_Venta_ADM.html">MODIFICAR</a></th>
                <th><a href="../C_Venta_ADM.html">CONTINUAR</a></th> 
                <th><a href="../E_Venta_ADM.html">ELIMINAR</a></th>
            </tr>';
            $result->free();
            $conex->close();

    ?>
</body>
</html>