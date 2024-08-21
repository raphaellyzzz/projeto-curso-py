<?php
    // if(isset($_POST['submit']))
    // {
    //     print_r($_POST['nome']);
    //     print_r($_POST['email']);
    // 
    include_once('config.php');

    if (isset($_POST['submit'])) {
        $nome = $_POST['nome'];
        $email = $_POST['email'];
        $senha = $_POST['senha'];

        $sql = "INSERT INTO usuarios (nome, email, senha) VALUES ('$nome', '$email', '$senha')";
        if ($conexao->query($sql) === TRUE) {
            echo "<script>
                    alert('Cadastro realizado com sucesso!');
                    window.location.href = 'login.php';
                </script>";
        } else {
            echo "Erro: " . $sql . "<br>" . $conexao->error;
        }
    }
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro</title>
    <link rel="icon" href="images/python-logo.png">
    <style>
        body {
            margin: 0;
            font-family: Arial, sans-serif;
        }

        .container {
            width: 100vw;
            height: 100vh;
            background: #6495ed;
            display: flex;
            justify-content: center;
            align-items: center;
            background-image: linear-gradient(#6495ed, #0000FF);
        }

        .box {
            width: 300px;
            padding: 30px;
            background: #fff;
            border-radius: 5%;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            text-align: center;
        }

        h1 {
            color: black;
            font-size: 24px;
            margin-bottom: 10px;
        }

        .subtitle {
            color: gray;
            font-size: 14px;
            margin-bottom: 18px;
        }

        input {
            width: 100%;
            padding: 10px;
            margin: 10px 0;
            border: 1px solid #ccc;
            border-radius: 5px;
            box-sizing: border-box;
        }

        button {
            width: 80%;
            padding: 10px;
            background-color: #0000FF;
            color: white;
            font-size: medium;
            border-radius: 10px;
            border: none;
            cursor: pointer;
            margin-top: 10px;
        }

        .login {
            color: gray;
            font-size: 14px;
            margin-top: 20px;
        }

        .login a {
            color: #0000FF;
            text-decoration: none;
        }

        .login a:hover {
            text-decoration: underline;
        }
    </style>
</head>
<body>
    <div class="container">
        <div class="box">
            <h1>Cadastro</h1>
            <p class="subtitle">Já tem uma conta? <a href="login.php">Faça login!</a></p>
            <form action="cadastro.php" method="post">
                <input type="text" name="nome" id="nome" placeholder="Nome" required>
                <input type="email" name="email" id="email" placeholder="Email" required>
                <input type="password" name="senha" id="senha" placeholder="Senha" required>
                <button type="submit" name="submit">Cadastrar-se</button>
            </form>
        </div>
    </div>
</body>
</html>
