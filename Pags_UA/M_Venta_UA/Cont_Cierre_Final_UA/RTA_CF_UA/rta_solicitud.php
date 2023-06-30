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
    
<?php
include_once "../../../../Iniciar_Sesion/conexion.php";

$hora_fecha_solicitud  = $_POST["hora_fecha_solicitud"];
$usuario_solicitante  = $_POST["usuario_solicitante"];
$n°documento_solicitante  = $_POST["n°documento_solicitante"];
$tipo_solicitud = $_POST["tipo_solicitud"];

$sql = "INSERT INTO solicitudes
(estado,hora_fecha_solicitud,usuario_solicitante,n°documento_solicitante,tipo_solicitud) VALUES 
(('Pendiente'),'$hora_fecha_solicitud','$usuario_solicitante','$n°documento_solicitante','$tipo_solicitud');";



if ($conex->query($sql)) {
   
    echo '<div class="solicitud">' . 'SOLICITUD ENVIADA CON EXITO' . '</div>';
    echo '<table class="table2";>
            <tr>
                <td><a href="../../../Ventas_UA.html">CONTINUAR</a></td> 
            </tr>';

    exit();
} else {
    echo "Error al procesar la solicitud: " . $conex->error;
    $conex->close();
    exit();
}
?>

</body>
</html>

