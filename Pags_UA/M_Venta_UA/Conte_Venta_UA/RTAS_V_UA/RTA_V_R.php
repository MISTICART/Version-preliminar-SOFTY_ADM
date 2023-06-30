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
    <div class="h2">
         <h2>REGISTRO EXITOSO</h2> 
    </div>
    <?php
     include_once "../../../../Iniciar_Sesion/conexion.php";
     $n°_ventas = $_POST["n°_ventas"];
     $sql = "SELECT * FROM venta WHERE n°_ventas = $n°_ventas limit 1 ";
     echo '<table>
            <tr>
                <th> ID DE LA VENTA               </th> 
                <th> N° DE VENTA              </th>
                <th> DESCRIPCION DE LA VENTA   </th>
                <th> METODO DE PAGO DE LA VENTA   </th>
                <th> MONTO DE LA VENTA         </th>
                <th> CANTIDAD DE LA VENTA      </th>
                <th> HORA Y FECHA DE LA VENTA  </th> 
            </tr>';

    if ($RTA = $conex->query($sql)){
        while ($row = $RTA->fetch_assoc()){
            $id_venta = $row["id_venta"];
            $n°_ventas = $row["n°_ventas"];
            $descripcion_venta = $row["descripcion_venta"];
            $metodo_pago_venta = $row["metodo_pago_venta"];
            $monto_venta = $row["monto_venta"];
            $cant_vendida = $row["cant_vendida"];
            $hora_fecha_venta = $row["hora_fecha_venta"];
            echo '<tr>
                <td>' . $id_venta . '</td> 
                <td>' . $n°_ventas . '</td>
                <td>' . $descripcion_venta . '</td>
                <td>' . $metodo_pago_venta . '</td>
                <td>' . $monto_venta . '</td>
                <td>' . $cant_vendida . '</td>
                <td>' . $hora_fecha_venta . '</td>
            </tr>';
        }
         echo '<table class="table2";>
            <tr>
                <td><a href="../M_Venta_UA.html">MODIFICAR</a></td>
                <td><a href="../R_Venta_UA.html">CONTINUAR</a></td> 
                <td><a href="../E_Venta_UA.html">ELIMINAR</a></td>
            </tr>';
        $RTA->free();
    }
    ?>
    
</body>
</html>
