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
         <h2>REGISTRO EXITOSO</h2> 
    </div>
    <?php
     include_once "../../../Iniciar_Sesion/conexion.php";
     $nombre_proveedor = $_POST['nombre_proveedor'];
     $sql = "SELECT * FROM proveedor WHERE nombre_proveedor = '$nombre_proveedor' LIMIT 1";
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

    if ($RTA = $conex->query($sql)){
        while ($row = $RTA->fetch_assoc()){
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
         echo '<table class="table2";>
            <tr>
            <td><a href="../E_Proveedor_ADM.html">ELIMINAR</a></td>
            <td><a href="../R_Proveedor_ADM.html">CONTINUAR</a></td>
            <td><a href="../C_Proveedor_ADM.html">CONSULTAR</a></td>
            </tr>';
        $RTA->free();
    }
?>
</body>
</html>
