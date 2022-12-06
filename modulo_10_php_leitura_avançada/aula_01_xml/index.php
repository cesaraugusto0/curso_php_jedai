<?php

    // Ler arquivo XML

    // $xml = simplexml_load_file('arquivo.xml');
    // echo $xml->informacoes->item->title;
    // echo $xml->informacoes2->item->nome;

    // Criando xml a partir de um array
    escreverXML(array('guilherme'=>'nome','24'=>'idade','futebol,tennis'=>'esportes'),'arquivo.xml');

    // Lendo o xml
    $content = simplexml_load_file('arquivo.xml');

    echo $content->esportes;

    function escreverXML($arr,$nomedoarquivo) {
        $xml = new SimpleXMLElement('<root/>');
        array_walk_recursive($arr, array($xml, 'addChild'));
        file_put_contents($nomedoarquivo,$xml->asXML());
    }


?>