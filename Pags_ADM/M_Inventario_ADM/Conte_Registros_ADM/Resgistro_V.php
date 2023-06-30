<!DOCTYPE html>
<html lang="en">
<head>
    <title>SOFTY_ADM</title>
    <meta name="description" content="Esta es una pagina web para administracion">
    <meta name="author" content="MISTIC_ART">
    <meta name="keywords" content="administracion, pagina web para administracion,pagina web">
    <meta charset="UTF-8"> 
    <script src="https://kit.fontawesome.com/e9121b317f.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="../../../Pags_UA/style_rtas.css">
</head>
<body>
    <div class="h2">
         <h2>CONSULTA EXITOSA</h2> 
    </div>

    <?php
    include_once "../../../Iniciar_Sesion/conexion.php";

    $sql = "SELECT * FROM venta";
    $result = $conex->query($sql);

    if ($result && $result->num_rows > 0) {
        echo '<table>
            <tr>
                <th>ID VENTA</th> 
                <th>N° VENTAS</th>
                <th>DESCRIPCION DE VENTA</th>
                <th>METODO PAGO DE VENTA</th>
                <th>MONTO DE VENTA</th>
                <th>CANTIDAD DE VENTA</th>
                <th>HORA Y FECHA DE VENTA</th> 
            </tr>';

        while ($row = $result->fetch_assoc()) {
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
        }
        echo '</table>';

        echo '<form action="RTAS_RS_ADM/rta_Registro_V.php" method="post">
                <input type="hidden" name="sql" value="' . htmlentities($sql) . '">
                <input class="input_final" type="submit" value="DESCARGAR TABLA">
              </form>';
              
    } else {
        echo "<p>NO SE ENCONTRARON REGISTROS EN LA TABLA DE VENTAS</p>";
    }

    $result->free();
    $conex->close();
    ?>
</body>
</html>
