<?php
    # -------------SENTENCIA BREAK Y CONTINUE----------------

    $paises = ['Mexico', 'España', 'Colombia', 'Peru', 'Argentina', 'Venezuela', 'Guatemala'];

    # SENTECIA BREAK
    foreach($paises as $pais){
        echo $pais . '<br/>';

        if($pais == 'Peru'){
            break;
        }
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Break y Continue</title>
</head>
<body>
    <h1>PAISES LATINOAMERICANOS</h1>
    <?php
        foreach($paises as $pais){
            if($pais == 'España'){
                continue;
            }

            echo $pais . '<br/>';
        }
    ?>
</body>
</html>