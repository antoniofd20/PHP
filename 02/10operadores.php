<?php
    /**
     * OPERADORES ARITMETICOS:
     * 
     * + SUMA
     * - RESTA
     * * MULTIPLICACION
     * / DIVISION
     */

    /**
     * OPERADORES DE ASIGNACION:
     * 
     * = 
     * +=
     * -=
     * *=
     * /=
     */

    $numero = 10;
    $numeroDos = 6;

    echo 'resta ' . $resultado = $numero - $numeroDos . '<br />';
    echo 'multiplicacion ' . $resultado = $numero * $numeroDos . '<br />';
    echo 'division ' . $resultado = $numero / $numeroDos . '<br />';
    echo 'modulo ' . $resultado = $numero % $numeroDos . '<br />';

    // echo $numero += 7 . '<br />';
    echo $numero -= 7 . '<br />';

    /**
     * OPERADORES DE INCREMENTO Y DECREMENTO
     * 
     * ++$x
     * $x++
     * --$x
     * $x--
     */
    
    $valor = 5;
    echo '<br /><br />Incremento ';
    $valor++;
    echo $valor . '<br />';

    $texto = 'Este es un texto';
    $textoDos = 'Y este es otro texto';

    $textoTres = $texto . $textoDos;

    echo $textoTres;
?>