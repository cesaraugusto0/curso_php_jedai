<?php

    $conteudo = 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Amet porro dicta impedit facilis a, laudantium excepturi magnam, nemo eligendi et rerum ut, neque provident? Rerum cumque reprehenderit fuga laborum nemo.';
    // Serve para recortar uma string.
    // echo substr($conteudo,0,20);


    $nome = 'Cesar Augusto Cardoso';

    $nomes = explode(' ',$nome);
    // print_r($nomes);

    // Serve para juntar um array com um delimitador.
    // No caso o espaço.
    
    $nomes = implode(' ',$nomes);
    // echo $nomes;

    // Strip_tags serve para retirar todo codigo HTML.
    $conteudo = '<h1>Guilherme</h1> Outa coisa';
    echo strip_tags($conteudo);







?>