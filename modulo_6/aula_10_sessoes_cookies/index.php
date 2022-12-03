<?php


    // SESSOES

    # Inicia uma sessão
    session_start();

    # Define uma variavel na sessão
    # $_SESSION['nome'] = 'Guilherme';

    # echo $_SESSION['nome'];


    // COOKIE

    # Define um cookie
    # setcookie('nome','guilherme',time() + (60*60*24),'/');

    # "Excluir" um cookie
    setcookie('nome','guilherme',time() - (60*60*24),'/');

    echo $_COOKIE['nome'];







?>