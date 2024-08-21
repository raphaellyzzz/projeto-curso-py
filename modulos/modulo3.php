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
    <title>Módulo 3</title>
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
            <h1>Operadores em Python</h1>

            <h2>Operadores Aritméticos</h2>
            <p>Os operadores aritméticos são fundamentais para a manipulação de números em Python. Vamos explorar cada operador com mais detalhes e exemplos.</p>

            <h3>Adição (+)</h3>
            <p>O operador de adição + soma dois números.</p>
            <pre>
            a = 10
            b = 5
            resultado = a + b #resultado será 15
            print(resultado)
            </pre>

            <h3>Subtração (-)</h3>
            <p>O operador de subtração - subtrai o segundo número do primeiro.</p>
            <pre>
            a = 10
            b = 5
            resultado = a - b #resultado será 5
            print(resultado)
            </pre>

            <h3>Multiplicação ( * )</h3>
            <p>O operador de multiplicação * multiplica dois números.</p>
            <pre>
            a = 10
            b = 5
            resultado = a * b #resultado será 50
            print(resultado)
            </pre>

            <h3>Divisão ( / )</h3>
            <p>O operador de divisão / divide o primeiro número pelo segundo e retorna um número de ponto flutuante.</p>
            <pre>
            a = 10
            b = 5
            resultado = a / b #resultado será 2.0
            print(resultado)
            </pre>

            <h3>Divisão Inteira (//)</h3>
            <p>O operador de divisão inteira // divide o primeiro número pelo segundo e retorna a parte inteira do resultado, descartando qualquer parte fracionária.</p>
            <pre>
            a = 10
            b = 3
            resultado = a // b #resultado será 3
            print(resultado)
            </pre>

            <h3>Módulo (%)</h3>
            <p>O operador de módulo % retorna o resto da divisão do primeiro número pelo segundo.</p>
            <pre>
            a = 10
            b = 3
            resultado = a % b #resultado será 1
            print(resultado)
            </pre>

            <h3>Exponenciação (**)</h3>
            <p>O operador de exponenciação ** eleva o primeiro número à potência do segundo.</p>
            <pre>
            a = 2
            b = 3
            resultado = a ** b #resultado será 8
            print(resultado)
            </pre>

            <h3>Precedência dos Operadores Aritméticos</h3>
            <p>A precedência dos operadores aritméticos determina a ordem em que as operações são realizadas quando há múltiplos operadores em uma expressão. Em Python, a precedência segue regras semelhantes às da matemática. Aqui está a lista de operadores aritméticos em ordem de precedência (do mais alto para o mais baixo):</p>
            <ul>
                <li>Exponenciação (**)</li>
                <li>Negação unária (-) (ex: -a) e Positivo unário (+) (ex: +a)</li>
                <li>Multiplicação (*), Divisão (/), Divisão inteira (//), e Módulo (%)</li>
                <li>Adição (+) e Subtração (-)</li>
            </ul>

            <h3>Uso de Parênteses</h3>
            <p>Os parênteses são usados para alterar a ordem natural de avaliação, garantindo que certas operações sejam realizadas antes de outras, independentemente de sua precedência natural. Isso ajuda a tornar o código mais legível e a evitar erros de lógica.</p>
            <p>Exemplo com Parênteses:</p>
            <pre>
            resultado = (2 + 3) * (4 - 1) ** 2
            # Avaliação passo a passo:
            # 1. Parênteses: 2 + 3 = 5
            # 2. Parênteses: 4 - 1 = 3
            # 3. Exponenciação: 3 ** 2 = 9
            # 4. Multiplicação: 5 * 9 = 45
            print(resultado) #Saída: 45
            </pre>

            <h2>Operadores Relacionais</h2>
            <p>Os operadores relacionais são usados para comparar dois valores e retornam um valor booleano (True ou False). Eles são fundamentais para tomar decisões com base em condições. Vamos explorar cada operador com exemplos.</p>

            <h3>Igual a (==)</h3>
            <p>Verifica se dois valores são iguais.</p>
            <pre>
            a = 5
            b = 5
            resultado = (a == b) #resultado será True
            print(resultado)
            </pre>

            <h3>Diferente de (!=)</h3>
            <p>Verifica se dois valores são diferentes.</p>
            <pre>
            a = 5
            b = 3
            resultado = (a != b) #resultado será True
            print(resultado)
            </pre>

            <h3>Maior que (>)</h3>
            <p>Verifica se o primeiro valor é maior que o segundo.</p>
            <pre>
            a = 5
            b = 3
            resultado = (a > b) #resultado será True
            print(resultado)
            </pre>

            <h3>Menor que (<)</h3>
            <p>Verifica se o primeiro valor é menor que o segundo.</p>
            <pre>
            a = 5
            b = 3
            resultado = (a < b) #resultado será False
            print(resultado)
            </pre>

            <h3>Maior ou igual a (>=)</h3>
            <p>Verifica se o primeiro valor é maior ou igual ao segundo.</p>
            <pre>
            a = 5
            b = 5
            resultado = (a >= b) #resultado será True
            print(resultado)
            </pre>

            <h3>Menor ou igual a (<=)</h3>
            <p>Verifica se o primeiro valor é menor ou igual ao segundo.</p>
            <pre>
            a = 5
            b = 5
            resultado = (a <= b) #resultado será True
            print(resultado)
            </pre>

            <h2>Operadores Lógicos</h2>
            <p>Os operadores lógicos são usados para combinar expressões booleanas (que são True ou False). Em Python, temos três operadores lógicos principais: and, or e not. Eles são usados para criar condições compostas que controlam o fluxo do programa. Vamos explorar cada operador com exemplos detalhados.</p>

            <h3>Operador and</h3>
            <p>O operador and retorna True apenas se ambas as expressões forem verdadeiras.</p>
            <pre>
            a = True
            b = False
            resultado = a and b #resultado será False
            print(resultado)
            </pre>
            <p>Exemplos:</p>
            <pre>
            # Verificando se um número está dentro de um intervalo:
            numero = 15
            if numero > 10 and numero < 20:
                print("O número está entre 10 e 20") #Esta linha será impressa

            # Verificando múltiplas condições:
            idade = 18
            temCarteira = True
            if idade >= 18 and temCarteira:
                print("Pode dirigir") #Esta linha será impressa
            </pre>

            <h3>Operador or</h3>
            <p>O operador or retorna True se pelo menos uma das expressões for verdadeira.</p>
            <pre>
            a = True
            b = False
            resultado = a or b #resultado será True
            print(resultado)
            </pre>
            <p>Exemplos:</p>
            <pre>
            # Verificando se um número está fora de um intervalo:
            numero = 5
            if numero < 10 or numero > 20:
                print("O número está fora do intervalo de 10 a 20") #Esta linha será impressa

            # Verificando se um estudante passou em pelo menos uma disciplina:
            nota_matematica = 50
            nota_portugues = 80

            if nota_matematica >= 60 or nota_portugues >= 60:
                print("Passou em pelo menos uma disciplina") #Esta linha será impressa
            </pre>

            <h3>Operador not</h3>
            <p>O operador not inverte o valor lógico da expressão. Se a expressão for True, not a torna False, e vice-versa.</p>
            <pre>
            a = True
            resultado = not a #resultado será False
            print(resultado)
            </pre>
            <p>Exemplos:</p>
            <pre>
            # Verificando se uma variável é falsa:
            choveu = False
            if not choveu:
                print("Não choveu hoje") #Esta linha será impressa

            # Negando uma condição:
            idade = 16
            if not (idade >= 18):
                print("Não pode votar") #Esta linha será impressa
            </pre>

            <h3>Precedência dos Operadores Lógicos</h3>
            <p>A ordem de precedência dos operadores lógicos é importante para garantir que as expressões sejam avaliadas corretamente:</p>
            <ol>
                <li>not</li>
                <li>and</li>
                <li>or</li>
            </ol>
            <p>Parênteses podem ser usados para alterar a ordem de avaliação e tornar as expressões mais claras:</p>
            <pre>
            a = True
            b = False
            c = True

            # Sem parênteses, 'not' é avaliado antes de 'and'
            resultado = not a and b or c #resultado será True

            # Usando parênteses para alterar a ordem
            resultado = not (a and b) or c #resultado será True
            </pre>
            <p><a href="https://drive.google.com/file/d/1TDYC8apFIxSe-kPg3xd4rGC_KVDTG83e/view?usp=drive_link">Clique aqui para ir aos exercicios!</a></p>
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