<?php

    //Recuperando a sessão criada
    session_start();

    echo session_id();

    // echo $nome;


    //Exibndo dados de uma variáve de sessão:
    echo $_SESSION["nome"];