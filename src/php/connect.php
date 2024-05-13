<?php
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "biblioteca";
    

    $conn = new mysqli($servername, $username, $password, $dbname);

    if ($conn->connect_error) {
        die("Não foi possível realizar a conexão com o banco de dados!". $conn->connect_error);
    }
?>