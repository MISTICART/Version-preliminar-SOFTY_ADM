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
         <h2>REPORTE REGISTRADO EXITOSAMENTE</h2> 
    </div>
    <?php
     include_once "../../../../Iniciar_Sesion/conexion.php";
    
     $sql = "SELECT * FROM reporte WHERE id_reporte = $id_reporte LIMIT 1";
     echo '<table>
            <tr>
                <th> ID REPORTE               </th> 
                <th> TITULO REPORTE           </th>
                <th> DESCRIPCION REPORTE      </th>
                <th> HORA Y FECHA DEL REPORTE </th>
                <th> TIPO DE REPORTE          </th>
                <th> PRIORIDAD DEL REPORTE    </th>
            </tr>';

    if ($RTA = $conex->query($sql)){
        while ($row = $RTA->fetch_assoc()){
            $id_reporte = $row["id_reporte"];
            $titulo = $row["titulo"];
            $desc_reporte = $row["desc_reporte"];
            $hora_fecha_reporte = $row["hora_fecha_reporte"];
            $tipo_reporte = $row["tipo_reporte"];
            $prioridad = $row["prioridad"];
            
            echo '<tr>
                <td>' . $id_reporte .         '</td> 
                <td>' . $titulo .             '</td>
                <td>' . $desc_reporte .       '</td>
                <td>' . $hora_fecha_reporte . '</td>
                <td>' . $tipo_reporte .       '</td>
                <td>' . $prioridad .          '</td>
            </tr>';
        }
    echo '<table class="table2";>
        <tr>
            <td><a href="../R_Reporte.html">CONTINUAR</a></td> 
            <td><a href="../E_Reporte.html?id=' . $id_reporte . '">ELIMINAR</a></td>
        </tr>';

        $RTA->free();
    }
    ?>
    
</body>
</html>
