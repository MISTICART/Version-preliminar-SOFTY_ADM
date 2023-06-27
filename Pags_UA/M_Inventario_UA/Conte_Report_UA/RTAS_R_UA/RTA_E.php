<!DOCTYPE html>
<html lang="en">
<head>
    <title>SOFTY_ADM</title>
    <meta name="description" content="Esta es una pagina web para administracion">
    <meta name="author" content="MISTIC_ART">
    <meta name="keywords" content="administracion, pagina web para administracion,pagina web">
    <meta charset="UTF-8"> 
    <script src="https://kit.fontawesome.com/e9121b317f.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="../../style_rtas.css">
</head>
<body>
<div class="h2">
         <h2>REPORTE ELIMINADO CON EXITO</h2> 
    </div>
    <?php
     include_once "../../../../Iniciar_Sesion/conexion.php";
     
     $id_reporte = $_POST['id_reporte'];
     
     $sql = "DELETE FROM reporte WHERE id_reporte = $id_reporte";
     
     if ($conex->query($sql) === TRUE) {
         
     } else {
         echo "Error al eliminar el producto: " . $conex->error;
     }
     
        echo '<table class="table2";>
            <tr>
                <th><a href="../E_Reporte.html">CONTINUAR</a></th> 
            </tr>';
     

     $conex->close();
    ?>
     
</body>
</html>
