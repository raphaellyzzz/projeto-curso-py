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
    <title>Módulo 5</title>
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
            <h1>Dicionários</h1>
            <h1>Introdução aos Dicionários em Python</h1>

            <h2>Objetivos:</h2>
            <ul>
                <li>Entender o conceito de dicionário em Python.</li>
                <li>Aprender a criar, acessar, modificar e iterar sobre dicionários.</li>
                <li>Aplicar o conhecimento em exercícios práticos.</li>
            </ul>

            <h2>O que é um Dicionário?</h2>
            <p>Um dicionário em Python é uma estrutura de dados que armazena pares de chave e valor. É parecido com um dicionário da vida real, onde uma palavra (chave) está associada a uma definição (valor).</p>
            <ul>
                <li><strong>Chaves:</strong> São únicas em um dicionário e podem ser de tipos imutáveis (como strings, números).</li>
                <li><strong>Valores:</strong> Podem ser de qualquer tipo (inteiros, listas, strings, etc.).</li>
            </ul>

            <h2>Criando um Dicionário:</h2>
            <img src="aulas_imagens/m5/1.png" alt="1">

            <h2>Acessando Valores</h2>
            <p>Você pode acessar o valor associado a uma chave usando colchetes [].</p>
            <img src="aulas_imagens/m5/2.png" alt="2">

            <h2>Adicionando e Modificando Itens</h2>
            <p>Para adicionar um novo par chave-valor ou modificar o valor de uma chave existente:</p>
            <img src="aulas_imagens/m5/3.png" alt="3">

            <h2>Removendo Itens</h2>
            <p>Você pode remover um item usando o método <code>pop()</code> ou <code>del</code>.</p>
            <img src="aulas_imagens/m5/4.png" alt="4">

            <h2>Iterando sobre um Dicionário</h2>
            <p>Você pode iterar sobre as chaves, valores ou pares chave-valor de um dicionário.</p>
            <img src="aulas_imagens/m5/5.png" alt="5">

            <h2>Exercício Prático</h2>

            <h3>1. Crie um Dicionário de Contatos:</h3>
            <ul>
                <li>Crie um dicionário onde as chaves sejam nomes de pessoas e os valores sejam seus números de telefone.</li>
                <li>Adicione três contatos ao dicionário.</li>
                <li>Modifique o número de um contato existente.</li>
                <li>Remova um contato do dicionário.</li>
            </ul>

            <h3>Passo 1:</h3>
            <p>Crie um dicionário onde as chaves sejam nomes de pessoas e os valores sejam seus números de telefone. Vamos começar criando um dicionário vazio e adicionando contatos manualmente.</p>
            <img src="aulas_imagens/m5/6.png" alt="6">

            <h3>Passo 2:</h3>
            <p>Modifique o número de um contato existente. Vamos supor que o número de telefone do "Bob" mudou. Vamos atualizar o número dele no dicionário.</p>
            <img src="aulas_imagens/m5/7.png" alt="7">

            <h3>Passo 3:</h3>
            <p>Remova um contato do dicionário. Agora, vamos remover o contato "Carlos" do dicionário.</p>
            <img src="aulas_imagens/m5/8.png" alt="8">

            <h2>Resumo do Exercício</h2>
            <ul>
                <li><strong>Criação:</strong> Você aprendeu a criar um dicionário vazio e adicionar contatos.</li>
                <li><strong>Modificação:</strong> Você atualizou o número de telefone de um contato existente.</li>
                <li><strong>Remoção:</strong> Você removeu um contato do dicionário.</li>
            </ul>
            <p>Esse exercício simples é um ótimo ponto de partida para aprender a manipular dicionários em Python.</p>
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