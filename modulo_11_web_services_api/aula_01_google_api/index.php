
<form method="post">
    <input type="text" name="adress">
    <input type="submit" name="acao" value="Enviar">
</form>

<?php

    if (isset($_POST['acao'])) {
        $url = urlencode($_POST['adress']);
        $str = file_get_contents('http://maps.googleapis.com/maps/api/geocode/json?address='.$url.'&sensor=false');

        $endereco = json_decode($str);


        /*
        echo '<pre>';
        print_r($endereco);
        echo '</pre>';
        */

        
        echo 'Nome do bairro:';
        echo '<br>';
        echo $endereco->results[0]->address_components[1]->short_name;

        echo '<hr>';

        echo 'Nome correto da rua:';
        echo '<br>';
        echo $endereco->results[0]->address_components[0]->short_name;
        
    }


?>