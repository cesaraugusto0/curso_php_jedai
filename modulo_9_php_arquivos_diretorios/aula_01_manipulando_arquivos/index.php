<?php

    # função que exclui arquivo
    unlink('file.txt');
    echo 'arquivo excluido<br>';

    #função que verifica se existe
    if (file_exists('file.txt')) {
        echo 'o arquivo existe';
    } else {  
        # quebra de linha com \r\n
        $content = "meu novo conteudo criado atrvez do PHP\r\nouta linha\r\noutra linha";

        # função que cria um arquivo
        file_put_contents('file.txt',$content);

        # função que ler um arquivo
        // echo file_get_contents('file.txt');
        
        # função que printa com quebra de linha
        echo nl2br($content);
    }



?>