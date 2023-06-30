<!DOCTYPE html>
<html lang="en">
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
        <div class="h2">
            <h2>MODIFICANDO...</h2>  
        </div> <br>
        <?php 
            $id_venta = $_POST['id_venta']; 
            $n°_ventas = $_POST['n°_ventas']; 
        ?>
        <form class="form-modificar" action="../Conte_Venta_ADM/RTAS_V_ADM/RTA_V_M.php" method="POST">

            <label for="id_venta">ID DE LA VENTA.</label>
            <input class="controls" type="number" id="id_venta" name="id_venta" placeholder="<?php echo $id_venta; ?>" required>
            <label for="n°_ventas">N° DE VENTA.</label>
            <input class="controls" type="number" id="n°_ventas" name="n°_ventas" placeholder="<?php echo $n°_ventas; ?>" required>
            <label for="descripcion_venta">DESCRIPCION DE VENTA.</label>
            <textarea class="textarea" id="descripcion_venta" name="descripcion_venta" required></textarea>
            <label for="metodo_pago_venta">METODO PAGO DE VENTA.</label>
            <input class="controls" type="text" id="metodo_pago_venta" name="metodo_pago_venta" required>
            <label for="monto_venta">MONTO DE VENTA.</label>
            <input class="controls" type="number" id="monto_venta" name="monto_venta" required>
            <label for="cant_vendida">CANTIDAD DE VENTA.</label>
            <input class="controls" type="number" id="cant_vendida" name="cant_vendida" required>
            <label for="hora_fecha_venta">HORA Y FECHA DE VENTA .</label>
            <input class="controls" type="datetime-local" id="hora_fecha_venta" name="hora_fecha_venta" required>
            <input class="input_final" type="submit" value="MODIFICAR">
        </form>
    </section>
</body>
</html>