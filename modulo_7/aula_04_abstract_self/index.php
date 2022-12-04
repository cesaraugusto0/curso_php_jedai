<?php

    # Uma classe abstrata não pode ser instanciada, somente extentida
    abstract class teste {
        
        public function func1() {
            echo 'chamando funcao 1';
        }

        # Um metodo abstrato não pode ser implementado na classe pai, somente nas filhas
        abstract function func2();

    }


    class Principal2 {

        public static function outroMetodoEstatico(){
            echo 'meu outro metodo';
        }

    }



    class Principal extends teste {

        # Implementando o metodo abstrato da class abstrada teste (obrigatorio)
        public function func2() {
            echo '<br>estou declarando oficialmente um metodo abstrato<br>';
        }

        public static function metodoestatico() {
            echo 'metodo estatico';
        }

        public function funcao() {
            // Principal::metodoestatico();
            // self::metodoestatico();
            Principal2::outroMetodoEstatico();
        }

    }

    $principal = new Principal;

    $principal->funcao();

    // Principal::metodoestatico();

    // $principal->func1();

    // $principal->func2();








?>