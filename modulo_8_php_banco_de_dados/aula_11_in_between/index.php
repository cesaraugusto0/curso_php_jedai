<?php

    # Classe nativa do PHP:  PDO
    $pdo = new PDO('mysql:host=localhost;dbname=modulo_8','root','');

    $sql = $pdo->prepare("SELECT * FROM posts WHERE id BETWEEN 2 AND 3");

    $sql->execute();

    $info = $sql->fetchAll(PDO::FETCH_ASSOC);

    foreach ($info as $key => $value) {
        echo $value['id'];
        echo '<hr>';
    }




?>
