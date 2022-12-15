<?php

/**
 * Classe de configuração das rotas
 */
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