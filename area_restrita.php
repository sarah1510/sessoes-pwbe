<?php
    session_start();
    require_once('./funcoes.php');


    //Recebendo os dados - 1º forma
        // $dados = lerArquivo('dados/usuarios.json');
    //Teste
        // var_dump($dados);exit;
        // realizarLogin('sara', '123456',$dados);


    //Recebendo dados json - 2º forma
        // realizarLogin('maria', '654321', lerArquivo('dados/usuarios.json'));

    //Verificando os dados de variáeis de sessão
        // echo 'NOME USUÁRIO: ' . $_SESSION["usuario"] . '<br/>'; 
        // echo 'ID SESSÃO: ' . $_SESSION["id"] . '<br/>'; 


    verificarLogin();

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ÁREA RESTRITA</title>

    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">

</head>
<body>
    
    <h1>ÁREA RESTRITA</h1>

    <div class='toolbar'>

        <h2>
            <?php echo 'Olá ' . strtoupper($_SESSION['usuario']) . 
            ' - Login efetutado em: ' .$_SESSION['data_hora']; ?>
        </h2>

        <h2>
           <a class="material-icons" href="processa_login.php?logout=true">logout</a>
        </h2>

    </div>

</body>
</html>