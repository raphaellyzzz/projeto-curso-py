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
    <title>Módulo 6</title>
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
            <h1>Condicionais</h1>
            <p>PS: Essa aula tem um arquivo no Colab, <a href="https://colab.research.google.com/drive/16gJmwpJJ8e7XYcp1XPyb-a-TcuTi1_wN?usp=sharing">clique aqui para acessar</a></p>
            <h1>INTRODUÇÃO!</h1>

            <p>A estrutura condicional é uma seção que ajuda a definir condições para a execução de determinados blocos de comandos. Em vez de executar tudo de uma vez, sem nenhuma interrupção, o programa deve parar para executar um teste e decidir qual caminho seguir.</p>

            <p>É como uma bifurcação, um momento importante para tomada de decisão. Nesse caso, a decisão é o resultado de uma análise, de uma comparação.</p>

            <p>Funciona assim: Se essa condição X é positiva/true, então execute esse bloco de comandos; senão, execute esse outro bloco de comandos.</p>

            <p>Parte-se do pressuposto que o “senão” traz um bloco diferente, em contraponto com o bloco do “se”.</p>

            <p>Assim, você pode direcionar o fluxo de execução para pular blocos e executar exatamente o que se precisa.</p>

            <p>São essas condicionais: <code>if</code>, <code>elif</code> e <code>else</code> no qual cada um executando alguma condição imposta pelo programador e que realiza aquilo que lhe é projetado como no exemplo abaixo:</p>

            <h2>Crie um código que leia do teclado o nome do aluno e suas 4 médias do ano letivo de 2024. Ao final do programa exiba na tela se o aluno foi aprovado com média a partir de 7 pontos, recuperação entre 4 e menor que 7, e reprovado se a nota for menor que 4.</h2>

            <pre>
            nome = input("Digite so seu nome: ")
            nota1 = float(input("Digite sua 1º nota: "))
            nota2 = float(input("Digite sua 2º nota: "))
            nota3 = float(input("Digite sua 3º nota: "))
            nota4 = float(input("Digite sua 4º nota: "))

            media = (nota1 + nota2 + nota3 + nota4) / 4

            if media >= 7:
            print(f"O aluno {nome} foi aprovado com média {media}")

            elif media >= 4:
            print(f"O aluno {nome} foi para recuperação com média {media}")

            else:
            print(f"O aluno {nome} foi reprovado com média {media}")
            </pre>

            <h2>Output:</h2>
            <pre>
            Digite so seu nome: 7
            Digite sua 1º nota: 7
            Digite sua 2º nota: 7
            Digite sua 3º nota: 7
            Digite sua 4º nota: 7
            O aluno 7 foi aprovado com média 7.0
            </pre>

            <h2>Explicação das condicionais no exemplo acima:</h2>
            <pre><code>
            if media >= 7:
            print(f"O aluno {nome} foi aprovado com média {media}")
            </pre></code>
            <p>
            if foi usado para dizer ao código que, se a variável citada for maior > ou igual = ao número 7, que ele execute o comando que esta dentro dele.
            </p>
            <pre><code>
            elif media >= 4 and media < code 7:
            print(f"O aluno {nome} foi para recuperação com média {media}") 
            </pre></code>
            <p>
            elif é usado para que, se ao caso da condicional if não for verdadeira ela verificara a proxima, neste caso o elif. No codigo acima foi usado para que se a variável citada for maior > ou igual = ao número 4 seja execute o comando que esta dentro dela.
            </p>
            <pre><code>
            else:
            print(f"O aluno {nome} foi reprovado com média {media}")
            </code></pre>
            <p>
            Para terminar temos o else, ao qual é usado para, no caso de todas as últimas condicionais forem todas falsas, ela consequentemente será executada como verdadeira. Vemos no código que depois de verificar o if e o elif ao qual forem falsas, sera executado o comando que esta dentro dele.

            OBS: dentro dos parênteses "( )" do comando "print" pode-se observar a letra "F" e chaves "{}". Ambos são usados para formatação, e permitem a facilidade de colocar resultados das variável dentro do "print". É fácil e apenas precisar digitar a letra "F" antes de digitar o texto e as chaves "{}" no lugar dentro do texto onde deseja mostrar na tela o resultado da variável, podendo ser em texto ou número.
            </p>

            <h2>ATIVIDADE!</h2>

            <p><strong>ATENÇÃO:</strong> Resolva as questões conforme o problema apresentado. Ao final de cada questão haverá a resolução do problema em um arquivo, não abra o arquivo até que tenha terminado o código, apenas se houver muita dúvida e dificuldade.</p>

            <h3>1. Faça um programa que receba dois números e execute as operações listadas a seguir, de acordo com a escolha do usuário:</h3>
            <table>
                <tr>
                    <th>Escolha do Usuário</th>
                    <th>Operação</th>
                </tr>
                <tr>
                    <td>1</td>
                    <td>Média entre os números digitados</td>
                </tr>
                <tr>
                    <td>2</td>
                    <td>Diferença do MAIOR pelo MENOR número</td>
                </tr>
                <tr>
                    <td>3</td>
                    <td>Produto entre os números digitados</td>
                </tr>
                <tr>
                    <td>4</td>
                    <td>Divisão do primeiro pelo segundo</td>
                </tr>
            </table>
            <p>Se a opção digitada for inválida (ex: 5), mostre uma mensagem de erro e termine a execução do programa.</p>

            <p><strong>OBS:</strong> <code>IF</code>, <code>ELIF</code> e <code>ELSE</code> podem ser usados dentro de outros <code>IF</code>'s, <code>ELIF</code>'s e <code>ELSE</code>'s!</p>
            <p>Resposta</p>
            <a href="https://drive.google.com/file/d/1eCQEKci6KJtihuClnWsAq7gWyJVGJE99/view" target="_blank">Clique aqui</a>
            <h3>2. Faça um programa que receba três números e mostre na tela o maior.</h3>
            <p>Resposta</p>
            <a href="https://drive.google.com/file/d/1UhV-aI51DfHWIQC_mwg6kYZXTqJ4WMk3/view" target="_blank">Clique aqui</a>
            <h3>3. Faça um programa para calcular e mostrar o salário reajustado de um funcionário. O percentual de aumento encontra-se na tabela a seguir:</h3>
            <p>Resposta</p>
            <a href="https://drive.google.com/file/d/1PlPDBQI_pqeEi-h1mlzVWW-e4a8LNXXH/view" target="_blank">Clique aqui</a>
            <h3>4. Um banco concederá um crédito especial aos seus clientes, de acordo com o saldo médio no último ano. Faça um programa que receba o saldo médio de um cliente e calcule o valor do crédito, de acordo com a tabela a seguir. Em seguida, mostre o saldo médio e o valor do crédito.</h3>
            <p>Resposta</p>
            <a href="https://drive.google.com/file/d/1RdG7JkCdSoGlDuGWdgfJhx1lwEKmZ4Kl/view" target="_blank">Clique aqui</a>
            <h3>5. Uma empresa decide dar um aumento de 30% aos funcionários com salários inferiores a R$ 500,00. Faça um programa que receba o salário do funcionário e mostre o valor do salário reajustado ou uma mensagem, caso ele não tenha direito ao aumento.</h3>
            <p>Resposta</p>
            <a href="https://drive.google.com/file/d/1ZDEayyVK1kTrb_6M9TRoNeA3f8QbHGXN/view" target="_blank">Clique aqui</a>

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