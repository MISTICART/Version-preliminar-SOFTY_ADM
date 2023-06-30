<!DOCTYPE html>
<html lang="en">
<head>
<title>SOFTY_ADM</title>
    <meta name="description" content="Esta es una pagina web para administracion">
    <meta name="author" content="MISTIC_ART">
    <meta name="keywords" content="administracion, pagina web para administracion,pagina web">
    <meta charset="UTF-8"> 
    <script src="https://kit.fontawesome.com/e9121b317f.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="../../Pags_UA/style_rtas.css">
</head>
<body>
    
<?php

$respuesta = $_POST['respuesta'];

$sql = "INSERT INTO solicitudes
(respuesta) VALUES 
('$respuesta');";

echo '<table>
<tr>
    <td><a href="../Ventas_ADM.html">CONTINUAR</a></td> 
</tr>';
?>





</body>
</html>
