<?php 

    $errores = '';
    $enviado = '';

    if(isset($_POST['submit'])) {
        $nombre = $_POST['nombre'];
        $correo = $_POST['correo'];
        $mensaje = $_POST['mensaje'];

        # COMPROBAMOS SI EL USUARIO ESCRIBI UN NOMBRE O NO
        if(!empty($nombre)) {
            # SI INGRESO UN NOMBRE SE SANITIZA
            $nombre = trim($nombre);
            $nombre = filter_var($nombre, FILTER_SANITIZE_STRING);
        } else {
            # SI NO INGRESO NADA SE MANDA UN ERROR
            $errores .= 'Por favor ingresa un nombre. <br/>';
        }

        # REVIZAMOS SI EL USUARIO INGRESO UN CORREO
        if(!empty($correo)) {
            # DE SER ASI, SE SANITIZA
            $correo = filter_var($correo, FILTER_SANITIZE_EMAIL);
            
            # SE COMPRUEBA SI ES UN CORREO VALIDO
            if(!filter_var($correo, FILTER_VALIDATE_EMAIL)) {
                # DE NO SER ASI SE ENVIA EL SIGUIENTE ERROR
                $errores .= "$correo no es un correo valido. <br/>";
            }
        } else {
            # SI EL CORREO ESTA VACIO SE MANDA EL SIGUIENTE ERROR
            $errores .= 'Por favor ingresa un correo. <br/>';
        }

        # REVISANDO QUE NO ESTE VACIO EL CAMPO MENSAJE
        if(!empty($mensaje)) {
            # SE QUITA POSIBLE CODIGO HTML QUE PUDIERAN INGRESAR
            $mensaje = htmlspecialchars($mensaje);
            # SE QUITAN ESPACIOS AL PRINCIPIO Y AL FINAL
            $mensaje = trim($mensaje);
            # SE QUITAN DIAGONALES
            $mensaje = stripslashes($mensaje);
        } else {
            $errores .= 'Por favor ingresa el mensaje. <br/>';
        }

        # EN CASO DE QUE NO HAYA ERRORES
        if(!$errores){
            $enviar_a = 'antonioflodiaz@gmail.com';
            $asunto = 'Correo enviado desde miPagina.com';
            $mensaje_preparado = "Comentario de: $nombre \n";
            $mensaje_preparado .= "Correo: $correo \n";
            $mensaje_preparado .= "Dejo el siguiente mensaje \n $mensaje \n";

            # NO SE VA A ENVIAR EL CORREO PORQUE ESTA EN UN SERVIDOR LOCAL
            // mail($enviar_a, $asunto, $mensaje_preparado);
            $enviado = true;
        }
    }

    # REQUERIMOS EL ARCHIVO DE LA VISTA
    require 'index.view.php';



?>