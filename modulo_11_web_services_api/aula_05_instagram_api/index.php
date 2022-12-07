<?php

    $request = file_get_contents('https://www.instagram.com/august_csar/?__a=1');
    $object = json_decode($request);
    $imagens = $object->user->media->nodes;

    for ($i=0; $i < 3; $i++) { 
        echo '<img src="'.$imagens[$i]->thumbnail_src.'"/>';
    }



?>