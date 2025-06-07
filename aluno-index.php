<?php

if(!empty($_POST['nome']) && !empty($_POST['senha'])){
    $nome = $_POST['nome'];
    $senha = $_POST['senha'];

    echo "Nome: $nome Senha: $senha";

}

