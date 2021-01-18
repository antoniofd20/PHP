<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- ESTILOS CSS -->
    <link rel="stylesheet" href="styles.css">

    <!-- FUENTES -->
    <link rel="preconnect" href="https://fonts.gstatic.com">
<link href="https://fonts.googleapis.com/css2?family=PT+Sans:ital@1&display=swap" rel="stylesheet">
    <title>FORMULARIO CONTACTO</title>
</head>
<body>
    <div class="wrap">
        <form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>" method="POST">
            <!-- INPUT PARA EL NOMBRE -->
            <input type="text" class="form-contol" name="nombre" placeholder="Nombre:" id="nombre" value="<?php 
           if(!$enviado && isset($nombre)) echo $nombre; ?>">
            <!-- INPUT PARA EL CORREO -->
            <input type="text" class="form-contol" name="correo" placeholder="Correo electronico:" id="correo" value="<?php 
           if(!$enviado && isset($correo)) echo $correo; ?>">
            <!-- AREA DE COMENTARIOS -->
            <textarea name="mensaje" class="form-control" id="mensaje" placeholder="Mensaje..."><?php 
           if(!$enviado && isset($mensaje)) echo $mensaje; ?></textarea>

            <!-- MENSAJE DE ERROR -->
            <?php if(!empty($errores)):  ?>
                <div class="alert error">
                    <?php echo $errores; ?>
                </div>
            <?php elseif($enviado): ?>
                <div class="alert success">
                    <p>¡Enviado correctamente!</p>
                </div>
            <?php endif ?>

            <!-- SUBMIT -->
            <input type="submit" name="submit" class="btn btn-primary" value="Enviar datos">
        </form>
    </div>
</body>
</html>