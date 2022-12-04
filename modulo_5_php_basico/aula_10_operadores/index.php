<?php

    $valor = 10;
    $valor2 = '10';

    // Um sinal de igual quer dizer que estamos atribuindo um valor.
    // Sempre retorna verdadeiro.
    /*
    if ($nome = $nome2) {
        echo 'verdade';
    }
    */

    // Apenas confere se o valor eh igual.
    /*
    if ($nome == $nome2) {
        echo 'verdade';
    }
    
    // Conferimos para ver e diferente.
    if ($nome != $nome2) {
        echo 'e diferente.';
    }
    */

    // Confere se são identicos ou seja. Mesmo valor e mesmo tipo
    /*
    if ($valor === $valor2) {
        echo 'verdade';
    } else {
        echo 'não são identicos';
    }
    */


    // Comparamos para ver se são diferentes (tipo e valor)
    if ($valor !== $valor2) {
        echo 'não são identigos';
    } else {
        echo 'são identicos';
    }



?>