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

    $sql = "SELECT * FROM proveedor";
    $result = $conex->query($sql);

    if ($result && $result->num_rows > 0) {
        echo '<table>
        <tr>
            <th> ID DEL PROVEEDOR               </th> 
            <th> NOMBRE DEL PROVEEDOR           </th>
            <th> TIPO DEL PROVEEDOR             </th>
            <th> DIRECCION DEL PROVEEDOR        </th>
            <th> UBICACION DEL PROVEEDOR        </th>
            <th> CONTACTO DEL PROVEEDOR         </th>
            <th> EMAIL DEL PROVEEDOR            </th> 
        </tr>';

        while ($row = $result->fetch_assoc()) {
            $id_proveedor = $row["id_proveedor"];
            $nombre_proveedor = $row["nombre_proveedor"];
            $tipo_proveedor = $row["tipo_proveedor"];
            $direccion_proveedor = $row["direccion_proveedor"];
            $ubicacion_proveedor = $row["ubicacion_proveedor"];
            $contacto_proveedor = $row["contacto_proveedor"];
            $email_proveedor = $row["email_proveedor"];

            echo '<tr>
                <td>' . $id_proveedor         .  '</td> 
                <td>' . $nombre_proveedor     .  '</td>
                <td>' . $tipo_proveedor       .  '</td>
                <td>' . $direccion_proveedor  .  '</td>
                <td>' . $ubicacion_proveedor  .  '</td>
                <td>' . $contacto_proveedor   .  '</td>
                <td>' . $email_proveedor      .  '</td>
            </tr>';
        }

        echo '</table>';

        echo '<form action="RTAS_RS_ADM/rta_Registro_Prov.php" method="post">
                <input type="hidden" name="sql" value="' . htmlentities($sql) . '">
                <input class="input_final" type="submit" value="DESCARGAR TABLA">
              </form>';
    } else {
        echo "<p>NO SE ENCONTRARON REGISTROS EN LA TABLA DE PROVEEDORES</p>";
    }

    $result->free();
    $conex->close();
    ?>
</body>
</html>
