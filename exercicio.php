<?php

$aluno = $_POST["aluno"];
$turma = $_POST["turma"];
$bimestre1 = $_POST['bimestre1'];
$bimestre2 = $_POST['bimestre2'];
$bimestre3 = $_POST['bimestre3'];
$bimestre4 = $_POST['bimestre4'];

$situacao1 = "PESSIMO";
$situacao2 = "RUIM";
$situacao3 = "BOM";
$situacao4 = "EXCELENTE";

echo "Aluno: $aluno";
echo "<br>";
echo "Turma: $turma";
echo "<br><br>";

if ($bimestre1 < 4) {
    echo "1º Bimestre: {$bimestre1} | Situação: {$situacao1} <br>";
} else if ($bimestre1 >= 4 && $bimestre1 < 6) {
    echo "1º Bimestre: {$bimestre1} | Situação: {$situacao2} <br>";
} else if ($bimestre1 >= 6 && $bimestre1 < 8) {
    echo "1º Bimestre: {$bimestre1} | Situação: {$situacao3} <br>";
} else if ($bimestre1 >= 8 && $bimestre1 <= 10) {
    echo "1º Bimestre: {$bimestre1} | Situação: {$situacao4} <br>";
} else {
    echo "Contate o suporte";
} 

// segundo bimestre    
if ($bimestre2 < 4) {
    echo "2º Bimestre: {$bimestre2} | Situação: {$situacao1} <br>";
} else if ($bimestre2 >= 4 && $bimestre2 < 6) {
    echo "2º Bimestre: {$bimestre2} | Situação: {$situacao2} <br>";
} else if ($bimestre2 >= 6 && $bimestre2 < 8) {
    echo "2º Bimestre: {$bimestre2} | Situação: {$situacao3} <br>";
} else if ($bimestre2 >= 8 && $bimestre2 <= 10) {
    echo "2º Bimestre: {$bimestre2} | Situação: {$situacao4} <br>";
} else {
    echo "Contate o suporte";
} 

// terceiro bimestre    
if ($bimestre3 < 4) {
    echo "2º Bimestre: {$bimestre3} | Situação: {$situacao1} <br>";
} else if ($bimestre3 >= 4 && $bimestre3 < 6) {
    echo "2º Bimestre: {$bimestre2} | Situação: {$situacao2} <br>";
} else if ($bimestre3 >= 6 && $bimestre3 < 8) {
    echo "2º Bimestre: {$bimestre2} | Situação: {$situacao3} <br>";
} else if ($bimestre3 >= 8 && $bimestre3 <= 10) {
    echo "2º Bimestre: {$bimestre3} | Situação: {$situacao4} <br>";
} else {
    echo "Contate o suporte";
} 

// quarto bimestre    
if ($bimestre4 < 4) {
    echo "2º Bimestre: {$bimestre4} | Situação: {$situacao1} <br>";
} else if ($bimestre4 >= 4 && $bimestre4 < 6) {
    echo "2º Bimestre: {$bimestre2} | Situação: {$situacao2} <br>";
} else if ($bimestre4 >= 6 && $bimestre4 < 8) {
    echo "2º Bimestre: {$bimestre2} | Situação: {$situacao3} <br>";
} else if ($bimestre4 >= 8 && $bimestre4 <= 10) {
    echo "2º Bimestre: {$bimestre4} | Situação: {$situacao4} <br>";
} else {
    echo "Contate o suporte";
} 

echo "<br>";

$total = $bimestre1 + $bimestre2 + $bimestre3 + $bimestre4;
$media = $total / 4;

echo "nota exigida por bimestre - 6.0 <br>";
echo "média final do aluno - {$media} <br>";
echo "situação do ano - ";

if ($media < 4) {
    echo $situacao1;
} else if ($media >= 4 && $media < 6) {
    echo $situacao2;
} else if ($media >= 6 && $media < 8) {
    echo $situacao3;
} else if ($media >= 8 && $media <= 10) {
    echo $situacao4;
} else {
    echo "Contate o suporte";
}

$aproveitamento = ($media/10) * 100;

echo "<br> porcentagem de aproveitamento - {$aproveitamento}% <br><br>";

if ($bimestre1 >= 8) {
    $count1 = 1;
} else {
    echo "0";
}

if ($bimestre2 >= 8) {
    $count2 = 1;
} else {
    echo "0";
}

if ($bimestre3 >= 8) {
    $count3 = 1;
} else {
    echo "0";
}

if ($bimestre4 >= 8) {
    $count4 = 1;
} else {
    echo "0";
}

$quantidade_excelente = $count1 + $count2 + $count3 + $count4;

echo "Mensagem Final <br>";
if ($media >= 6) {
    echo "Parabéns, você foi aprovado nesse ano letivo situado em um nível BOM, com uma porcentagem de aproveitamento de 
    {$aproveitamento}% e uma média final de {$media}. <br>
    Destaques: no ano letivo que findou, o aluno obteve em {$quantidade_excelente} unidades uma situação de nível EXCELENTE. Muito bem!
    ";
} else {
    echo "Você precisa se dedicar mais, bora de repeteco?";
}
