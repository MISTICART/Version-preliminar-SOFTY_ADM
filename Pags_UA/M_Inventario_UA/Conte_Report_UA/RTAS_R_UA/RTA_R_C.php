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
         <h2>CONSULTA EXITOSA</h2> 
    </div>
    <?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    
    if (isset($_POST['id_reporte'])) {
        $id_reporte = $_POST['id_reporte'];
        
    
        include_once "../../../../Iniciar_Sesion/conexion.php";
        

        $sql = "SELECT * FROM reporte WHERE id_reporte = $id_reporte LIMIT 1";
        $result = $conex->query($sql);
        echo '<table class="table1";>
        <tr>
            <th>ID DEL REPORTE</th> 
            <th>TITULO DEL REPORTE</th>
            <th>DESCRIPCION DEL REPORTE </th>
            <th>HORA Y FECHA DEL REPORTE</th>
            <th>TIPO DE REPORTE</th>
            <th>PRIORIDAD DEL REPORTE</th>
    </tr>';
        if ($result && $result->num_rows > 0) {
            $row = $result->fetch_assoc();
            $id_reporte = $row["id_reporte"];
            $titulo = $row["titulo"];
            $desc_reporte = $row["desc_reporte"];
            $hora_fecha_reporte = $row["hora_fecha_reporte"];
            $tipo_reporte = $row["tipo_reporte"];
            $prioridad = $row["prioridad"];
            
            echo '<tr>
                <td>' . $id_reporte .    '</td> 
                <td>' . $titulo .        '</td>
                <td>' . $desc_reporte . '</td>
                <td>' . $hora_fecha_reporte . '</td>
                <td>' . $tipo_reporte . '</td>
                <td>' . $prioridad .     '</td>
            </tr>';
        } else {
            echo "<p>No se encontró el reporte con el ID: $id_reporte</p>";
        }
        echo '<table class="table2";>
        <tr>
            <th><a href="../C_Reporte.html">CONTINUAR</a></th> 
            <th><a href="../E_Reporte.html?id=' . $id_reporte . '">ELIMINAR</a></th> 
        </tr>';
      
        $result->free();
        $conex->close();
    } else {
    
        echo "<p>No se proporcionó el ID del producto</p>";
    }
}
?>

</body>
</html>
