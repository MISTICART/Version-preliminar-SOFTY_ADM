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

    $sql = "SELECT * FROM cierre_final";
    $result = $conex->query($sql);

    if ($result && $result->num_rows > 0) {
        echo '<table>
            <tr>
                <th>    ID DEL CIERRE FINAL      </th> 
                <th>    HORA Y FECHA DEL CIERRE  </th>
                <th>    MONTO DE LA CAJA         </th>
                <th>    VENTAS EN EFECTIVO       </th>
                <th>    VENTAS EN TARJETA        </th>
                <th>    TOTAL DE LAS VENTAS      </th>
                <th>    DIFERENCIA               </th> 
                <th>    RESPONSABLE DEL CIERRE   </th>  
            </tr>';

        while ($row = $result->fetch_assoc()) {
            $id_cf = $row["id_cf"];
            $hora_fecha_cf = $row["hora_fecha_cf"];
            $monto_caja = $row["monto_caja"];
            $ventas_efectivo = $row["ventas_efectivo"];
            $ventas_tarjeta = $row["ventas_tarjeta"];
            $total_ventas = $row["total_ventas"];
            $diferencia = $row["diferencia"];
            $responsable_cf = $row["responsable_cf"];

            echo '<tr>
                <td>' . $id_cf . '</td> 
                <td>' . $hora_fecha_cf . '</td>
                <td>' . $monto_caja . '</td>
                <td>' . $ventas_efectivo . '</td>
                <td>' . $ventas_tarjeta . '</td>
                <td>' . $total_ventas . '</td>
                <td>' . $diferencia . '</td>
                <td>' . $responsable_cf . '</td>
            </tr>';
        }

        echo '</table>';

        echo '<form action="RTAS_RS_ADM/rta_Registro_CF.php" method="post">
                <input type="hidden" name="sql" value="' . htmlentities($sql) . '">
                <input class="input_final" type="submit" value="DESCARGAR TABLA">
              </form>';
    } else {
        echo "<p>NO SE ENCONTRARON REGISTROS EN LA TABLA DE CIERRE FINAL</p>";
    }

    $result->free();
    $conex->close();
    ?>
</body>
</html>
