<?php   
   session_start();
   if((!isset($_SESSION['email']) == true) and (!isset($_SESSION['senha']) == true)){
       unset($_SESSION['email']);
       unset($_SESSION['senha']);
       header('Location: login.php');
   }
   $logado = $_SESSION['nome'];

    // verificar se a chave 'usuario_id' ta definida na sessão
    if (isset($_SESSION['usuario_id'])) {
        $usuario_id = $_SESSION['usuario_id'];
    } else {
        $usuario_id = 0; // valor padrão
    }
?>

<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Painel</title>
    <link rel="stylesheet" href="stylepainel.css">
    <link rel="icon" href="images/python-logo.png">
</head>
<body>
    <div class="header">
        <div class="sessions">
            <a href="#" class="session active" data-section="home">Home</a>
            <a href="#" class="session" data-section="sobre-curso">Sobre o Curso</a>
            <a href="#" class="session" data-section="sobre-nos">Créditos</a>
        </div>
        <a href="logout.php" class="logout-btn">Sair</a>
    </div>
    <div class="main">
        <!-- home -->
        <div class="section active" id="home">
            <div class="welcome-box">
                <h2>Bem-vindo(a) ao seu curso Python, <?php echo $logado ?></h2>
            </div>
            <div class="course-box">
                <h3><a href="inicio_curso.php">Clique aqui para ir ao curso!</a></h3>
            </div>
            <footer>
                <p>&copy; 2024 IFPE ADS. Todos os direitos reservados.</p>
            </footer>
        </div>

        <!-- sobre curso -->
        <div class="section" id="sobre-curso">
            <div class="course-box">
                <h2 class="titles"">Programação Python: Da Teoria à Prática</h2>
                <h3>Introdução</h3>
                <p>Bem-vindo ao nosso curso <strong>Programação Python: da Teoria à Prática!</strong> </p>
                <p>Neste curso, você será introduzido a uma das linguagens de programação mais conhecidas, poderosas, versáteis e acessíveis do mundo da tecnologia: Python. Este é o ponto de partida perfeito para aqueles que não tem experiência antecedente e desejam ingressar no universo da programação. Você não apenas aprenderá a programar em uma das linguagens mais populares e utilizadas no mercado, mas também terá a oportunidade de obter uma certificação que atesta suas habilidades e conhecimentos em Python, tudo de maneira gratuita!</p>
                <h3>Por que aprender e ter certificação em Python?</h3>
                <p>Python é uma linguagem conhecida por sua simplicidade e legibilidade, o que a torna ideal principalmente para iniciantes. Sua sintaxe clara e direta permite que você obtenha entendimento com maior facilidade e que você se concentre em resolver problemas e criar soluções, sem se preocupar com detalhes complicados de sintaxe.</p>
                <p>Além disso, Python é amplamente utilizada por empresas em diversas áreas da tecnologia,
                como:</p>
                <ul>
                    <li>Desenvolvimento Web: Frameworks como Django e Flask;</li>
                    <li>Ciência de Dados: Bibliotecas como Pandas e NumPy;</li>
                    <li>Inteligência Artificial e Machine Learning: Ferramentas como Tensor Flow e Scikit-learn;</li>
                    <li>Automação: Scripts que facilitam tarefas repetitivas e integrações;</li>
                    <li>Desenvolvimento de Jogos: Uso em engines como Pygame.</li>
                </ul>
                <h3>O que esperar deste Curso?</h3>
                <p>Este curso foi projetado para guiá-lo desde os conceitos básicos até tópicos mais avançados, com uma abordagem prática e objetiva. Ao longo das aulas, você:</p>
                <ul>
                    <li>Aprenderá a pensar como um programador, desenvolvendo habilidades de lógica e resolução de problemas;</li>
                    <li>Dominará os fundamentos de Python, incluindo variáveis, tipos de dados, estruturas de controle e funções;</li>
                    <li>Explorará bibliotecas e ferramentas que expandem as capacidades do Python em diversas áreas;</li>
                    <li>Praticará seus aprendizados por meio de atividades a cada fim de módulo,
                    aplicando o que aprendeu para resolver problemas reais.</li>
                </ul>
                <h3>Metodologia de Ensino</h3>
                <p>Nosso curso é estruturado para ser interativo , envolvente e objetivo. Você terá acesso a:</p>
                <ul>
                    <li><strong>Aulas teóricas:</strong> Onde os conceitos fundamentais serão explicados com exemplos claros e práticos;</li>
                    <li><strong>Exercícios práticos:</strong> Projetados para reforçar seu entendimento e desenvolver suas habilidades de codificação;</li>
                    <li><strong>Suporte contínuo:</strong> Para tirar dúvidas e acompanhar seu progresso durante todo o curso.</li>
                </ul>
                <h3>Materiais e ferramentas necessárias</h3>
                <ul>
                    <li><strong>Caderno ou Arquivo de texto:</strong> Durante as aulas e a prática, anote conceitos, comandos e erros que você encontrar. Ter um caderno físico ou digital, ajuda a organizar seus pensamentos e revisar o que aprendeu. Uma dica que pode ajudar a fixar ainda mais o conteúdo, é programar seu código no caderno primeiro e só passar para o compilador depois de analisá-lo com cautela.</li>
                    <li><strong>Editor de Código:</strong> Use editores online como: <a href="https://www.onlinegdb.com/online_python_compiler">Compilador online de Python.</a> Você também pode baixar e usar seu editor preferido ou o que você melhor se adaptar como: <a href="https://code.visualstudio.com/">Visual Studio Code</a>, <a href="https://www.jetbrains.com/pycharm/">PyCharm</a> ou <a href="https://www.sublimetext.com/">Sublime Text</a>.</li>
                    <li><strong>Instale o interpretador Python no Computador!</strong> Baixe e instale a versão mais recente do Python em <a href="https://www.python.org/downloads/">python.org.</a> Isso permitirá que você execute seus scripts diretamente do terminal. O interpretador Python é essencial para executar o código que você escreve. Ele interpreta e executa as instruções do seu script. Execute seus códigos diretamente no terminal ou através do botão de execução no seu editor de código. Nele você pode testar diferentes funcionalidades, como depuração (debugging) e autocompletar, para acelerar seu desenvolvimento.</li>
                </ul>
                <p>Estamos empolgados para iniciar essa jornada com você!</p>
                <p>Prepare-se para explorar o vasto mundo da programação com Python e descobrir o quanto essa linguagem pode transformar sua maneira de pensar e resolver problemas. Prepare-se para adquirir uma habilidade valiosa e reconhecida no mercado nacional e internacional, que pode impulsionar sua carreira para o próximo nível com certificação e de maneira <strong>gratuíta</strong>. Vamos começar nossa jornada e garantir sua certificação!</p>
                <p>- Equipe ADS 2024.1</p>
            </div>
            <footer>
                <p>&copy; 2024 IFPE ADS. Todos os direitos reservados.</p>
            </footer>
        </div>

        <!-- creditos -->
        <div class="section" id="sobre-nos">
            <div class="sobre-nos-container">
                <div class="course-box">
                    <h4>Arianny Raphaelly</h4>
                    <p>Programadora responsável pelo desenvolvimento de todo o site e criação da proposta do projeto final.</p>
                    <p><a href="https://www.linkedin.com/in/arianny-raphaelly-45b2a5312" target="_blank">LinkedIn Perfil</a></p>
                    <p><a href="https://github.com/raphaellyzzz" target="_blank">GitHub Perfil</a></p>
                    <p>Email contato: devarirapha@gmail.com</p>
                </div>
                <div class="course-box">
                    <h4>Darkiane Naiara</h4>
                    <p>Responsável pela criação do módulo 1 e texto da sessão "sobre o curso".</p>
                    <p><a href="https://br.linkedin.com/in/darkiane-naiara-6b6985160" target="_blank">LinkedIn Perfil</a></p>
                    <p><a href="https://github.com/Darkiane22?tab=repositories" target="_blank">GitHub Perfil</a></p>
                    <p>Email contato: darkiane36@gmail.com</p>
                </div>
                <div class="course-box">
                    <h4>Lucas Lins</h4>
                    <p>Responsável pelo módulo 2 e diagramação do banco de dados.</p>
                    <p><a href="https://www.linkedin.com/in/lucas-lins-135866306/" target="_blank">LinkedIn Perfil</a></p>
                    <p><a href="https://github.com/LucasLins13" target="_blank">GitHub Perfil</a></p>
                    <p>Email contato: lucaslins241@gmail.com</p>
                </div>
                <div class="course-box">
                    <h4>Éris Herbert</h4>
                    <p>Responsável pela criação do módulo 3.</p>
                    <p><a href="https://www.linkedin.com/in/éris-herbert-119230318?utm_source=share&utm_campaign=share_via&utm_content=profile&utm_medium=android_app" target="_blank">LinkedIn Perfil</a></p>
                    <p><a href="https://github.com/LadyEris666" target="_blank">GitHub Perfil</a></p>
                    <p>Email contato: erisherbert25@gmail.com</p>
                </div>
                <div class="course-box">
                    <h4>Ivo Neto</h4>
                    <p>Responsável pelo módulo 4.</p>
                    <p>Email contato: ivope2019@gmail.com</p>
                </div>
                <div class="course-box">
                    <h4>Gustavson Barros</h4>
                    <p>Responsável pelo módulo 5.</p>
                    <p><a href="https://www.linkedin.com/in/gustavsonbarros/" target="_blank">LinkedIn Perfil</a></p>
                    <p><a href="https://github.com/gustavsonbarros" target="_blank">GitHub Perfil</a></p>
                    <p>Email contato: gustavson.adm@gmail.com</p>
                </div>
                <div class="course-box">
                    <h4>Pedro Guilherme</h4>
                    <p>Responsável pelo módulo 6.</p>
                    <p><a href="https://www.linkedin.com/in/pedro-guilherme-280125324/" target="_blank">LinkedIn Perfil</a></p>
                    <p><a href="https://github.com/MarcaPasso877" target="_blank">GitHub Perfil</a></p>
                </div>
                <div class="course-box">
                    <h4>Jefferson Douglas</h4>
                    <p>Responsável pelo módulo 8.</p>
                    <p><a href="https://github.com/jjdoug" target="_blank">GitHub Perfil</a></p>
                    <p>Email contato: jedouglas.melo@gmail.com</p>
                </div>
                <div class="course-box">
                    <h4>Douglas</h4>
                    <p>Responsável pelo protótipo do site, certificado e módulo 7.</p>
                </div>
                <div class="course-box">
                    <h4>Eryck</h4>
                    <p>Responsável pelos exercicios do modulo 3.</p>
                </div>
            </div>
        </div>
    </div>
    <script>
        document.querySelectorAll('.session').forEach(link => {
            link.addEventListener('click', function (e) {
                e.preventDefault();

                document.querySelectorAll('.session').forEach(link => link.classList.remove('active'));
                this.classList.add('active');

                document.querySelectorAll('.section').forEach(section => section.classList.remove('active'));
                document.getElementById(this.getAttribute('data-section')).classList.add('active');
            });
        });
    </script>
</body>
</html>

