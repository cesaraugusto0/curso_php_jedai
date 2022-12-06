<?php

    // mkdir('pasta');
    if (is_dir('request.php')) {
        echo 'é uma pasta válida';
    } else {
        echo 'não existe ou não é uma pasta';
    }

    // deletar a pasta
    // rmdir('pasta');
    if ($handle = opendir('pasta')) {
        // Esta pasta é a forma correta de varrer o diretorio
        while ($file = readdir($handle)) {
            if ($file == '.' || $file == '..') {
                // é um arquivo
            } else {
                // uma pasta
            }
            echo "$file\n";
            echo '<br>';
        }
        closedir($handle);
    }



?>