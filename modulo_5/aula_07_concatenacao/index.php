<?php

    $frase = 'Meu nome é ';
    $nome = 'Guilherme';
    $idade = 23;
    $nomeclasse = 'box';
    
    define('NOME','João');


    echo $frase.$nome.$idade;
    echo '<br>';
    echo 'Olá meu nome é '.$nome;
    echo '<br>';
    echo "Meu nome é $nome";


    echo "<div class=\"$nomeclasse\">Meu conteúdo da div</div>";


?>