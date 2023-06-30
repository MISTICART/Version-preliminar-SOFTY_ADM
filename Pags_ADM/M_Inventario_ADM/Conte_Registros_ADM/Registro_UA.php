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

    $sql = "SELECT * FROM usuarios_adm";
    $result = $conex->query($sql);

    if ($result && $result->num_rows > 0) {
        echo '<table>
            <tr>
                <th>COD USUARIO ADM</th> 
                <th>NOMBRE DEL USUARIO ADM</th>
                <th>DIRECCION USUARIO ADM</th>
                <th>UBICACION USUARIO ADM</th>
                <th>CONTACTO USUARIO ADM</th>
                <th>TIPO DE CONTACTO</th>
                <th>EMAIL</th> 
            </tr>';

        while ($row = $result->fetch_assoc()) {
            $COD_USUARIO_ADM = $row["COD_USUARIO_ADM"];
            $Nombre_Usuario_ADM = $row["Nombre_Usuario_ADM"];
            $Direccion_Usuario_ADM = $row["Direccion_Usuario_ADM"];
            $Ubicacion_Usuario_ADM = $row["Ubicacion_Usuario_ADM"];
            $Contacto_Usuario_ADM = $row["Contacto_Usuario_ADM"];
            $Tipo_contacto_Usuario_ADM = $row["Tipo_contacto_Usuario_ADM"];
            $Email_Usuario_ADM = $row["Email_Usuario_ADM"];

            echo '<tr>
                <td>' . $COD_USUARIO_ADM . '</td> 
                <td>' . $Nombre_Usuario_ADM . '</td>
                <td>' . $Direccion_Usuario_ADM . '</td>
                <td>' . $Ubicacion_Usuario_ADM . '</td>
                <td>' . $Contacto_Usuario_ADM . '</td>
                <td>' . $Tipo_contacto_Usuario_ADM . '</td>
                <td>' . $Email_Usuario_ADM . '</td>
            </tr>';
        }
        echo '</table>';

        echo '<form action="RTAS_RS_ADM/rta_Registro_UA.php" method="post">
                <input type="hidden" name="sql" value="' . htmlentities($sql) . '">
                <input class="input_final" type="submit" value="DESCARGAR TABLA">
              </form>';
              
    } else {
        echo "<p>NO SE ENCONTRARON REGISTROS EN LA TABLA DE USUARIO ADM</p>";
    }

    $result->free();
    $conex->close();
    ?>
</body>
</html>
