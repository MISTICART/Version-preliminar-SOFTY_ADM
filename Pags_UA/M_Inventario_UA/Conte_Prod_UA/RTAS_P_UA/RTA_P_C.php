<!DOCTYPE html>
<html lang="en">
<head>
    <title>SOFTY_ADM</title>
    <meta name="description" content="Esta es una pagina web para administracion">
    <meta name="author" content="MISTIC_ART">
    <meta name="keywords" content="administracion, pagina web para administracion,pagina web">
    <meta charset="UTF-8"> 
    <script src="https://kit.fontawesome.com/e9121b317f.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="../../../style_rtas.css">
</head>
<body>
    <div class="h2">
         <h2>CONSULTA EXITOSA</h2> 
    </div>
    <?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    
    if (isset($_POST['id_producto'])) {
        $id_producto = $_POST['id_producto'];
        
    
        include_once "../../../../Iniciar_Sesion/conexion.php";
        

        $sql = "SELECT * FROM producto WHERE id_producto = $id_producto LIMIT 1";
        $result = $conex->query($sql);
        echo '<table>
            <tr>
                <th>ID Producto</th> 
                <th>Nombre Producto</th>
                <th>Estado Producto</th>
                <th>Precio Producto</th>
                <th>Descripcion Producto</th>
                <th>Unidad Producto</th>
                <th>Numero Paquetes</th>
                <th>Cajas Producto</th>
        </tr>';
        if ($result && $result->num_rows > 0) {
            $row = $result->fetch_assoc();
            $id_producto = $row["id_producto"];
            $nombre_p = $row["nombre_p"];
            $estado_p = $row["estado_p"];
            $precio_p = $row["precio_p"];
            $descripcion_p = $row["descripcion_p"];
            $unidad_p = $row["unidad_p"];
            $n_paquetes = $row["n_paquetes"];
            $n_cajas_p = $row["n_cajas_p"];
            echo '<tr>
              <td>' . $id_producto . '</td> 
              <td>' . $nombre_p . '</td>
              <td>' . $estado_p . '</td>
              <td>' . $precio_p . '</td>
              <td>' . $descripcion_p . '</td>
              <td>' . $unidad_p . '</td>
              <td>' . $n_paquetes . '</td>
              <td>' . $n_cajas_p . '</td>
            </tr>';
        } else {
            echo "<p>No se encontró el producto con el ID: $id_producto</p>";
        }
        echo '<table class="table2";>
        <tr>
            <th><a href="../M_Producto.html?id=' . $id_producto . '">MODIFICAR</a></th> 
            <th><a href="../C_Producto.html">CONTINUAR</a></th> 
            <th><a href="../E_Producto.html?id=' . $id_producto . '">ELIMINAR</a></th> 
        </tr>';
      
        $result->free();
        $conex->close();
    } else {
    
        echo "<p>No se proporcionó el ID del producto</p>";
    }
}
?>

</body>
</html>
