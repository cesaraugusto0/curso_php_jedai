<?php

    # Recebe uma classe como parametro e inclui ela se ela existir
    function myAutoLoad($class) {
        $class = str_replace('\\','/',$class);
        if (file_exists('classes/'.$class.'.php')) {
            include('classes/'.$class.'.php');
        }
    }

    # Função PHP que registra uma função para rodar automaticamente
    spl_autoload_register('myAutoLoad');


?>