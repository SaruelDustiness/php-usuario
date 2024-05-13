<?php
    include("./src/php/connect.php");
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Acesso de Usuário</title>
    <link href="./src/css/style.css" rel="stylesheet"/>
</head>
<body>
    <div class="sec-box">
        <div class="caixa-form">
            <form method="post" id="login-form">
                <img class="imagem" src="./src/img/login.png">
                <input type="email" name="email" placeholder="Insira seu e-mail">
                <input type="password" name="password" placeholder="Insira sua senha">
                <input type="submit" value="Entrar" name="Entrar" id="btnEntrar">
                <p class="mensagem">Já possui uma conta? <a href="#">Entre!</a></p>
            </form>
            <form method="post" id="cadastro-form">
                <img class="imagem" src="./src/img/registro.png">
                <input type="text" name="nome" placeholder="Insira seu nome completo">
                <input type="email" name="email" placeholder="Insira seu e-mail">
                <input type="password" name="password" placeholder="Insira sua senha">
                <input type="password" name="password_con" placeholder="Confirme sua senha">
                <input type="submit" value="Cadastrar" name="Cadastrar" id="btnCad">
                <p class="mensagem">Ainda não possui uma conta? <a href="#">Cadastre-se!</a></p>
            </form>
        </div>
    </div>

    <?php
        if(isset($_POST["Entrar"])){
           include_once("./src/php/login.php");
        }
        else if(isset($_POST["Cadastrar"])){
            include_once("./src/php/register.php");
        }
    ?>

    <script src='https://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>
    <script src='./src/js/script.js'></script>
</body>
</html>