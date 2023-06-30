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
         <h2>PROVEEDOR ELIMINADO CON EXITO</h2> 
    </div>

    <?php
     include_once "../../../Iniciar_Sesion/conexion.php";
    $id_proveedor = $_POST['id_proveedor'];
    $sql = "DELETE FROM proveedor WHERE id_proveedor = '$id_proveedor' ";
    
     if ($conex->query($sql) === TRUE) {
         
     } else {
         echo "Error al eliminar el proveedor: " . $conex->error;
     }
     
     echo'<table class="table2";>
        <tr>
            <th><a href="../E_Proveedor_ADM.html">CONTINUAR</a></th>
        </tr>';

     $conex->close();
    ?>
</body>