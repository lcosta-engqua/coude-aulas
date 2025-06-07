<?php

if( !empty($_POST['nome']) && !empty($_POST['email'])) {
    $nome = $_POST['nome'];
    $email = $_POST['email'];
    
    echo "Nome: $nome Email: $email "; 
}