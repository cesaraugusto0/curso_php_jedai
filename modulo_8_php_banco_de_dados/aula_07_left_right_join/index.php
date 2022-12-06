<?php

    # Classe nativa do PHP:  PDO
    $pdo = new PDO('mysql:host=localhost;dbname=modulo_8','root','');

    $sql = $pdo->prepare("SELECT * FROM `posts` RIGHT JOIN `categorias` ON `posts`.`categoria_id` = `categorias`.`id`");

    $sql->execute();

    $info = $sql->fetchAll(PDO::FETCH_ASSOC);

    foreach ($info as $key => $value) {
        echo $value['titulo'];
        echo ' | ';
        echo $value['nome'];
        echo '<hr>';
    }




?>
