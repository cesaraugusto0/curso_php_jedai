<?php

    $curl = curl_init();

    curl_setopt($curl, CURLOPT_URL,"http://localhost/curso_php_jedai/modulo_11_web_services_api/aula_02/request.php");
    curl_setopt($curl, CURLOPT_POST, 1);

    # na vida real vc pode usar passando como array e usar a função http_build_query
    curl_setopt($curl, CURLOPT_POSTFIELDS, http_build_query(array('request'=>'name_return')));

    # receive serve response ...
    curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);

    $server_output = curl_exec($curl);

    curl_close($curl);

    $resultado = json_decode($server_output);

    echo $resultado->titulo[0];
    echo '<br>';
    echo $resultado->conteudo[0];


?>