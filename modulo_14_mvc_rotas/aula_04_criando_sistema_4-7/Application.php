<?php

/**
 * Classe de configuração das rotas
 */
define('INCLUDE_PATH','http://localhost/curso_php_jedai/modulo_14_mvc_rotas/aula_04_criando_sistema_4-7/');
define('INCLUDE_PATH_FULL','http://localhost/curso_php_jedai/modulo_14_mvc_rotas/aula_04_criando_sistema_4-7/Views/pages/');

class Application
{
    public function executar()
    {
        # Grava na variavel url o nome da rota sem /, caso não tenha grava Home
        $url = isset($_GET['url']) ? explode('/', $_GET['url'])[0] : 'Home';

        # Transforma a primeira letra em maiuscola
        $url = ucfirst($url);
        # Concatena strings: ControllerNome_da_rota
        $url .= "Controller";


        if (file_exists('Controllers/' . $url . '.php')) {
            # constroi o nome completo da classe (formato de namespace: Controllers\ControllerContato)
            $className = 'Controllers\\'.$url;
            $controler = new $className();
            $controler->executar();
        } else {
            die("Não existe esse controlador!");
        }
    }
}

?>