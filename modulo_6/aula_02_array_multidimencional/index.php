<?php

    // Array single

    $arr = ['guilherme','joão'];
    $arr = array('Guilherme','chave2'=>'João','Felipe','Mario');

    $arr[0] = 'guilherme';
    $arr[] = 'jão';


    // Arrays Multidimencionais

    // $arr2 = array(array('Guilerme','João'),array(23,25));

    // echo $arr2[1][0];

    // $arr2[0] = array('chave1'=>'guilherme','joão');

    $arr2[0]['chave1'] = 'Guilherme';

    echo $arr2[0]['chave1'];





?>