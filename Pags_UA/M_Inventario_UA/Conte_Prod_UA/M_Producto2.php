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
            <a href="../../inicio_UA.php">INICIO</a>
            <a href="../../Ventas_UA.html">VENTAS</a>
            <a href="../../Inventario_UA.html">INVENTARIO</a>
        </nav>
        <div>
            <table class="logo-m">
                <tr>
                    <td><img class="logo" src="../../../img/logo-3.0.png"></td>
                </tr>
            </table>
        </div>  
        <nav class="nav-two">         
            <a href="../../Proveedor_UA.html">PROVEEDORES</a>
            <a href="../../../Iniciar_Sesion/Ingresar.php">INGRESAR</a>
            <a href="../../Nosotros.html">NOSOTROS</a>
        </nav>
    </header>
    <section class="section-principal">
        <div class="h2">
            <h2>MODIFICANDO...</h2>  
        </div> <br>
        <form class="form-modificar" action="RTAS_P_UA/RTA_P_M.php" method="POST">
            <label for="nombre_p">NOMBRE DEL PRODUCTO.</label>
            <input class="controls" type="text" id="nombre_p" name="nombre_p" required>
            <label for="estado_p">ESTADO DEL PRODUCTO.</label>
            <input class="controls" type="text" id="estado_p" name="estado_p" required>
            <label for="precio_p">PRECIO DEL PRODUCTO.</label>
            <input class="controls" type=" text" id="precio_p" name="precio_p" required> 
            <label for="descripcion_p">DESCRIPCION DEL PRODUCTO.</label>
            <input class="controls" type="text" id="descripcion_p" name="descripcion_p"> 
            <label for="unidad_p">UNIDADES DEL PRODUCTO.</label>
            <input class="controls" type="number" id="unidad_p" name="unidad_p" required>
            <label for="n_paquetes">PAQUETES DEL PRODUCTO.</label>
            <input class="controls" type="number" id="n_paquetes" name="n_paquetes" required>
            <label for="n_cajas_p">CAJAS DEL PRODUCTO.</label>
            <input class="controls" type="number" id="n_cajas_p" name="n_cajas_p" >
            
            <input class="input_final" type="submit" value="MODIFICAR">
        </form>
    </section>
</body>
</html>