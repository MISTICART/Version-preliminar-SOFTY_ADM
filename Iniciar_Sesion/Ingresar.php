<!DOCTYPE html>
<html lang="en">
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
        <nav class="nav_index1">
            <a href="../index.php">INICIO</a>
        </nav>
        <nav class="nav_index2">
            <a href="../nosotros_public.html">NOSOTROS</a>
        </nav>
        <nav  class="nav_index3">
            <a href="#">INGRESAR</a>
        </nav>
    </header>
    <article class="article-login">
        <div class="title-index2">
            <h2 class="title-bien">BIENVENID@</h2>    
        </div>
        <?php
            if (isset($_GET['error'])) {
            ?>
            <p class="error">
                <?php
                echo $_GET['error'];
                ?>
            </p>    
        <?php
            }
        ?>
        <form class="form-login" action="insert.php" method="POST" >
            <label for="codigo">DIGITE EL CODIGO.</label>
            <input class="controls" type="password" id="codigo" name="codigo">
            <div class="form-group">
               <label for="rol"> SELECCIONE EL ROL AL QUE PERTENECE. </label>
            <select id="rol" name="rol">
                <option class="option" value=""></option>
                <option class="option" value="usuario_adm">USUARIO_ADM</option>
                <option class="option" value="administrador">ADMINISTRADOR</option>
            </select><br> 
            </div>
            <input class="input_final" type="submit" value="INGRESAR">
        </form>
    </article>
</body>
</html>