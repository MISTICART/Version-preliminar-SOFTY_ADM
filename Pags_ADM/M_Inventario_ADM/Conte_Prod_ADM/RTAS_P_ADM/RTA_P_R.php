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
         <h2>REGISTRO EXITOSO</h2> 
    </div>
    <?php
     include_once "../../../../Iniciar_Sesion/conexion.php";
     $nombre_p = $_POST["nombre_p"];
     $sql = "SELECT * FROM producto WHERE nombre_p = '$nombre_p' LIMIT 1";
     echo '<table>
            <tr>
                <th>   ID Producto           </th> 
                <th>   Nombre Producto       </th>
                <th>   Estado Producto       </th>
                <th>   Precio Producto       </th>
                <th>   Descripcion Producto  </th>
                <th>   Unidad Producto       </th>
                <th>   Numero Paquetes       </th>
                <th>   Cajas Producto        </th>
        </tr>';
  
        if ($RTA = $conex->query($sql)){
            while ($row = $RTA->fetch_assoc()){
                $id_producto = $row["id_producto"];
                $nombre_p = $row["nombre_p"];
                $estado_p = $row["estado_p"];
                $precio_p = $row["precio_p"];
                $descripcion_p = $row["descripcion_p"];
                $unidad_p = $row["unidad_p"];
                $n_paquetes = $row["n_paquetes"];
                $n_cajas_p = $row["n_cajas_p"];
                echo '<tr>
                  <td>'  . $id_producto   . '</td> 
                  <td>'  . $nombre_p      . '</td>
                  <td>'  . $estado_p      . '</td>
                  <td>'  . $precio_p      . '</td>
                  <td>'  . $descripcion_p . '</td>
                  <td>'  . $unidad_p      . '</td>
                  <td>'  . $n_paquetes    . '</td>
                  <td>'  . $n_cajas_p     . '</td>
                </tr>';
            }
    echo '<table class="table2";>
            <tr>
                <th><a href="../M_Producto.html">MODIFICAR</a></th> 
                <th><a href="../R_Producto.html">CONTINUAR</a></th> 
                <th><a href="../E_Producto.html">ELIMINAR</a></th> 
            </tr>
        </table>';
    $RTA->free();
   }
?>
    
</body>
</html>
