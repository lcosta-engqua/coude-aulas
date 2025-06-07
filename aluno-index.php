<?php

if(!empty($_POST['nome']) && !empty($_POST['senha'])){
    $nome = $_POST['nome'];
    $senha = $_POST['senha'];

    echo "Nome: $nome Senha: $senha";

    session_start();
    $_SESSION['aluno'] = $_POST['nome'];
    $_SESSION['senha'] = $_POST['senha'];

}

