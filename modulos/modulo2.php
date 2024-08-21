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
    <title>Módulo 2</title>
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
            <h1>Variáveis</h1>
            <p>PS: Essa aula foi produzida no Colab, um ambiente muito bom para desenvolvimento e você consegue armazenar seus códigos no drive!</p>
            <p>Foi produzido um slide sobre, <a href="https://docs.google.com/presentation/d/1sgGj6VRZpi1VgnVWB2U8KPm7RIlgnsa7XFxk2cR6iJA/edit?usp=drive_link" target="_blank">Clique Aqui</a></p>
            <p>Se preferir acompanhar por Colab (indicado), <a href="https://colab.research.google.com/drive/1E-hFRZOnwy7yPz7B4FF5RsULexdXxiMe?usp=drive_link" target="_blank">Clique aqui para ir a aula</a></p>
            <h2>O que são Variáveis?</h2>
            <p>Imagine que você tem uma caixa onde pode guardar qualquer coisa: uma bola, uma maçã, ou até um livro. Sempre que você quiser usar aquele objeto, você só precisa abrir a caixa e pegar o que está lá dentro.</p>
            <p>No mundo da programação, essa "caixa" é chamada de variável. Mas, em vez de guardar objetos físicos, as variáveis guardam informações. Essas informações podem ser números, palavras, listas de itens, entre outras coisas.</p>
            <p>Quando você cria uma variável, você está basicamente dizendo ao computador: "Guarde este valor para mim, porque eu vou precisar usá-lo mais tarde."</p>

            <h2>Como Declarar uma Variável em Python?</h2>
            <p>Declarar uma variável em Python é muito simples. Diferente de outras linguagens de programação, em Python você não precisa dizer ao computador qual o tipo de informação que você vai guardar (como se fosse dizer que na caixa tem uma bola ou uma maçã). Em vez disso, você simplesmente dá um nome para a variável e atribui a ela o valor que deseja guardar.</p>
            <p>Aqui está um exemplo:</p>
            <pre><code>
                idade = 16
                nome = "Ana"
                altura = 1.70
            </code></pre>
            <p>No primeiro exemplo, criamos uma variável chamada idade e guardamos nela o número 16. No segundo exemplo, criamos uma variável chamada nome e guardamos nela a palavra (ou string) "Ana". No terceiro exemplo, criamos uma variável chamada altura e guardamos nela o número 1.70.</p>

            <h2>O Que Acontece Depois?</h2>
            <p>Depois que você criou uma variável, pode usá-la em qualquer lugar do seu código. Se você precisar do valor que guardou na variável idade, por exemplo, você só precisa chamar o nome da variável:</p>
            <pre><code>
                idade = 16
                nome = "Ana"
                altura = 1.70

                print(idade)  # Isso vai mostrar o valor 16 na tela
            </code></pre>

            <h2>Tipos de Dados em Python</h2>
            <p>Em programação, os tipos de dados representam diferentes categorias de informações que podemos armazenar em variáveis. Vamos explorar os tipos de dados mais comuns em Python, usando exemplos simples para facilitar o entendimento.</p>

            <h3>Int (Inteiros)</h3>
            <p>O que é?</p>
            <p>Um número inteiro, ou seja, um número que não tem parte decimal. Ele pode ser positivo, negativo ou zero. Exemplos: 10, -5, 0.</p>
            <pre><code>idade = 25 # Aqui, idade é uma variável do tipo inteiro, e estamos guardando o número 25 nela.</code></pre>

            <h3>Float (Ponto Flutuante)</h3>
            <p>O que é?</p>
            <p>Um número que tem uma parte decimal. Ele é usado quando você precisa de mais precisão do que um número inteiro pode oferecer. Exemplos: 3.14, -0.01, 100.5.</p>
            <pre><code>altura = 1.75 # Aqui, altura é uma variável do tipo float, e estamos guardando o número 1.75 nela.</code></pre>

            <h3>String (Texto)</h3>
            <p>O que é?</p>
            <p>Uma sequência de caracteres, que pode incluir letras, números e símbolos. Em Python, strings são sempre colocadas entre aspas (" ou '). Exemplos: "Olá, Mundo!", "Lucas".</p>
            <pre><code>nome = "Lucas" # Aqui, nome é uma variável do tipo string, e estamos guardando o texto "Lucas" nela.</code></pre>

            <h3>Boolean (Booleano)</h3>
            <p>O que é?</p>
            <p>Um tipo de dado que só tem dois valores possíveis: True (Verdadeiro) ou False (Falso). Ele é muito útil para situações onde você precisa verificar se algo é verdadeiro ou falso. Exemplos: True, False.</p>

            <h3>O que esse código faz?</h3>
            <p>Cria quatro variáveis: nome, idade, altura e aluno_aprovado, cada uma de um tipo de dado diferente. Imprime no console (ou na tela) as informações armazenadas em cada variável.</p>
            <pre><code>
                nome = "Lucas"
                idade = 25
                altura = 1.75
                aluno_aprovado = True

                print("Nome:", nome)
                print("Idade:", idade)
                print("Altura:", altura)
                print("Aluno aprovado?", aluno_aprovado)
            </code></pre>
            <p>output:</p>
            <pre><code>
                Nome: Lucas
                Idade: 25
                Altura: 1.75
                Aluno aprovado? True
            </code></pre>

            <h2>Resumo</h2>
            <p>Int: Números inteiros, sem parte decimal (ex: 10, -5).</p>
            <p>Float: Números com parte decimal (ex: 3.14, 1.75).</p>
            <p>String: Sequências de texto (ex: "Lucas", "Olá, Mundo!").</p>
            <p>Boolean: Verdadeiro (True) ou Falso (False).</p>
            <p>Cada tipo de dado é útil em diferentes situações. Saber qual tipo usar ajuda a escrever códigos mais claros e eficientes.</p>

            <h2>Dicas:</h2>
            <p>Tente mudar os valores das variáveis para ver como o programa se comporta.</p>

            <h2>Erros:</h2>
            <p>Erros podem acontecer enquanto você programa, mas isso é normal! O importante é saber como lidar com eles para corrigir seu código.</p>
            <p>Quando ocorre um erro, o Python geralmente mostra uma mensagem de erro no console. Essa mensagem pode parecer complicada, mas ela é muito útil. Aqui está um exemplo simples:</p>
            <pre><code>
                nome = "Lucas"
                print(naome)
            </code></pre>
            <p>output:</p>
            <pre><code><img src="aulas_imagens/m2/error.png" alt="error"></pre>
            <p>Esse código dará um erro porque naome foi digitado errado.</p>
            <p>A mensagem de erro pode ser algo assim: NameError: name 'naome' is not defined</p>
            <p>O que isso significa?</p>
            <p>Python está dizendo que você tentou usar uma variável chamada naome, mas essa variável não existe. Isso provavelmente aconteceu porque houve um erro de digitação.</p>

            <h2>ATIVIDADE!</h2>
            <p><strong>ATENÇÃO:</strong> Resolva as questões conforme o problema apresentado. Ao final de cada questão haverá a resolução do problema em um arquivo, não abra o arquivo até que tenha terminado o código, apenas se houver muita dúvida e dificuldade.</p>
            <br>
            <h3>Questão 1: Identificando Informações Pessoais</h3>
            <p><strong>Descrição:</strong> Crie um programa que armazene informações pessoais em variáveis e as exiba.</p>
            <p><strong>Enunciado:</strong></p>
            <ul>
                <li>Declare uma variável do tipo string para armazenar o nome de uma pessoa.</li>
                <li>Declare uma variável do tipo int para armazenar a idade dessa pessoa.</li>
                <li>Declare uma variável do tipo float para armazenar a altura dessa pessoa em metros.</li>
                <li>Declare uma variável do tipo boolean que indique se essa pessoa está matriculada na escola (True ou False).</li>
                <li>Exiba todas essas informações.</li>
            </ul>
            <br><br><br>
            <p><strong>Resposta</strong></p>
            <img src="aulas_imagens/m2/resposta1.png" alt="1">
            <br>
            <h3>Questão 2: Características de um Carro</h3>
            <p><strong>Descrição:</strong> Crie um programa que armazene características de um carro em variáveis e as exiba.</p>
            <p><strong>Enunciado:</strong></p>
            <ul>
                <li>Declare uma variável do tipo string para armazenar a marca do carro.</li>
                <li>Declare uma variável do tipo int para armazenar o ano de fabricação.</li>
                <li>Declare uma variável do tipo float para armazenar o valor do carro.</li>
                <li>Declare uma variável do tipo boolean que indique se o carro é novo (True) ou usado (False).</li>
                <li>Exiba todas essas informações.</li>
            </ul>
            <br><br><br>
            <p><strong>Resposta</strong></p>
            <img src="aulas_imagens/m2/resposta2.png" alt="2" class="arrumar-image">
            <br>
            <h3>Questão 3: Detalhes de uma Viagem</h3>
            <p><strong>Descrição:</strong> Crie um programa que armazene detalhes de uma viagem em variáveis e os exiba.</p>
            <p><strong>Enunciado:</strong></p>
            <ul>
                <li>Declare uma variável do tipo string para armazenar o destino da viagem.</li>
                <li>Declare uma variável do tipo int para armazenar a duração da viagem em dias.</li>
                <li>Declare uma variável do tipo float para armazenar a distância em quilômetros até o destino.</li>
                <li>Declare uma variável do tipo boolean que indique se a viagem será de avião (True) ou não (False).</li>
                <li>Exiba todas essas informações.</li>
            </ul>
            <br><br><br>
            <p><strong>Resposta</strong></p>
            <img src="aulas_imagens/m2/resposta3.png" alt="3" class="arrumar-image">
            <br>

            <h3>Questão 4: Dados de um Produto</h3>
            <p><strong>Descrição:</strong> Crie um programa que armazene os dados de um produto em variáveis e os exiba.</p>
            <p><strong>Enunciado:</strong></p>
            <ul>
                <li>Declare uma variável do tipo string para armazenar o nome de um produto.</li>
                <li>Declare uma variável do tipo int para armazenar a quantidade disponível em estoque.</li>
                <li>Declare uma variável do tipo float para armazenar o preço do produto.</li>
                <li>Declare uma variável do tipo boolean que indique se o produto está em promoção (True) ou não (False).</li>
                <li>Exiba todas essas informações.</li>
            </ul>
            <br><br><br>
            <p><strong>Resposta</strong></p>
            <img src="aulas_imagens/m2/resposta4.png" alt="4" class="arrumar-image">
            <br>

            <h3>Questão 5: Detalhes de um Evento</h3>
            <p><strong>Descrição:</strong> Crie um programa que armazene os detalhes de um evento em variáveis e os exiba.</p>
            <p><strong>Enunciado:</strong></p>
            <ul>
                <li>Declare uma variável do tipo string para armazenar o nome do evento.</li>
                <li>Declare uma variável do tipo int para armazenar o número de participantes esperados.</li>
                <li>Declare uma variável do tipo float para armazenar o valor do ingresso.</li>
                <li>Declare uma variável do tipo boolean que indique se o evento é gratuito (True) ou pago (False).</li>
                <li>Exiba todas essas informações.</li>
            </ul>
            <br><br><br>
            <p><strong>Resposta</strong></p>
            <img src="aulas_imagens/m2/resposta5.png" alt="5" class="arrumar-image">

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