<?php

    # Definindo um namespace
    namespace Sessao1;

    # Puxando uma classe do namespace Sessao2
    # Evita ter que colocar o namespace antes da classe
    use Sessao2\Class2;

    class Class1 {
        public function __construct() {

            new Class2();
            echo 'Classe 1 instanciada<br>';
        }

    }    










?>