<?php

    # Nescessario poder recuperar valores da sessão
    session_start();

    if (isset($_SESSION['nome'])) {
        echo $_SESSION['nome'];
    }

    # Limpa da memoria uma variavel em questão da sessão
    // unset($_SESSION['nome']);

    # Exclui dos as variaveis da sessão
    session_destroy();


    








?>