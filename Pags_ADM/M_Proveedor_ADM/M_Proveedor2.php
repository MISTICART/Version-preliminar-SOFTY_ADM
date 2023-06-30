<!DOCTYPE html>
<html lang="en">
<head>
    <title>SOFTY_ADM</title>
    <meta name="description" content="Esta es una pagina web para administracion">
    <meta name="author" content="MISTIC_ART">
    <meta name="keywords" content="administracion, pagina web para administracion,pagina web">
    <meta charset="UTF-8"> 
    <script src="https://kit.fontawesome.com/e9121b317f.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="../../style.css">
</head>
<body>
    <header class="header">
        <nav class="nav-one">
            <a href="../inicio_ADM.html">INICIO</a>
            <a href="../Ventas_ADM.html">VENTAS</a>
            <a href="../Inventario_ADM.html">INVENTARIO</a>
        </nav>
        <div>
            <table class="logo-m">
                <tr>
                    <td><img class="logo" src="../../img/logo-3.0.png"></td>
                </tr>
            </table>
        </div>  
        <nav class="nav-two">         
            <a href="../Proveedor_ADM.html">PROVEEDORES</a>
            <a href="../Solicitudes.php">SOLICITUDES</a>
            <a href="../Iniciar_Sesion/Ingresar.php">INGRESAR</a>
        </nav>
    </header>
    <section class="section-principal">
        <h2 class="title_fi">MODIFICANDO PROVEEDOR... </h2><br>
        <?php 
            $id_proveedor = $_POST['id_proveedor']; 
            $nombre_proveedor = $_POST['nombre_proveedor']; 
        ?>
        <form class="form-venta" action="RTA_P_ADM/RTA_M_P.php" method="post">
            <label for="id_proveedor">ID DEL PROVEEDOR.</label>
            <input class="controls" type="number" id="id_proveedor" name="id_proveedor" required>
            <label for="nombre_proveedor">NOMBRE DEL PROVEEDOR.</label>
            <input class="controls" type="text" id="nombre_proveedor" name="nombre_proveedor" required>
            <label for="direccion_proveedor">DIRECCION DEL PROVEEDOR.</label>
            <input class="controls" type="text" id="direccion_proveedor" name="direccion_proveedor" required>
            <label for="ubicacion_proveedor">UBICACION DEL PROVEEDOR.</label>
            <input class="controls" type="text" id="ubicacion_proveedor" name="ubicacion_proveedor" required>
            <label for="contacto_proveedor">CONTACTO DEL PROVEEDOR.</label>
            <input class="controls" type="number" id="contacto_proveedor" name="contacto_proveedor" required>
            <label for="email_proveedor">EMAIL DEL PROVEEDOR.</label>
            <input class="controls" type="text" id="email_proveedor" name="email_proveedor" required>
            <label for="tipo_proveedor">TIPO DE PROVEEDOR.</label>
            <input class="controls" type="text" id="tipo_proveedor" name="tipo_proveedor" required>
            
            <input class="input_final" type="submit" value="MODIFICAR">
        </form>
        
    </section>
</body>
</html>