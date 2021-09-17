<?php

    function lerArquivo($nomeArquivo)
    {
        $arquivo = file_get_contents($nomeArquivo);
        $jsonArray = json_decode($arquivo);

        return $jsonArray;
    }

    /* 
    PARAMETROS DA FUNÇÃO
    1 - usuário vindo do form
    2 - senha vindo do form
    3 - dados do arqivo json de usuário e senha
    */

    function realizarLogin($usuario, $senha, $dados){
        foreach ($dados as $dado) {
            if ($dado->usuario == $usuario && $dado->senha == $senha) {
               
                //Variáveis de sessão
                $_SESSION["usuario"] = $dado->usuario;
                $_SESSION["id"] = session_id();
                $_SESSION["data_hora"] = date('d/m/Y = h:i:s');

            header('location: area_restrita.php');
            exit;

            } else {
                header('location: index.php');
                exit;
            }
            
        }
    }