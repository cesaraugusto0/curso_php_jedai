<?php

    $jason = '{"a":"guilherme","b":{"0":"felipe","1":"joão"},"c":3,"d":4,"e":5}';

    // var_dump(json_decode($json));

    /*
    // 
    $obj = json_decode($json);
    $arr = json_decode($json,true);
    */

    $arr = ['nome'=>'guilherme','cidade'=>'floripa'];

    $json = json_encode($arr);
    echo $json;


?>