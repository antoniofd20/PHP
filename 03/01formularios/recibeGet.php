<?php
    # GET ENVIA TODA LA INFORMACION POR LA URL
    # METODO GET SOLO CUANDO QUEREMOS TRAER INFORMACION Y MOSTRARLA
    # NUNCA CON INFORMACION DELICADA

    #print_r($_GET);
    if(!$_GET){
        header('Location: http://localhost/cursoPHP/03/');
    }

    $nombre = $_GET['nombre'];
    $sexo = $_GET['sexo'];
    $year = $_GET['year'];
    $terminos = $_GET['terminos'];
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>RECIBE</title>
</head>
<body>
    <h1>Hola <?php echo trim($nombre); ?>, bienvenido!</h1>
    <!-- SEXO -->
    <?php
        if($sexo == 'hombre'){
    ?>
            <p>Eres un hombre que nacio en <?php echo $year; ?></p>
    <?php
        } else {
    ?>
            <p>Eres una mujer que nacio en <?php echo $year; ?></p>
    <?php
        }
    ?>

    <!-- TERMINOS -->
    <?php
        if($terminos == 'ok'){
    ?>
            <p>Gracias por aceptar los terminos</p>
    <?php
        } else {
    ?>
            <p>Deberías considerar aceptar los terminos, gracias</p>
    <?php
        }
    ?>
</body>
</html>