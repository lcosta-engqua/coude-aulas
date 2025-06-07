<?php

if(!empty($_POST['email']) && !empty($_POST['senha'])){
    $email = $_POST['email'];
    $senha = $_POST['senha'];

    session_start();
    $_SESSION['email'] = $email;

    echo "Bem vindo ";
    print_r($_SESSION['email']);
}
?>

<pre>
    <form action="cadastro.html">
        <input type="submit" value="Cadastrar aluno">
    </form>
    <form action="visualizacao.php">
        <input type="submit" value="Visualizar aluno">
    </form>
</pre>

    



