<?php
    //Importa o arquivo conexao.php
    include("./src/php/conexao.php");

    //Verifica se a variável "user" está armazenando algum dado
    if(isset($_SESSION['user'])){
        //Redireciona o usuário à página home.php
        header("Location: ./home.php");
    }
    //Fim da primeira tag PHP
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Cadastro</title>
        <link rel="stylesheet" href="./src/css/style.css">
    </head>
    <body>
        <!-- Caixa que representa o fundo da pagina e armazena todo o conteúdo -->
        <div class="fundo"> 
            <!-- Caixa que armazena o(s) formulário(s) -->
            <div class="caixa-formulario"> 
                <!-- Formulário de Cadastro -->
                <form class="area-formulario" method="post" action="#"> 
                    <label for="nome">Nome</label>
                    <input type="text" id="nome" name="nome" placeholder="Digite seu nome">
                    <label for="email">Email</label>
                    <input type="text" id="email" name="email" placeholder="Digite seu email">
                    <label for="password">Senha</label>
                    <input type="password" id="password" name="password" placeholder="********">
                    <label for="password_con">Confirmar senha</label>
                    <input type="password" id="password_con" name="password_con" placeholder="********">
                    <input type="submit" value="Cadastrar" id="signup" name="signup">
                    
                    <p>Já possui uma conta? <a href="./index.php">Clique aqui!</a></p>
                </form>
                <!-- Fim do formulário de Login -->
            </div>
            <!-- Fim da div "caixa-formulario" -->
        </div>
        <!-- Fim da div "fundo" -->
        
        <?php
            if(isset($_POST["signup"])){
                include("./src/php/cadastrar.php");
            }
        ?>
    </body>
</html>