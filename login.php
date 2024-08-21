<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
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
            margin-bottom: 20px;
        }

        input {
            width: 100%;
            padding: 10px;
            margin: 10px 0;
            border: 1px solid #ccc;
            border-radius: 5px;
            box-sizing: border-box;
        }

        .button {
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

        .button:hover{
            background-color: #6495ed;
        }

        .register {
            color: gray;
            font-size: 14px;
            margin-top: 20px;
        }

        .register a {
            color: #0000FF;
            text-decoration: none;
        }

        .register a:hover {
            text-decoration: underline;
        }
    </style>
</head>
<body>
    <div class="container">
        <div class="box">
            <div class="register">
                <h1>Fazer Login!</h1>
                <p class="subtitle">Não tem login? <a href="cadastro.php">Cadastre-se já!</a></p>
                <form method="POST" action="teste_login.php"> 
                    <input type="email" name="email" placeholder="Email" required>
                    <input type="password" name="senha" placeholder="Senha" required>
                    <input type="submit" name="submit" class="button" value="Login">
                </form>
            </div>
        </div>
    </div>
</body>
</html>
