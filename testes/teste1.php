<?php

    //Criando uma sessão:
    session_start();

    //Verificando o id da sessão:
    echo session_id();

    //Criando variáveis de sessão:
    $_SESSION["nome"] = "SARA DE FARIA";

    $nome = "SARA DE FARIA";
    echo $nome;