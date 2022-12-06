<?php

    # Classe nativa do PHP:  PDO
    $pdo = new PDO('mysql:host=localhost;dbname=modulo_8','root','');

    $sql = $pdo->prepare("SELECT * FROM `posts` GROUP BY `categoria_id` ORDER BY `titulo` ASC LIMIT 1,3");

    $sql->execute();

    $info = $sql->fetchAll(PDO::FETCH_ASSOC);

    echo '<pre>';
    print_r($info);
    echo '</pre>';




?>
