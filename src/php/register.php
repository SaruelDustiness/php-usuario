<?php
    if(!empty($_POST["email"]) && !empty($_POST["nome"]) && !empty($_POST["password"]) && !empty($_POST["password_con"])){
        $nome = $_POST["nome"];
        $email = $_POST["email"];
        $password = $_POST["password"];
        $password_con = $_POST["password_con"];

        if($password != $password_con){
            $message = "As senhas inseridas são diferentes!";
            echo "<script type='text/javascript'>alert('$message');</script>";
        }
        else{
            $sql = "INSERT INTO usuarios (nome, email, senha) VALUES ('$nome', '$email', '$password');";
            if(mysqli_query($conn, $sql)){
                $message = "Usuário cadastrado com sucesso!";
                echo "<script type='text/javascript'>alert('$message');</script>";
            }
            else{
                $message = "Deu ruim, ein! Erro: " . $sql . "<br>" . $conn->error;
                echo "<script type='text/javascript'>alert('$message');</script>";
            }
        }
    }
    else{
        $message = "Todos os campos são obrigatórios!";
        echo "<script type='text/javascript'>alert('$message');</script>";
    }
    $conn->close();
?>