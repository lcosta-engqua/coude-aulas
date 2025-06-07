<?php
session_start();

echo "Dados do aluno";
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
?>

<form action="home.php" method="post">
    <input type="submit" value="Voltar">
</form>
