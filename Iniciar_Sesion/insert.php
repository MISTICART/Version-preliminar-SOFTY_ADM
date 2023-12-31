<?php
session_start();
include_once('conexion.php');

if (isset($_POST['codigo']) && isset($_POST['rol'])) {
    function validar($datos) {
        $datos = trim($datos);
        $datos = stripslashes($datos);
        $datos = htmlspecialchars($datos);
        return $datos;
    }

    $Codigo = validar($_POST['codigo']);
    $Rol = validar($_POST['rol']);

    if (empty($Codigo)) {
        header("Location: Ingresar.php?error=EL CODIGO ES REQUERIDO");
        exit();
    } elseif (empty($Rol)) {
        header("Location: Ingresar.php?error=EL ROL ES REQUERIDO");
        exit();
    } else {
        $sql = "SELECT * FROM usuarios_adm WHERE rol = '$Rol' AND COD_USUARIO_ADM ='$Codigo'";
        $result = mysqli_query($conex, $sql);

        if (mysqli_num_rows($result) === 1) {
            $row = mysqli_fetch_assoc($result);
            if ($row['rol'] === $Rol && $row['COD_USUARIO_ADM'] === $Codigo) {
                $_SESSION['codigo'] = $row['COD_USUARIO_ADM'];
                $_SESSION['rol'] = $row['rol'];

                header("Location: ../Pags_UA/inicio_UA.php");
                exit();
            }
        }

        $sql = "SELECT * FROM administrador WHERE rol = '$Rol' AND cod_administrador ='$Codigo'";
        $result = mysqli_query($conex, $sql);

        if (mysqli_num_rows($result) === 1) {
            $row = mysqli_fetch_assoc($result);
            if ($row['rol'] === $Rol && $row['cod_administrador'] === $Codigo) {
                $_SESSION['codigo'] = $row['cod_administrador'];
                $_SESSION['rol'] = $row['rol'];

                header("Location: ../Pags_ADM/inicio_ADM.html");
                exit();
            }
        }

        header("Location: Ingresar.php?error=EL CODIGO O EL ROL SON INCORRECTOS");
        exit();
    }
} else {
    header("Location: Ingresar.php");
    exit();
}
?>
