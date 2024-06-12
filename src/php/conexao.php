<?php
    //Define o início de uma sessão
    session_start();

    //Variáveis que recebem os valores do banco de dados.
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbName = "banco";

    //Variável que realiza uma conexão com o banco de dados ao ser criada.
    $conn = new mysqli($servername, $username, $password, $dbName);

    //Caso a conexão não dê certo, será exibido um erro na tela.
    if (!$conn){
        die("Falha ao conectar ao banco de dados: ". mysqli_error($conn));
    }
?>