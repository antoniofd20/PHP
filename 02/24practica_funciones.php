<?php
    # ------------PRACTICAR CON FUNCIONES-------------

    function area_triangulo($base, $altura){
        $resultado = ($base * $altura)/2;
        return $resultado;
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>AREA TRIANGULO</title>

    <p><?php echo 'El area del triangulo es: ' . area_triangulo(10, 5); ?></p>
</head>
<body>
    
</body>
</html>