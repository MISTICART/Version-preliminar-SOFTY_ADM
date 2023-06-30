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

    $sql = "SELECT * FROM cliente";
    $result = $conex->query($sql);

    if ($result && $result->num_rows > 0) {
        echo '<table>
        <tr>
            <th> ID CLIENTE                    </th> 
            <th> N° CLIENTE REGISTRADO         </th>
            <th> NOMBRE CLIENTE                </th>
            <th> DIRECCION CLIENTE             </th>
            <th> UBICACION CLIENTE             </th>
            <th> CONTACTO CLIENTE              </th>
            <th> EMAIL CLIENTE                 </th>
            <th> TIPO DE CONTACTO DEL CLIENTE  </th> 
    
        </tr>';

        while ($row = $result->fetch_assoc()) {
            $id_cliente = $row["id_cliente"];
            $n°_cliente_reg = $row["n°_cliente_reg"];
            $nombre_cliente = $row["nombre_cliente"];
            $direccion_cliente = $row["direccion_cliente"];
            $ubicacion_cliente = $row["ubicacion_cliente"];
            $contacto_cliente = $row["contacto_cliente"];
            $email_cliente = $row["email_cliente"];
            $tipo_contacto_cliente = $row["tipo_contacto_cliente"];
            echo '<tr>
                    <td>' . $id_cliente . '</td> 
                    <td>' . $n°_cliente_reg . '</td>
                    <td>' . $nombre_cliente . '</td>
                    <td>' . $direccion_cliente . '</td>
                    <td>' . $ubicacion_cliente . '</td>
                    <td>' . $contacto_cliente . '</td>
                    <td>' . $email_cliente . '</td>
                    <td>' . $tipo_contacto_cliente . '</td>
            </tr>';
        }

        echo '</table>';

        echo '<form action="RTAS_RS_ADM/rta_Registro_C.php" method="post">
                <input type="hidden" name="sql" value="' . htmlentities($sql) . '">
                <input class="input_final" type="submit" value="DESCARGAR TABLA">
              </form>';
    } else {
        echo "<p>NO SE ENCONTRARON REGISTROS EN LA TABLA DE CLIENTES</p>";
    }

    $result->free();
    $conex->close();
    ?>
</body>
</html>
