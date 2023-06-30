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
         <h2>MODIFICACION EXITOSA</h2> 
    </div>
    <?php
    include_once "../../../Iniciar_Sesion/conexion.php";
    
    $id_proveedor = $_POST['id_proveedor']; 
       
    $sql = "SELECT * FROM proveedor WHERE id_proveedor = '$id_proveedor' ";
    $RTA = $conex->query($sql);

    if ($RTA->num_rows > 0) {
        $row = $RTA->fetch_assoc();
        $id_proveedor = $row["id_proveedor"];
        $nombre_proveedor = $row["nombre_proveedor"];
        $direccion_proveedor = $row["direccion_proveedor"];
        $ubicacion_proveedor = $row["ubicacion_proveedor"];
        $contacto_proveedor = $row["contacto_proveedor"];
        $email_proveedor = $row["email_proveedor"];
        $tipo_proveedor = $row["tipo_proveedor"];
    } else {
        echo "Proveedor no encontrado";
    }

    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        $id_proveedor = $_POST["id_proveedor"];
        $nombre_proveedor = $_POST["nombre_proveedor"];
        $direccion_proveedor = $_POST["direccion_proveedor"];
        $ubicacion_proveedor = $_POST["ubicacion_proveedor"];
        $contacto_proveedor = $_POST["contacto_proveedor"];
        $email_proveedor = $_POST["email_proveedor"];
        $tipo_proveedor = $_POST["tipo_proveedor"];

        $sql = "UPDATE proveedor SET id_proveedor='$id_proveedor',nombre_proveedor='$nombre_proveedor', direccion_proveedor = '$direccion_proveedor', ubicacion_proveedor = '$ubicacion_proveedor', contacto_proveedor = '$contacto_proveedor', 
        email_proveedor = '$email_proveedor', tipo_proveedor = '$tipo_proveedor' WHERE id_proveedor = '$id_proveedor'";

        if ($conex->query($sql) === TRUE) {
            
        } else {
            echo "ERROR AL ACTUALIZAR EL PROVEEDOR: " . $conex->error;
        }
    }
    $conex->close();
    ?>
    
    <form method="POST" action="../M_Proveedor_ADM.html">
        <label for="nombre_proveedor">NOMBRE DEL PROVEEDOR</label><br>
        <input class="controls" type="text" id="nombre_proveedor" name="nombre_proveedor" value="<?php echo $nombre_proveedor; ?>" ><br>
        <label for="direccion_proveedor">DIRECCION DEL PROVEEDOR</label><br>
        <input class="controls" type="text" id="direccion_proveedor" name="direccion_proveedor" value="<?php echo $direccion_proveedor; ?>" ><br>
        <label for="ubicacion_proveedor">UBICACION DEL PROVEEDOR</label><br>
        <input class="controls" type="text" id="ubicacion_proveedor" name="ubicacion_proveedor" value="<?php echo $ubicacion_proveedor; ?>"><br>
        <label for="contacto_proveedor">CONTACTO DEL PROVEEDOR.</label><br>
        <input class="controls" type="number" id="contacto_proveedor" name="contacto_proveedor" value="<?php echo $contacto_proveedor; ?>" ><br>
        <label for="email_proveedor">EMAIL DEL PROVEEDOR.</label><br>
        <input class="controls" type="text" id="email_proveedor" name="email_proveedor" value="<?php echo $email_proveedor; ?>" required><br>
        <label for="tipo_proveedor">TIPO DE PROVEEDOR.</label><br>
        <input class="controls" type="text" id="tipo_proveedor_input" name="tipo_proveedor" value="<?php echo $tipo_proveedor; ?>" required><br>
        
        <input class="input_final" type="submit" name="update" value="CONTINUAR" onclick="location.href='../M_Proveedor_ADM.html'">
    </form>
</body>
</html>
