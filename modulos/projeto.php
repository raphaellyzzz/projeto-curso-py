<?php
    session_start();
    include_once('../config.php');

    if (!isset($_SESSION['usuario_id'])) {
        header('Location: ../login.php');
        exit();
    }

    $usuario_id = $_SESSION['usuario_id'];
    $logado = $_SESSION['nome'];
?>

<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Módulo 1</title>
    <link rel="stylesheet" href="../style_curso.css">
    <link rel="icon" href="../images/python-logo.png">
</head>
<body>
    <div class="curso-container">
        <div class="sidebar">
            <a href="../painel.php" class="btn-voltar">Painel</a>
            <h2>Módulos</h2>
            <ul class="module-list">
                <li class="module-item" id="intro"><a href="../inicio_curso.php">Introdução</a></li>
                <li class="module-item" id="mod1"><a href="modulo1.php">Módulo 1</a></li>
                <li class="module-item" id="mod2"><a href="modulo2.php">Módulo 2</a></li>
                <li class="module-item" id="mod3"><a href="modulo3.php">Módulo 3</a></li>
                <li class="module-item" id="mod4"><a href="modulo4.php">Módulo 4</a></li>
                <li class="module-item" id="mod5"><a href="modulo5.php">Módulo 5</a></li>
                <li class="module-item" id="mod6"><a href="modulo6.php">Módulo 6</a></li>
                <li class="module-item" id="mod7"><a href="modulo7.php">Módulo 7</a></li>
                <li class="module-item" id="mod8"><a href="modulo8.php">Módulo 8</a></li>
                <li class="module-item" id="projeto"><a href="projeto.php">Projeto Final</a></li>
            </ul>
        </div>
        <div class="content">
            <p>Parabéns por ter chegado até aqui <?php echo $logado?>!</p>
            <p>Sabemos que não é fácil, sua dedicação te impulsionou a conseguir e saíba que você tem nosso orgulho!</p>
            <h3>Pronto(a) para o seu projeto final?</h3>
            <p>Lembre-se de enviar no nosso email: <i>cursopy_respostas@gmail.com</i> com o assunto sendo "Curso Python" e no corpo da mensagem seu nome completo!</p>
            <h4>Projeto Final</h4>
            <ol>
                <li>Defina uma função chamada calcular_media que recebe uma lista de números e retorna a média desses números.</li>
                <li>Dentro da função calcular_media, utilize um loop for para somar todos os números da lista.</li>
                <li>Crie uma função chamada solicitar_numeros que peça ao usuário para digitar vários números, um de cada vez, até que o usuário digite um valor negativo. Armazene esses números em uma lista e retorne a lista.</li>
                <li>No programa principal, utilize a função solicitar_numeros para capturar os números do usuário e, em seguida, passe a lista de números para a função calcular_media. Imprima a média dos números na tela.</li>
                <li>Adicione uma função verificar_par_impar que receba um número e retorne uma string indicando se o número é par ou ímpar. Use essa função para verificar cada número na lista antes de calculá-lo na média, imprimindo se cada número é par ou ímpar antes de calcular a média.</li>
                <li>Caso o usuário não insira nenhum número válido (apenas números negativos), exiba uma mensagem informando que não foi possível calcular a média.</li>
            </ol>
            <p>Bom projeto.</p>
            <p>Continue nessa jornada, pequeno gafanhoto! Não desista.</p>
            <p>Bons estudos.</p>
        </div>
    </div>
</body>
<script>
    document.addEventListener('DOMContentLoaded', function () {
        const path = window.location.pathname;
        const page = path.split("/").pop();
        const moduleItems = document.querySelectorAll('.module-item a');
        
        moduleItems.forEach(item => {
            if (item.getAttribute('href') === page) {
                item.parentElement.classList.add('active');
            }
        });
    });
</script>
</html>