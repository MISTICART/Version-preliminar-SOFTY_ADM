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

    $sql = "SELECT * FROM solicitudes";
    $result = $conex->query($sql);

    if ($result && $result->num_rows > 0) {
        echo '<table>
            <tr>
                <th>ID SOLICITUD</th> 
                <th>ESTADO</th>
                <th>HORA Y FECHA DE LA SOLICITUD</th>
                <th>USUARIO SOLICITANTE </th>
                <th>DOCUMENTO SOLICITANTE</th>
                <th>TIPO DE SOLICITUD</th> 
            </tr>';

        while ($row = $result->fetch_assoc()) {
            $id_solicitud = $row["id_solicitud"];
            $estado = $row["estado"];
            $hora_fecha_solicitud = $row["hora_fecha_solicitud"];
            $usuario_solicitante = $row["usuario_solicitante"];
            $n°documento_solicitante = $row["n°documento_solicitante"];
            $tipo_solicitud = $row["tipo_solicitud"];
            
            echo '<tr>
                <td>' . $id_solicitud . '</td> 
                <td>' . $estado . '</td>
                <td>' . $hora_fecha_solicitud . '</td>
                <td>' . $usuario_solicitante . '</td>
                <td>' . $n°documento_solicitante . '</td>
                <td>' . $tipo_solicitud . '</td>
            </tr>';
        }
        echo '</table>';

        echo '<form action="RTAS_RS_ADM/rta_Registro_S.php" method="post">
                <input type="hidden" name="sql" value="' . htmlentities($sql) . '">
                <input class="input_final" type="submit" value="DESCARGAR TABLA">
              </form>';
              
    } else {
        echo "<p>NO SE ENCONTRARON REGISTROS EN LA TABLA DE SOLICITUDES</p>";
    }

    $result->free();
    $conex->close();
    ?>
</body>
</html>
