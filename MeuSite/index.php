<?php

    include_once "topo.php";
    include_once "menu.php";

    // Área de conteúdo
    if(empty($_SERVER['QUERY_STRING'])){
        //Página Inicial
        $pg = "conteudo";
        include_once "$pg.php";
        
    }else{
        $pg = "$_GET[pg]";
        
        // Verifica se o arquivo está na pasta principal
        if(file_exists("$pg.php")){
            include_once "$pg.php";

        // Se não estiver, procura na pasta admin
        }elseif(file_exists("admin/$pg.php")){
            include_once "admin/$pg.php";

        //Se não existir em lugar nenhum
        } else {
            echo "<h2>Página não encontrada!</h2>";
        }
    }

    include_once "rodape.php";