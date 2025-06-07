<?php
if(!empty($_POST['nome']) && !empty($_POST['data']) && !empty($_POST['escolaridade']) 
    && !empty($_POST['email']) && !empty($_POST['telefone'])){
    $nome = $_POST['nome'];
    $data_nascimento = $_POST['data'];
    $escolaridade = $_POST['escolaridade'];
    $email = $_POST['email'];
    $telefone = $_POST['telefone'];

    session_start();
    $_SESSION['nome'] = $nome;
    $_SESSION['data'] = $data_nascimento;
    $_SESSION['escolaridade'] = $escolaridade;
    $_SESSION['email'] = $email;
    $_SESSION['telefone'] = $telefone;

    echo "Aluno cadastrado com sucesso!";
    echo "<pre>";
    print_r("Nome: " . $_SESSION['nome']);
    echo "<br>";
    print_r("Data de nascimento: " . $_SESSION['data']);
    echo "<br>";
    print_r("Escolaridade: " . $_SESSION['escolaridade']);
    echo "<br>";
    print_r("E-mail: " . $_SESSION['email']);
    echo "<br>";
    print_r("Telefone: " . $_SESSION['telefone']);
}
?>

<form action="home.php" method="post">
    <input type="submit" value="Voltar">
</form>