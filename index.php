<?php
include('conexao.php');

if(isset($_POST['email']) || isset($_POST['senha'])) {

    if(strlen($_POST['email']) == 0) {
        echo "Preencha seu e-mail";
    } else if(strlen($_POST['senha']) == 0) {
        echo "Preencha sua senha";
    } else {

        $email = $mysqli->real_escape_string($_POST['email']);
        $senha = $mysqli->real_escape_string($_POST['senha']);

        $sql_code = "SELECT * FROM usuarios WHERE email = '$email' AND senha = '$senha'";
        $sql_query = $mysqli->query($sql_code) or die("Falha na execução do código SQL: " . $mysqli->error);

        $quantidade = $sql_query->num_rows;

        if($quantidade == 1) {
            
            $usuario = $sql_query->fetch_assoc();

            if(!isset($_SESSION)) {
                session_start();
            }

            $_SESSION['id'] = $usuario['id'];
            $_SESSION['nome'] = $usuario['nome'];

            header("Location: dashboard2.html"); //painel.php

        } else {
            echo "Falha ao logar! E-mail ou senha incorretos";
        }

    }

} //====================================================================================================================
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Login</title>
    <link
      rel="stylesheet"
      href="https://cdn.jsdelivr.net/npm/@fortawesome/fontawesome-free@5.15.4/css/fontawesome.min.css"
    />
    <link rel="stylesheet" href="css/login.css" />
  </head>
  <!-- -->
  <body>
    <div id="login-container">
    <h1>Acesse sua conta</h1>
      <form action="" method="POST">
        <label for="email">E-mail</label>
        <input
          type="text"
          name="email"
          id="email"
          placeholder="Digite o seu E-mail"
        />

        <label for="password">Senha</label>
        <input
          type="password"
          name="senha"
          id="senha"
          placeholder="Digite a sua Senha"
        />

        <a href="#" onclick="Esqueceu()" id="forgot-pass">Esqueceu a senha?</a>
        <input type="submit" value="Login" />
      </form>
      
    <div id="container-register">
        <p>Ainda não tem uma conta?</p>
        <a href="#" onclick="Registrar()">Registrar</a>
    </div>

    </div>

    <script>
        function Esqueceu(){
        alert('Entre em contato o administrador do Sistema para substituir sua senha pelo Email: raiodigitalweb@gmail.com')
    }

        function Registrar(){
        alert('Entre em contato o administrador do Sistema para realizar o cadastro de acesso pelo Email: raiodigitalweb@gmail.com')
    }
    </script>

  </body>

