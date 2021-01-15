<?php

    $errores = '';

    # SI ESTA SETEADA SIGNIFICA QUE EL USUARIO YA ENVIO EL FORMULARIO
    if(isset($_POST['submit'])) {
        $nombre = $_POST['nombre'];
        $email = $_POST['email'];

        if(!empty($nombre)){
            # QUITAMOS ESPACIOS AL PRINCIPIO Y AL FINAL 
            #$nombre = trim($nombre);
            # QUITAMOS CARACTERES ESPECIALES HTML
            #$nombre = htmlspecialchars($nombre);
            # QUITAMOS DIAGONALES INVERTIDAS
            #$nombre = stripcslashes($nombre);

            # ESTE FILTRO SANITIZA LA CADENA DE TEXTO Y QUITA TODOS LOS SIMBOLOS QUE PUDIERAN SER CODIGO
            $nombre = filter_var($nombre, FILTER_SANITIZE_STRING);

            echo "Tu nombre es $nombre";
        } else {
            $errores .= 'Por favor agrega un nombre <br/>';
        }

        if(!empty($email)){
            $email = filter_var($email, FILTER_SANITIZE_EMAIL);

            if(!filter_var($correo, FILTER_SANITIZE_EMAIL)) {
                $errores .= 'Por favor ingresa un correo valido';
            } else {
                echo "Tu correo es: $email";
            }

        } else {
            $errores .= 'Por favor agrega un correo';
        }
    }

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>VALIDA ENVIO</title>
    <style>
        .error {
            color: red;
        }
    </style>
</head>
<body>
    <form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>" method="POST">
        <input type="text" name="nombre" placeholder="Nombre:">
        <input type="text" name="email" placeholder="usuario@email.com">

        <?php if(!empty($errores)): ?>
            <div class="error"><?php echo $errores; ?></div>
        <?php endif ?>

        <input type="submit" name="submit">
    </form>
</body>
</html>