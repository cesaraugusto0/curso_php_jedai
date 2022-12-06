<?php

    # Classe nativa do PHP:  PDO
    $pdo = new PDO('mysql:host=localhost;dbname=modulo_8','root','');

    $id = 1;

    $sql = $pdo->prepare("UPDATE `clientes` SET nome='João',sobrenome='Pereira' WHERE id=$id");

    if ($sql->execute()) {
        echo 'Meu cliente foi atualizado com sucesso com sucesso!';
    }

?>
