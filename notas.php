<?php
$aluno = $_POST["aluno"];
$turma = $_POST["turma"];
$nota1 = $_POST['nota1'];
$nota2 = $_POST['nota2'];
$nota3 = $_POST['nota3'];
$nota4 = $_POST['nota4'];

echo "Aluno: $aluno";
echo "<br>";
echo "Turma: $turma";
echo "<br>";
echo "--------------------------------";
echo "<br>";
echo "Nota 1º Bimestre: $nota1";
echo "<br>";
echo "Nota 2º Bimestre: $nota2";
echo "<br>";
echo "Nota 3º Bimestre: $nota3";
echo "<br>";
echo "Nota 4º Bimestre: $nota4";
?>