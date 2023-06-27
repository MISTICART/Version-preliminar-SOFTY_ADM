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
         <h2>MODIFICACION EXITOSA</h2> 
    </div>
    <?php
     include_once "../../../../Iniciar_Sesion/conexion.php";
     
     $nombre_p = $_POST['nombre_p']; 

     $sql = "SELECT * FROM producto WHERE nombre_p = '$nombre_p' LIMIT 1";
     $RTA = $conex->query($sql);

     if ($RTA->num_rows > 0) {
        $row = $RTA->fetch_assoc();
        $nombre_p = $row["nombre_p"];
        $estado_p = $row["estado_p"];
        $precio_p = $row["precio_p"];
        $descripcion_p = $row["descripcion_p"];
        $unidad_p = $row["unidad_p"];
        $n_paquetes = $row["n_paquetes"];
        $n_cajas_p = $row["n_cajas_p"];
    } else {
        echo "Producto no encontrado";
    }
    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        $nombre_p = $_POST["nombre_p"];
        $estado_p = $_POST["estado_p"];
        $precio_p = $_POST["precio_p"];
        $descripcion_p = $_POST["descripcion_p"];
        $unidad_p = $_POST["unidad_p"];
        $n_paquetes = $_POST["n_paquetes"];
        $n_cajas_p = $_POST["n_cajas_p"];

        $sql = "UPDATE producto SET estado_p ='$estado_p', precio_p ='$precio_p', descripcion_p = '$descripcion_p', unidad_p = '$unidad_p', n_paquetes = '$n_paquetes', n_cajas_p = '$n_cajas_p' WHERE nombre_p = '$nombre_p'";

        if ($conex->query($sql) === TRUE) {
            
        } else {
            echo "ERROR AL ACTUALIZAR EL PRODUCTO";
             $conex->error;
        }
    }
    $conex->close();
    ?>
    <form method="POST" action="../M_Producto.html">
        <label for="nombre">NOMBRE</label><br>
        <input class="controls" type="text" id="nombre" name="nombre_p" value="<?php echo $nombre_p; ?>"><br>
        <label for="estado">ESTADO</label><br>
        <input class="controls" type="text" id="estado" name="estado_p" value="<?php echo $estado_p; ?>"><br>
        <label for="precio">PRECIO</label><br>
        <input class="controls" type="text" id="precio" name="precio_p" value="<?php echo $precio_p; ?>"><br>
        <label for="descripcion">DESCRIPCION</label><br>
        <input class="controls" type="text" id="descripcion" name="descripcion_p" value="<?php echo $descripcion_p; ?>"><br>
        <label for="unidad">UNIDAD</label><br>
        <input class="controls" type="text" id="unidad" name="unidad_p" value="<?php echo $unidad_p; ?>"><br>
        <label for="n_paquetes">NUMERO DE PAQUTES</label><br>
        <input class="controls" type="text" id="n_paquetes" name="n_paquetes" value="<?php echo $n_paquetes; ?>"><br>
        <label for="n_cajas_p">NUMERO DE CAJAS</label><br>
        <input class="controls" type="text" id="n_cajas_p" name="n_cajas_p" value="<?php echo $n_cajas_p; ?>"><br><br>

        <input  class="input_final" type="submit" value="CONTINUAR" onclick="location.href='../M_Producto.html'">
    </form>
</body>
</html>
