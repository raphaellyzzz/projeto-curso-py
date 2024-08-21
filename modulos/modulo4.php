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
    <title>Módulo 4</title>
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
            <h1>Listas</h1>
            <p>Bom Dia pessoal, Tudo bem com vocês? Hoje vamos falar sobre a função input em programação. O que é o input? O input é uma função que permite á interação com o usuário ao solicitar á entrada de dados. Quando usamos o input, estamos basicamente pedindo que ó usuário forneça alguma informação que será armazenada em uma variável. Para usar o input, você cria uma variável e atribui á ela o valor retornado pela função input, á função input pode receber uma mensagem entre aspas ou aspas duplas que será exibida na tela.</p>
            <pre><code>
                n1 = int(input("coloque o primerio numero:"))
                n2 = int(input("coloque o segundo nunmero:"))
                soma = n1 + n2
                print(soma)
            </code></pre>
            output:
            <pre><code>
                coloque o primerio numero:15
                coloque o segundo nunmero:20
                35
            </code></pre>
            <p>Agora vou mostrar e explicar sobre Listas, as listas são uma das estruturas de dados mais utilizadas em Python, elas permitem armazenar um conjunto de valores em uma única variável, para criar uma lista precisa criar uma varialvel, colocar o sinal de igualdade e abrir os cochetes, agora fiquem com o exemplo</p>
            <pre><code>
                lista=[2.5,5,4,10]
                print(lista)
            </code></pre>
            output:
            <pre><code>[2.5, 5, 4, 10]</code></pre>
            <p>Agora vou mostrar á voês sobre Bibliotecas em Python, as biblioteca são um conjuntos de códigos pré-escritos que você pode usar para facilitar seu trabalho ao programar. Pense nelas como ferramentas ou recursos que ajudam você a realizar tarefas específicas sem precisar escrever o código do zero. Agora eu vou falar alguns exemplos de Bibliotecas como: NumPy, Pandas, Django e etc.</p>
            <pre><code>
                import numpy as np
                a = np.array([1, 5, 10])
                print(a)
            </code></pre>
            output:
            <pre><code>[ 1  5 10]</code></pre>
            <p>Agora vou deixar uma atividade para vocês.</p>
            <ul>
                <li>A)construa um codigo que imprima na tela bom 4 vezes.</li>
                <li>B)Agora quro que vocês construam uma lista que receba 5 numeros ao seu gosto.</li>
                <li>C)Agora quero que voces façam uma simples biblioteca.</li>

            </ul>
            <p>Se você conseguiu parabens.</p>
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