<?php
if (isset($_GET["success"])) {
    echo "Solicitud enviada correctamente. Espere a que el administrador la apruebe.";
}
?>
<!DOCTYPE html>
<html>
<head>
    <title>SOFTY_ADM</title>
    <meta name="description" content="Esta es una pagina web para administracion">
    <meta name="author" content="MISTIC_ART">
    <meta name="keywords" content="administracion, pagina web para administracion,pagina web">
    <meta charset="UTF-8"> 
    <script src="https://kit.fontawesome.com/e9121b317f.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="../../../style.css">
</head>
<body>
<header class="header">
        <nav class="nav-one">
            <a href="../../inicio_ADM.html">INICIO</a>
            <a href="../../Ventas_ADM.html">VENTAS</a>
            <a href="../../Inventario_ADM.html">INVENTARIO</a>
        </nav>
        <div>
            <table class="logo-m">
                <tr>
                    <td><img class="logo" src="../../../img/logo-3.0.png"></td>
                </tr>
            </table>
        </div>  
        <nav class="nav-two">         
            <a href="../../Proveedor_ADM.html">PROVEEDORES</a>
            <a href="../../Solicitudes.php">SOLICITUDES</a>
            <a href="../../../Iniciar_Sesion/Ingresar.php">INGRESAR</a>
        </nav>
    </header>
    <section class="section-principal">
        <h1 class="title_fi">SOLICITAR APERTURA DE CAJA</h1>
        <form class="Fsolicitud" action="RTA_CF_UA/rta_solicitud.php" method="POST">
            <label for="usuario_solicitante">NOMBRE DEL SOLICITANTE</label>
            <input class="controls" type="text" name="usuario_solicitante" id="usuario_solicitante" require><br>
            <label for="n°documento_solicitante">N° DE DOCUMENTO</label>
            <input class="controls" type="number" name="n°documento_solicitante" id="n°documento_solicitante" require><br>
            <label for="hora_fecha_solicitud">FECHA Y HORA</label>
            <input class="controls" type="datetime-local" name="hora_fecha_solicitud" id="hora_fecha_solicitud" require><br>
            <input class="controls" type="hidden" name="tipo_solicitud" value="Abrir Caja">
            <input class="input_final"type="submit" value="ENVIAR SOLICITUD">
        </form>
    </section>
    
</body>
</html>
