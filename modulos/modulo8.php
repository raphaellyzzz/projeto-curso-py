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
    <title>Módulo 8</title>
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
            <h1>Funções</h1>
            <h1>Funções em Python</h1>

            <h2>O que são funções e para que servem?</h2>
            <p>Sendo estruturas essenciais do código, as funções permitem definir um bloco de código reutilizável que pode ser executado muitas vezes dentro de um programa. É uma estrutura que agrupa partes do código, criando soluções modulares para problemas complexos.</p>

            <p>As funções em Python cumprem objetivos específicos definidos pelo usuário ou pela linguagem. Elas recebem como parâmetros dados de entrada chamados <strong>argumentos</strong>, que são indicados pelo usuário ou automaticamente, sendo processados e retornando como dados de saída.</p>

            <p>As funções Python servem para:</p>
            <ul>
                <li>Dividir e classificar o código em partes mais simples para depurar e programar com maior facilidade.</li>
                <li>Reutilizar o código, evitando repetições desnecessárias em um programa.</li>
            </ul>

            <h2>Funções Built-in</h2>
            <p>A biblioteca do Python contém várias funções embutidas, que podem ser utilizadas em qualquer parte do código sem a necessidade de serem criadas ou importadas. Sabe o famoso <code>print()</code> que comumente usamos? Ele é uma função embutida (built-in) que serve para imprimir algo na tela. Outro exemplo de função built-in muito comum que utilizamos é a função <code>input()</code>, que serve para receber uma entrada inserida pelo usuário. Viu como as funções já faziam parte da sua vida esse tempo todo?</p>

            <p>Neste <a href="https://docs.python.org/3/library/functions.html" target="_blank">link</a> a seguir você pode ver todas as funções embutidas do Python: <em>Funções embutidas — Documentação Python 3.12.4</em></p>

            <h2>Criando suas próprias funções</h2>
            <p>A sintaxe de uma função é definida por três partes: nome, parâmetros e corpo, o qual agrupa uma sequência de linhas que representa algum comportamento. No código abaixo, temos um exemplo de declaração de função em Python:</p>

            <pre>
            def hello(meu_nome):
                print('Olá', meu_nome)
            </pre>

            <p>Essa função, de nome <code>hello</code>, tem como objetivo imprimir o nome que lhe é passado por parâmetro (também chamado de argumento). A palavra reservada <code>def</code>, na primeira linha, explicita a definição da função naquele ponto. Em seguida, entre parênteses, temos o parâmetro <code>meu_nome</code>. Ainda na mesma linha, observe a utilização dos dois pontos (:), que indicam que o código indentado nas linhas abaixo faz parte da função que está sendo criada. Aqui, é importante ressaltar que, para respeitar a sintaxe da linguagem, a linha 2 está avançada em relação à linha 1.</p>

            <h3>Não sabe o que é um parâmetro ou argumento? A gente te explica:</h3>
            <p><strong>Parâmetros:</strong> são os nomes dados aos atributos que uma função pode receber. Definem quais argumentos são aceitos por uma função, podendo ou não ter um valor padrão (default).</p>
            <p><strong>Argumentos:</strong> são os valores que realmente são passados para uma função.</p>

            <p>Caso seja necessário, também é possível definir funções com nenhum ou vários parâmetros, como no código abaixo:</p>

            <pre>
            def minha_funcao(parametro1, parametro2):
                soma = parametro1 + parametro2
                return soma
            </pre>

            <p>Nesse exemplo, a função <code>minha_funcao</code> recebe dois argumentos (<code>parametro1</code> e <code>parametro2</code>) e depois soma esses dois valores. Perceba que dessa vez utilizamos o <code>return</code> no final da função, e como o próprio nome já diz, ele serve para retornar algo, nesse caso, ele retornará a variável <code>soma</code>. Agora que temos um retorno na função, poderemos usá-lo quando chamarmos ela ao longo do código.</p>

            <h2>Chamando uma função</h2>
            <p>Uma vez que você tenha definido uma função, pode chamá-la de qualquer lugar no seu código. Para chamar a função <code>minha_funcao</code> do exemplo anterior, você pode fazer o seguinte:</p>

            <pre>
            resultado = minha_funcao(2, 3)
            print(resultado)
            </pre>

            <p>Esse código irá chamar a função <code>minha_funcao</code> com os argumentos 2 e 3, retornando o valor 5, que será impresso na tela após ter sido guardado na variável <code>resultado</code>.</p>

            <h2>Exercícios de fixação</h2>
            <ol>
                <li>Crie uma função que recebe o nome do usuário como parâmetro e imprima na tela uma mensagem de boas-vindas.</li>
                <li>Crie uma função que recebe três notas do usuário como parâmetros e retorna a média das notas.</li>
                <li>Crie uma função que recebe um número como parâmetro e retorna se esse número é par ou ímpar.</li>
            </ol>
            <br><br><br>
            <h2>Resolução</h2>
            <h3>Questão 1</h3>
            <pre><code>
            def imprimirMsg(nome):
                print('Olá', nome + ', seja bem-vindo!')


            nome_usuario = input('Digite seu nome: ')
            imprimirMsg(nome_usuario)
            </code></pre>
            <h3>Questão 2</h3>
            <pre><code>
            def calcularMedia(n1, n2, n3):
                media = (n1+n2+n3) / 3
                return media


            nota1 = float(input('Digite a primeira nota: '))
            nota2 = float(input('Digite a segunda nota: '))
            nota3 = float(input('Digite a terceira nota: '))


            resultado = calcularMedia(nota1, nota2, nota3)
            print(resultado)
            </code></pre>
            <h3>Questão 3</h3>
            <pre><code>
            def verificarParImpar(num):
                if num % 2 == 0:
                    return 'Esse número é par.'
                else:
                    return 'Esse número é ímpar.'


            numero = int(input('Digite um número: '))
            print(verificarParImpar(numero))
            </code></pre>
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