# Curso de Python IFPE

## Sumário
1. [Visão Geral do Sistema](#visao-geral-do-sistema)
2. [Estrutura do Projeto](#estrutura-do-projeto)
3. [Descrição das Funcionalidades](#descricao-das-funcionalidades)
4. [Configurações e Instalações](#configuracoes-e-instalacoes)
5. [Modificações e Melhorias Futuras](#modificacoes-e-melhorias-futuras)

---

## 1. <a name="visao-geral-do-sistema">Visão Geral</a>
O projeto foi desenvolvido para obter nota da disciplina de Projeto Integrador 1 do 1º périodo de ADS do IFPE, estimulado pelo professor Delano. Consiste em uma plataforma de curso voltada para ensinar o básico de lógica de programção e Python para alunos novatos na área de programação. A estrutura do site é composta por um sistema de login, áreas personalizadas para cada usuário, módulos de curso com imagens de apoio e a possibilidade de geração de certificados ao final, conforme feito o projeto final. O conteúdo do site foi feito pelos meus colegas de equipe, na qual dentro do site, na área de "sobre nós", cada credito está especificado com: nome e sobrenome, redes sociais (se houver) e o módulo no qual cada um foi responsável.

## 2. <a name="estrutura-do-projeto">Estrutura </a>

O projeto está organizado em várias pastas e arquivos principais. A estrutura pode ser analisada abaixo:

```
/Projeto
│
├── /modulos
│      /aulas_imagens
│        ├── /m1  
│          ├── 1.png
│          ├── 2.png
│        └── ...
│   ├── modulo1.php
│   ├── modulo2.php
│   ├── ...
│   └── projeto.php
│
├── /imagens
│   ├── python-logo.png
│ 
│
├── cadastro.php
├── config.php
├── home.html
├── inicio_curso.php
├── login.php
├── logout.php
├── painel.php
├── style_curso.css
├── stylepainel.css
└── teste_login.php
```

### 2.1. Pastas

- **modulos/**: Contém os arquivos PHP de cada módulo do curso (modulo1.php, modulo2.php...) e o arquivo "projeto.php" referente ao projeto prático para obter certificado. Também há as imagens de cada módulo, organizadas por pastas ("m1", "m2", etc.), com os arquivos nomeados pela ordem de exibição ("1.png", "2.png"...).

### 2.2. Arquivos

- **cadastro.php**: Responsável pela funcionalidade de cadastro de novos usuários no sistema.
- **config.php**: Configura a conexão com o banco de dados MySQL.
- **home.html**: Página inicial com opção de login.
- **inicio_curso.php**: Página inicial do curso, com introdução e visualização dos módulos.
- **login.php**: Página de login, onde os usuários inserem suas credenciais.
- **logout.php**: Encerra a sessão do usuário e redireciona para a página inicial.
- **painel.php**: Painel de controle personalizado para o usuário logado, com acesso ao conteúdo do curso e links úteis.
- **teste_login.php**: Script de validação de login, verificando as credenciais e redirecionando para o painel em caso de sucesso.

## 3. <a name="descricao-das-funcionalidades">Descrição das Funcionalidades</a>

### 3.1. Cadastro de Usuário

O arquivo `cadastro.php` permite que novos usuários criem contas no sistema, inserindo suas informações pessoais, como nome, email e senha. Esses dados são salvos no banco de dados MySQL.

### 3.2. Login e Controle de Sessão

A lógica de login é gerida por `login.php` e `teste_login.php`. Quando um usuário insere seu email e senha, o sistema valida as credenciais com os dados armazenados no banco de dados e, se corretas, inicia uma sessão para o usuário. Caso contrário, ele é redirecionado para tentar o login novamente.

### 3.3. Painel de Controle

No `painel.php`, os usuários autenticados têm acesso a uma interface personalizada, onde podem ver os módulos do curso e começar suas aulas. Ele também tem acesso a informações como nome do usuário e um botão para logout, além de informações sobre o curso e seus criadores.

### 3.4. Módulos do Curso

Cada módulo do curso está em um arquivo PHP específico na pasta `modulos`. Estes módulos incluem conteúdo de texto, imagens e exercícios práticos. As imagens utilizadas em cada módulo estão armazenadas na pasta `aulas_imagens`, organizadas de forma sequencial conforme aparecem no conteúdo.

### 3.5. Logout

O arquivo `logout.php` encerra a sessão atual do usuário e o redireciona de volta à página inicial.

## 4. <a name="configuracoes-e-instalacoes">Configurações e Instalações</a>

### 4.1. Banco de Dados <a name="bd"></a>

- O banco de dados é configurado no arquivo `config.php`, que define os parâmetros de conexão com MySQL (host, usuário, senha, banco).
- Estrutura básica do banco:
    - Tabela `usuarios`: Contém as colunas `id`, `nome`, `email`, `senha`.
    - Código SQL utilizado nos testes:
      ```
      CREATE TABLE usuarios (
      id int(11) NOT NULL,
      nome varchar(45) DEFAULT NULL,
      email varchar(140) DEFAULT NULL,
      senha varchar(255) DEFAULT NULL
      );
      ```
    - Código SQL recomendado:
      ```
      CREATE TABLE usuarios (
      id INT AUTO_INCREMENT PRIMARY KEY,
      nome VARCHAR(100) NOT NULL,
      email VARCHAR(100) NOT NULL UNIQUE,
      senha VARCHAR(255) NOT NULL
      );  
      ```

### 4.2. Requisitos

- **PHP**: 7.4 ou superior.
- **MySQL**: Versão 5.7 ou superior.
- **XAMPP**: Versão 7.2.7 ou superior.
- **Navegador Web**: Para acessar as páginas web.

### 4.3. Passos de Instalação

1. Baixe o XAMPP e utilize: Apache e MySQL.
1. Configure o banco de dados MySQL e crie as tabelas necessárias usando o SQL fornecido no tópico [Banco de dados](#bd).
2. Faça o upload dos arquivos PHP para um servidor com suporte a PHP.
3. Garanta que o servidor possa se conectar ao banco de dados.
4. O sistema estará disponível acessando o arquivo `home.html`.

## 5. Modificações e Melhorias Futuras <a name="modificacoes-e-melhorias-futuras"></a>

- **Adição de novas funcionalidades**: Implementação de uma barra de progresso, melhorias no layout e usabilidade do curso.
- **Sistema de geração automática de certificados**: Em fase de desenvolvimento, permitirá que os usuários obtenham certificados após a conclusão dos módulos.

---
