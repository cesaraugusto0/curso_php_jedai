<?php

     // Array_merge serve para unir 2 ou mais arrays
    /*
    $array1 = array('chave1'=>'valor1','chave2'=>'valor2');
    $array2 = array('chave3'=>'valor3','chave4'=>'valor4');
    $array3 = array('chave5'=>'valor5');
    $result = array_merge($array1, $array2, $array3);
    print_r($result);
    */

    // array_intersect_key serve para retornar valores com a mesma chave em 2 ou mais arrays.
    /*
    $array1 = array('chave1'=>'valor1','chave2'=>'valor2');
    $array2 = array('chave2'=>'outro valor','chave1'=>'outro valor','chave3'=>'valor3','chave4'=>'valor4');
    print_r(array_intersect_key($array1, $array2));
    */


    // array map serve para aplicar uma função em todos os valores do array.
    $arr = ['<p>guilherme</p>','joão','<h1>fabricio</h1>'];

    print_r(array_map('strip_tags',$arr));





?>