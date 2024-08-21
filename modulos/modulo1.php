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
            <h1>Introdução à Lógica de Programação</h1>
            <p>A programação não está apenas ligada a computadores e softwares. Na verdade, muitos aspectos da nossa vida cotidiana envolvem lógica e algoritmos semelhantes aos usados na programação. Vamos explorar como conceitos de programação são aplicados em atividades diárias e rotinas simples.</p>
            <p>Imagine a situação a seguir, onde você precisa fazer um bolo:</p>
            <ul>
                <li>Reúna os ingredientes.</li>
                <li>Misture os ingredientes na ordem correta.</li>
                <li>Pré-aqueça o forno.</li>
                <li>Despeje a mistura em uma forma.</li>
                <li>Coloque a forma no forno.</li>
                <li>Asse por 30 minutos.</li>
                <li>Retire o bolo do forno e deixe esfriar.</li>
            </ul>
            <p>Cada uma dessas etapas é uma instrução que, quando executada na ordem correta, resultará em um bolo pronto. Entretanto, cada pessoa define uma sequência de passos para fazer o bolo, podendo remover ou até adicionar alguns passos já definidos. Esse tipo de percepção é usada em qualquer coisa que fazemos em nosso dia a dia, desde as mais simples às mais complicadas e que, muitas das vezes, não nos damos conta que diariamente criamos algoritmos como este passo a passo acima.</p>
            <h2>1. O que é algoritmo?</h2>
            <p>Um algoritmo é uma sequência finita de instruções bem definidas e ordenadas que, ao serem seguidas, resolvem um problema ou realizam uma tarefa específica. Em termos simples, é um passo a passo que descreve como algo deve ser feito.</p>
            <h3>Como se desenvolve um algoritmo?</h3>
            <p>Ao desenvolver um algoritmo, devemos defini-lo com clareza e de forma precisa o conjunto de instruções que serão utilizadas para a resolução do problema específico. Então antes de programar, você precisa saber e planejar o que precisa ser feito, para criar um passo a passo, ou seja, um algoritmo e verificar se o resultado obtido é o resultado esperado para resolver o problema. Ao entender esse conceito, podemos definir e implementar nossos algoritmos em uma linguagem de programação. No caso deste curso, implementamos na linguagem Python.</p>
            <h3>Passos para desenvolver um algoritmo:</h3>
            <ol>
                <li>
                    <b>Entenda o problema:</b>
                    <ul>
                        <li>Identifique a entrada: Quais dados serão fornecidos?</li>
                        <li>Identifique a saída: Quais dados serão produzidos?</li>
                    </ul>
                    <p><i>Exemplo:</i> Faça um algoritmo que some 2 números digitados pelo usuário. Qual é a entrada? Dois números. Qual a saída? A soma desses números.</p>
                </li>
                <li>
                    <b>Planeje uma solução:</b>
                    <ul>
                        <li>Quebre o problema em etapas menores: Divida o problema em passos.</li>
                        <li>Pense no fluxo dos dados: Como os dados irão fluir entre as partes do algoritmo?</li>
                    </ul>
                    <p><i>Exemplo:</i> Para o problema de somar dois números:</p>
                    <pre>1. Leia o primeiro número.<br>2. Leia o segundo número.<br>3. Some os dois números.<br>4. Exiba o resultado.</pre>
                </li>
                <li>
                    <b>Escolha a representação:</b>
                    <p>Escolha como você vai representar o algoritmo. Pode ser em forma de pseudocódigo, fluxograma ou até diretamente em uma linguagem de programação.</p>
                    <ul>
                        <li><b>Pseudocódigo:</b> Uma ótima escolha para delinear a solução em linguagem simples.</li>
                        <li><b>Fluxograma:</b> Útil para visualizar o fluxo do algoritmo.</li>
                        <li><b>Código:</b> Usado para a implementação final em uma linguagem de programação.</li>
                    </ul>
                    <pre><b>Exemplo (Pseudocódigo):</b><br>Início<br>Leia número1<br>Leia número2<br>soma -> número1 + número2<br>Escreva soma<br>Fim</pre>
                </li>
                <li>
                    <b>Verifique e Refine a Solução:</b>
                    <ul>
                        <li>Teste seu algoritmo: Use exemplos simples para testar se ele funciona conforme o esperado.</li>
                        <li>Refine o algoritmo: Se necessário, simplifique ou melhore a lógica do algoritmo para torná-lo mais eficiente.</li>
                    </ul>
                    <p><i>Exemplo:</i> Teste o algoritmo com diferentes pares de números para garantir que a soma é calculada corretamente.</p>
                </li>
                <li>
                    <b>Implemente na linguagem de programação:</b>
                    <p>Após a solução ser testada e refinada, você está pronto para implementar o algoritmo na linguagem de programação.</p>
                </li>
            </ol>
            <h2>2. Lógica de programação</h2>
            <h3>O que é lógica de programação?</h3>
            <p>Lógica de programação é o processo de pensar em soluções para problemas de forma estruturada. Ela envolve a criação de um passo a passo para resolver uma tarefa, que pode ser implementada em um computador. A lógica de programação é a base de todo desenvolvimento de software.</p>

            <h3>Por que lógica de programação em Python?</h3>
            <p>Python é uma linguagem de programação de alto nível. Isso significa que ela, em meio a tantas outras linguagens, está mais próxima da nossa linguagem humana, facilitando assim a nossa compreensão. Por possuir simplicidade e semântica clara, acabou tornando-se uma linguagem bastante utilizada para ensinar programação. Python permite que os alunos se concentrem na lógica sem se perder em detalhes técnicos complexos.</p>

            <h3>Estruturas Básicas de Controle</h3>
            <p>As estruturas de controle servem para decidir quais blocos de código serão executados. Na linguagem Python, o espaço dado antes de uma linha (indentação) é utilizado para demarcar esses blocos de código, e são obrigatórios quando se trata de estruturas de controle. Vamos ver algumas dessas estruturas básicas:</p>

            <h4>Sequência</h4>
            <p>É a forma mais simples de estrutura de controle, onde os comandos são executados um após o outro. Em Python, a sequência é representada pela própria ordem das linhas de código.</p>
            <pre><img src="aulas_imagens/m1/1.png" alt="1"></pre>

            <h4>Decisão</h4>
            <p>Permite-se que o programa tome decisões com base em condições. O comando <code>if</code> é usado para isso. Observe no exemplo a seguir:</p>
            <pre><img src="aulas_imagens/m1/2.png" alt="2"></pre>

            <h4>Repetição</h4>
            <p>Elas são usadas para executar um bloco de código repetidamente.</p>
            <pre><img src="aulas_imagens/m1/3.png" alt="3"></pre>

            <h2>3. O que são variáveis?</h2>
            <p>Variáveis são usadas para armazenar e manipular dados ao longo da execução de um programa. É um espaço na memória do computador que é reservado para armazenar informações temporárias durante a execução do código.</p>
            <p>Imagine uma variável como uma caixa rotulada com o nome "idade". Dentro dessa caixa, você pode colocar um número que representa a idade de uma pessoa, assim como no exemplo a seguir :</p>
    
            <pre><img src="aulas_imagens/m1/4.png" alt="4"></pre>

            <h2>Características das Variáveis</h2>
            <ol>
                <li>Nomeação: Toda variável tem um nome, que é escolhido pelo programador. Esse nome deve ser significativo para ajudar a entender o que a variável representa. Por exemplo, idade, altura, nome são nomes de variáveis que indicam o tipo de dado que elas armazenam.</li>
                <li>Tipo de Dado: Variáveis podem armazenar diferentes tipos de dados, como números inteiros, números decimais, texto (strings), listas, entre outros. Em algumas linguagens de programação, você precisa especificar o tipo de dado da variável. Em Python, o tipo é determinado automaticamente com base no valor atribuído.</li>
                <li>Atribuição de Valor: Para dar um valor a uma variável, usamos o operador de atribuição (=). O valor à direita do = é armazenado na variável à esquerda.</li>
            </ol>

            <h2>Tipos de Dados :</h2>
            <ul>
                <li>Inteiros : <code>int</code> (ex: 10)</li>
                <li>Floats : <code>float</code> (ex: 10.5)</li>
                <li>Strings : <code>str</code> (ex: "Ola")</li>
                <li>Booleanos : <code>bool</code> (ex: True ou False)</li>
            </ul>

            <h2>5 - Operadores</h2>
            <p>*Comentários no código em python, podem ser feitos adicionando o caractere cerquilha '#' antes do texto desejado. Os comentários são ignorados pelo compilador. *</p>

            <h3>Aritméticos :</h3>
            <pre><img src="aulas_imagens/m1/5.png" alt="5"></pre>
            <h2>Relacionais :</h2>
            <pre><img src="aulas_imagens/m1/6.png" alt="6"></pre>
            <h2>Lógicos :</h2>
            <pre><img src="aulas_imagens/m1/7.png" alt="7"></pre>
            <h2>6 - Entrada e Saída de Dados</h2>
            <h3>Entrada de dados :</h3>
            <pre><img src="aulas_imagens/m1/8.png" alt="8"></pre>
            <h3>Saída de dados :</h3>
            <pre><img src="aulas_imagens/m1/5.png" alt="9"></pre>
            <h2>3 - Exercícios</h2>
            <ol>
                <li>Escreva um algoritmo que leia dois números inteiros e exiba a soma deles.</li>
            </ol>
            <p>Exemplo de Entrada:</p>
            <ul>
                <li>Número 1: 5</li>
                <li>Número 2: 3</li>
            </ul>
            <p>Exemplo de Saída:</p>
            <ul>
                <li>A soma dos números é: 8</li>
            </ul>
            <h2>3 - Exercícios</h2>
            <ol>
                <li>Desenvolva um algoritmo que leia um número inteiro e informe se ele é par ou ímpar.</li>
            </ol>
            <p>Exemplo de Entrada:</p>
            <ul>
                <li>Número: 7</li>
            </ul>
            <p>Exemplo de Saída:</p>
            <ul>
                <li>O número 7 é ímpar.</li>
            </ul>
            
            <ol start="3">
                <li>Escreva um algoritmo que leia três notas de um aluno e calcule a média aritmética e exiba-o.</li>
                <br>
                <li>Desenvolva um algoritmo que exiba uma contagem regressiva de 10 até 1 e, ao final, exiba a mensagem "Feliz Ano Novo!".</li>
            </ol>
            <p>Exemplo de Saída:</p>
            <ul>
                <li>10</li>
                <li>9</li>
                <li>8</li>
                <li>...</li>
                <li>1</li>
                <li>Feliz Ano Novo!</li>
            </ul>
            
            <ol start="5">
                <li>Crie um programa que peça dois números ao usuário e exiba a soma desses números.</li>
            </ol>
            <p>Exemplo de entrada:</p>
            <ul>
                <li>números: 3 e 6</li>
            </ul>
            <p>Exemplo de saída:</p>
            <ul>
                <li>números: 9</li>
            </ul>
            
            <p>Chegamos ao final da nossa aula de hoje.</p>
            <p>Espero que você tenha compreendido os conceitos abordados e esteja pronto para continuar sua jornada no aprendizado de programação. Praticar o que foi discutido é essencial para consolidar seu conhecimento, então não deixe de revisar e tentar resolver alguns exercícios.</p>
            <p>Na aula a seguir, exploraremos melhor conceitos fundamentais sobre variáveis e como trabalhá-las em Python. Vamos nos aprofundar nos tipos de dados, como float e int, entendendo suas diferenças e como utilizá-los para resolver problemas práticos. <br><br>Até lá, bons estudos!</p>
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