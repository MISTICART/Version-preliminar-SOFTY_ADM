<!DOCTYPE html>
<html>
<head>
    <title>SOFTY_ADM</title>
    <meta name="description" content="Esta es una pagina web para administracion">
    <meta name="author" content="MISTIC_ART">
    <meta name="keywords" content="administracion, pagina web para administracion,pagina web">
    <meta charset="UTF-8"> 
    <script src="https://kit.fontawesome.com/e9121b317f.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="../style.css">
</head>
<body>
<header class="header">
            <nav class="nav-one">
                <a href="inicio_ADM.html">INICIO</a>
                <a href="Ventas_ADM.html">VENTAS</a>
                <a href="Inventario_ADM.html">INVENTARIO</a>
            </nav>
            <div>
                <table class="logo-m">
                    <tr>
                        <td><img class="logo" src="../img/logo-3.0.png"></td>
                    </tr>
                </table>
            </div>  
            <nav  class="nav-two">
                <a href="Proveedor_ADM.html">PROVEEDORES</a>
                <a href="Solicitudes.php">SOLICITUDES</a>
                <a href="../Iniciar_Sesion/Ingresar.php">INGRESAR</a>
            </nav>
        </header>
    <section class="section-principal">
        <h1 class="title_soli">SOLICITUDES PENDIENTES</h1>
        <?php

        include_once "../Iniciar_Sesion/conexion.php";

        $sql= "SELECT * FROM solicitudes WHERE estado = 'Pendiente'";
        $result_solicitudes = $conex->query($sql);

        if ($result_solicitudes->num_rows > 0) {
        
            while ($row_solicitud = $result_solicitudes->fetch_assoc()) {
                $id_solicitud = $row_solicitud['id_solicitud'];
                $tipo_solicitud = $row_solicitud['tipo_solicitud'];
                $estado = $row_solicitud['estado'];
                
                echo "<div class='solicitud'>";
                echo "<p>SOLICITUD #$id_solicitud: $estado</p>";
                if ($tipo_solicitud == "Abrir Caja") {
                
                    $sql = "UPDATE cierre_final SET estado_caja = 'abierta'";
                    if ($conex->query($sql)) {
                        
                    } else {
                        echo "Error al cambiar el estado de la caja: " . $conex->error;
                    }
                }
                echo "<form class='form-soli' action='Conte_Solicitudes/rta_solicitudes.php' method='POST'>";
                echo "<input type='hidden' name='id_solicitud' value='$id_solicitud'>";
                echo "<label for='respuesta'>RESPUESTA:</label>";
                echo "<input type='text' name='respuesta'>";
                    
                echo "<input class='input_final' type='submit' value='RESPONDER'>";
                echo "</form>";
                echo "</div>";
            }
        } else {
            echo "NO HAY SOLICITUDES EN ESTE MOMENTO";
        }

        $conex->close();
        ?>

    </section>


</body>
</html>
