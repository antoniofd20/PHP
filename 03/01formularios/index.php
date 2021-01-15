<?php

    if($_POST){
        $nombre = $_POST['nombre'];
        echo $nombre;
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>FORMULARIOS</title>
</head>
<body>
<!--
    <form action="recibe.php" method="POST">
    <form action="recibeGet.php" method="GET">
-->
    <!-- TAMBIEN SE PUEDE ENVIAR AL MISMO DOCUMENTO action="index.php" -->
    <form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>" method="POST"></form>
        <label for="nombre">Nombre:</label>
        <input type="text" placeholder="Nombre:" name="nombre" id="nombre">
        <br/>

        <label for="hombre">Hombre:</label>
        <input type="radio" name="sexo" value="hombre" id="hombre">
        <label for="mujer">Mujer:</label>
        <input type="radio" name="sexo" value="mujer" id="mujer">
        <br/>

        <select name="year" id="year">
        <?php 
            for($i = 1970; $i <= 2002; $i++){
        ?>
                <option value="<?php echo $i; ?>"><?php echo $i; ?></option>
        <?php
            }
        ?>  
        </select>
        <br/>

        <label for="terminos">¿Aceptas los terminos?</label>
        <input type="checkbox" name="terminos" id="terminos" value="ok">

        

        <input type="submit" value="Enviar">
    </form>
</body>
</html>