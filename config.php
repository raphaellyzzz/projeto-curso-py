<?php
    $host = 'localhost';
    $user = 'root';
    $senha_bd = '';
    $nome_bd = 'curso_py';

    $conexao = new mysqli($host, $user, $senha_bd, $nome_bd);

    // if($conexao -> errno){
    //     echo "Erro com banco de dados";
    // }
    // else{
    //     echo "Conexão com banco de dados OK";
    // } 
?>