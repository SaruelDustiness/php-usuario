<?php
     if(!empty($_POST["email"]) && !empty($_POST["password"])){
        $email = $_POST["email"];
        $password = $_POST["password"];
        
        $sql = "SELECT email, senha FROM usuarios WHERE email = '$email';";
        $result = mysqli_query($conn, $sql);
        $login = mysqli_fetch_assoc($result);
        if(is_null($login)){
            $message = "A conta inserida não existe! Por favor, verifique se o email foi digitado corretamente.";
            echo "<script type='text/javascript'>alert('$message');</script>";
        }
        else{
            $login_m = $login['email'];
            $login_p = $login['senha'];
            if(($login_m == $email) && ($login_p == $password)){
                $message = "Usuário entrou com sucesso!";
                echo "<script type='text/javascript'>alert('$message');</script>";
            }
            else{
                $message = "Email ou senha incorretos!";
                echo "<script type='text/javascript'>alert('$message');</script>";
            }
        }
    }
    else{
        $message = "Por favor insira um email e uma senha!";
        echo "<script type='text/javascript'>alert('$message');</script>";
    }
    $conn->close();
?>