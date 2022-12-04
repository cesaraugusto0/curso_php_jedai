<?php

    // $nome = 'Guilherme';

    /*
    switch($nome) {
        case 'Guilherme':
            echo 'Minha variavel e guilherme';
            break;
        case 'João':
            echo 'Minha variavel e joao';
            break;
    }
    */

    // Break para o loop for, while, do, foreach e switch;
    // Continue para o loop for, while, do e foreach;
    for ($i = 0; $i < 10; $i++) {
        if ($i == 5 || $i == 9)
            continue;
        echo $i;
        echo '<hr>';
        /*
        if ($i == 5)
            break;
        */
    }
    

    $var = true;
    
    if ($var == true)
        $nome = 'Guilherme';
    $idade = 23;

    echo $idade = 23;
    echo '<br>';
    echo $nome;







?>