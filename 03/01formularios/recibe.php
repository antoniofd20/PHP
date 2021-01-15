<?php
    # POST NUNCA ENVIA LOS VALORES POR LA URL
    # CON EL METODO POST PODEMOS MADAR ARCHIVOS
    # INFORMACION QUE LOS USUARIOS NO DEBEN DE VER

    # print_r($_POST);
    if(!$_POST){
        header('Location: http://localhost/cursoPHP/03/');
    }

    $nombre = $_POST['nombre'];
    $sexo = $_POST['sexo'];
    $year = $_POST['year'];
    $terminos = $_POST['terminos'];

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