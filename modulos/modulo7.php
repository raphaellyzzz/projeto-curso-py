<?php
    session_start();
    include_once('../config.php');

    if (!isset($_SESSION['usuario_id'])) {
        header('Location: ../login.php');
        exit();
    }

    $usuario_id = $_SESSION['usuario_id'];
?>

<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Módulo 7</title>
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
            <h1>Ciclos de repetição (For e while)</h1>
            <p>Essa aula está disponivel no Colab, <a href="https://colab.research.google.com/drive/1MCzkkdspqN11tH1ZjXC6-wKsnwhrWqe6?usp=sharing" target="_blank">clique aqui</a></p>
            <h1>INTRODUÇÃO ÀS ESTRUTURAS DE REPETIÇÃO</h1>

            <p>Em Python, as estruturas de repetição são ferramentas essenciais que permitem executar um bloco de código várias vezes, o que é especialmente útil quando você precisa realizar a mesma tarefa repetidamente. Existem duas estruturas principais para repetição: <strong>while</strong> e <strong>for</strong>.</p>

            <h2>Estrutura de Repetição <code>while</code></h2>
            <p>Uma estrutura <code>while</code> repete um bloco de código enquanto uma condição especificada for verdadeira. Funciona como um loop contínuo que só é interrompido quando a condição se torna falsa.</p>
            <p><strong>Sintaxe:</strong></p>
            <pre>
            while condição:
                # Bloco de código a ser repetido
            </pre>

            <p><strong>Exemplo:</strong></p>
            <pre>
            contador = 1
            while contador <= 5:
                print(f"Número: {contador}")
                contador += 1
            </pre>

            <h2>Estrutura de Repetição <code>for</code></h2>
            <p>A estrutura <code>for</code> é usada para iterar sobre uma sequência (como uma lista, uma tupla, ou um intervalo de números). Ela é especialmente útil quando você sabe antecipadamente o número de repetições que deseja realizar.</p>

            <p><strong>Sintaxe:</strong></p>
            <pre>
            for variável in sequência:
                # Bloco de código a ser repetido fica aqui (não esqueça da indentação)
            </pre>

            <p><strong>Exemplo:</strong></p>
            <pre>
            for i in range(1, 6):
                print(f"Número: {i}")
            </pre>
            <p>Este código também imprimirá os números de 1 a 5, semelhante ao exemplo com <code>while</code>.</p>

            <h2>ATIVIDADES PRÁTICAS</h2>

            <h3>Atividade 1:</h3>
            <p>Escreva um programa que some todos os números de 1 a 100 utilizando um loop <code>while</code>.</p>

            <h3>Atividade 2:</h3>
            <p>Escreva um programa que peça ao usuário para digitar um número e, em seguida, mostre a tabuada desse número usando um loop <code>for</code>.</p>

            <h3>Atividade 3:</h3>
            <p>Faça um programa que leia a idade de várias pessoas e ao final mostre a média de idade. O programa deve parar quando o usuário digitar um valor negativo.</p>

            <h2>EXPLICAÇÕES ADICIONAIS</h2>

            <h3>Interrompendo Loops com <code>break</code></h3>
            <p>O comando <code>break</code> pode ser utilizado dentro de um loop para sair dele imediatamente, ignorando qualquer condição restante.</p>

            <h3>O Comando <code>continue</code></h3>
            <p>O comando <code>continue</code> pula a execução do restante do código dentro do loop e vai diretamente para a próxima iteração.</p>

            <p><strong>Exemplo:</strong></p>
            <pre>
            for i in range(1, 10):
                if i % 2 == 0:
                    continue
                print(i)
            </pre>
            <p>Neste exemplo, apenas os números ímpares de 1 a 9 serão impressos.</p>

            <h2>DESAFIO</h2>

            <h3>Desafio:</h3>
            <p>Crie um programa que solicite ao usuário para adivinhar um número secreto entre 1 e 100. O usuário deve ter no máximo 10 tentativas para adivinhar o número. Utilize um loop <code>while</code> para controlar o número de tentativas e exiba uma mensagem se o usuário acertar ou se esgotar as tentativas.</p>
        </div>
    </div>
    <a id="botao-cima" href="#">&#923;</a>
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