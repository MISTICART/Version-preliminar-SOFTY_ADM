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
    
        if (isset($_POST['id_cliente'])) {
        $id_cliente = $_POST['id_cliente'];
            
     include_once "../../../../Iniciar_Sesion/conexion.php";
    
     $sql = "SELECT * FROM cliente WHERE id_cliente = $id_cliente LIMIT 1";
     $result = $conex->query($sql);
     echo '<table>
            <tr>
                <th> ID CLIENTE                    </th> 
                <th> N° CLIENTE REGISTRADO         </th>
                <th> NOMBRE CLIENTE                </th>
                <th> TIPO CLIENTE                  </th>
                <th> DESCRIPCION CLIENTE           </th>
                <th> DIRECCION CLIENTE             </th>
                <th> UBICACION CLIENTE             </th>
                <th> CONTACTO CLIENTE              </th>
                <th> EMAIL CLIENTE                 </th>
                <th> TIPO DE CONTACTO DEL CLIENTE  </th> 
        
            </tr>';

        if ($result && $result->num_rows > 0) {
            $row = $result->fetch_assoc();
            $id_cliente = $row["id_cliente"];
            $n°_cliente_reg = $row["n°_cliente_reg"];
            $nombre_cliente = $row["nombre_cliente"];
            $tipo_cliente = $row["tipo_cliente"];
            $descripcion_cliente = $row["descripcion_cliente"];
            $direccion_cliente = $row["direccion_cliente"];
            $ubicacion_cliente = $row["ubicacion_cliente"];
            $contacto_cliente = $row["contacto_cliente"];
            $email_cliente = $row["email_cliente"];
            $tipo_contacto_cliente = $row["tipo_contacto_cliente"];
            echo '<tr>
                    <td>' . $id_cliente . '</td> 
                    <td>' . $n°_cliente_reg . '</td>
                    <td>' . $nombre_cliente . '</td>
                    <td>' . $tipo_cliente . '</td>
                    <td>' . $descripcion_cliente . '</td>
                    <td>' . $direccion_cliente . '</td>
                    <td>' . $ubicacion_cliente . '</td>
                    <td>' . $contacto_cliente . '</td>
                    <td>' . $email_cliente . '</td>
                    <td>' . $tipo_contacto_cliente . '</td>
            </tr>';
        }
        echo '<table class="table2";>
            <tr>
                    <th><a href="../M_Cliente_UA.html?id=' . $id_cliente . '">MODIFICAR</a></th>
                    <th><a href="../R_Cliente_UA.html">CONTINUAR</a></th> 
                    <th><a href="../E_Cliente_UA.html?id=' . $id_cliente . '">ELIMINAR</a></th>
            </tr>';
        $result->free();
        $conex->close();
    }else{
        echo "<p>No se proporcionó el ID del cliente</p>";
    }
}
    ?>
    
</body>
</html>