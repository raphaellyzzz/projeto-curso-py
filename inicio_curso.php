<?php
    session_start();
    include_once('config.php');

    //verificar se o usuario ta logado
    if (!isset($_SESSION['usuario_id'])) {
        header('Location: login.php');
        exit();
    }

    $usuario_id = $_SESSION['usuario_id'];
    $logado = $_SESSION['nome'];

    // verificar se o id de usuario está existindo
    //
    // if (isset($_SESSION['usuario_id'])) {
    //     $usuario_id = $_SESSION['usuario_id'];
    // } 
    // else {
    //     header('Location: login.php');
    //     exit();
    // }


?>

<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Página do Curso</title>
    <link rel="stylesheet" href="style_curso.css">
    <link rel="icon" href="images/python-logo.png">
</head>
<body>
    <div class="curso-container">
        <div class="sidebar">
            <a href="painel.php" class="btn-voltar">Painel</a>
            <h2>Módulos</h2>
            <ul class="module-list">
            <li class="module-item" id="intro"><a href="inicio_curso.php">Introdução</a></li>
                <li class="module-item" id="mod1"><a href="modulos/modulo1.php">Módulo 1</a></li>
                <li class="module-item" id="mod2"><a href="modulos/modulo2.php">Módulo 2</a></li>
                <li class="module-item" id="mod3"><a href="modulos/modulo3.php">Módulo 3</a></li>
                <li class="module-item" id="mod4"><a href="modulos/modulo4.php">Módulo 4</a></li>
                <li class="module-item" id="mod5"><a href="modulos/modulo5.php">Módulo 5</a></li>
                <li class="module-item" id="mod6"><a href="modulos/modulo6.php">Módulo 6</a></li>
                <li class="module-item" id="mod7"><a href="modulos/modulo7.php">Módulo 7</a></li>
                <li class="module-item" id="mod8"><a href="modulos/modulo8.php">Módulo 8</a></li>
                <li class="module-item" id="projeto"><a href="modulos/projeto.php">Projeto Final</a></li>
            </ul>
        </div>
        <div class="content">
            <h3>Introdução</h3>
            <p>Bem-vindo(a) <?php echo $logado ?>!</p>
            <p>Aqui inicia sua jornada no nosso curso Python. Desde já agradeço seu acesso e interesse em aprender, tenho certeza que o conteúdo que você verá vai valer a pena!</p>
            <p>Foi separado para você 8 módulos que serão divididos por:</p>
            <ul>
                <li>Lógica de programação</li>
                <li>Váriaveis</li>
                <li>Operadores Aritméticos</li>
                <li>Listas</li>
                <li>Dicionário</li>
                <li>Condicionais</li>
                <li>For e While</li>
                <li>Função</li>
            </ul>
            <p>A partir do estudo desses tópicos você terá uma base sólida para continuar estudando Python.</p>
            <p>Após terminar todos os módulos, você fará um projeto final colocando em prática tudo que aprendeu (e ah, claro que terão exercícios propostos em cada módulo tá? para você treinar). Quando finalizar seu projeto, nós envie para avaliação no email: <i>cursopy_respostas@gmail.com</i> com assunto: <strong>Resposta curso Python</strong> e no corpo da mensagem coloque seu nome completo. Após avaliação, você será retornado pelo mesmo email com seu certificado pronto!</p>
            <p>Continue sempre estudando, não desista! Pode parecer difícil no começo mas vale muito a pena entender mais desse mundo. Nunca pare de aprender!</p>
            <p>Se especialize em mais linguagens como: Java, PHP ou JavaScript. Há diversas e diversas linguagens te esperando para construir mais projetos.</p>
            <p>Se especialize numa área, há diversas no mercado e tenho certeza que alguma vai te atrair. Não importa qual seja, apenas <STRONg>ESTUDE!</STRONg></p>
            <p>Muito obrigada pela atenção.</p>
            <p>Qualquer dúvida ou feedback me contate no email: <i>devarirapha@gmail.com</i></p>
            <p>Se quiser o repositório desse site, <a href="https://github.com/raphaellyzzz/projeto-curso-py" target="_blank">clique aqui</a>.</p>
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