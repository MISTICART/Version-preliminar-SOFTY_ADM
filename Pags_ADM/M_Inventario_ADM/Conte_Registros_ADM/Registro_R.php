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

    $sql = "SELECT * FROM reporte";
    $result = $conex->query($sql);

    if ($result && $result->num_rows > 0) {
        echo '<table>
        <tr>
            <th>ID DEL REPORTE</th> 
            <th>TITULO DEL REPORTE</th>
            <th>DESCRIPCION DEL REPORTE </th>
            <th>HORA Y FECHA DEL REPORTE</th>
            <th>TIPO DE REPORTE</th>
            <th>PRIORIDAD DEL REPORTE</th>
    </tr>';
    while ($row = $result->fetch_assoc()) {
            $id_reporte = $row["id_reporte"];
            $titulo = $row["titulo"];
            $desc_reporte = $row["desc_reporte"];
            $hora_fecha_reporte = $row["hora_fecha_reporte"];
            $tipo_reporte = $row["tipo_reporte"];
            $prioridad = $row["prioridad"];
            
            echo '<tr>
                <td>' . $id_reporte .    '</td> 
                <td>' . $titulo .        '</td>
                <td>' . $desc_reporte . '</td>
                <td>' . $hora_fecha_reporte . '</td>
                <td>' . $tipo_reporte . '</td>
                <td>' . $prioridad .     '</td>
            </tr>';
        }
        echo '</table>';

        echo '<form action="RTAS_RS_ADM/rta_Registro_V.php" method="post">
                <input type="hidden" name="sql" value="' . htmlentities($sql) . '">
                <input class="input_final" type="submit" value="DESCARGAR TABLA">
              </form>';
              
    } else {
        echo "<p>NO SE ENCONTRARON REGISTROS EN LA TABLA DE REPORTES</p>";
    }

    $result->free();
    $conex->close();
    ?>
</body>
</html>
