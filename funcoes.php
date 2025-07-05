<?php

function saudacao(){
    return "Hello World!!!";
}

/**
 * @param $num1 - recebe o primeiro valor que será somado
 * @param $num2 - recebe o segundo valor que será somado
 * @return - processa o calculo dos números e salva em uma memória temporária
 */
function soma($num1, $num2){
    return $num1 + $num2;
}

/**
 * @param $nome - recebe o primeiro valor em string 
 * @param $sobrenome - recebe o segundo valor em string 
 * @return - processa e concatena as duas strings salvando na memória temporária
 */
function nomeCompleto(string $nome, string $sobrenome):string{
    return $nome . " " . $sobrenome;
}

/**
 * @param $idade - recebe o valor inteiro
 * @return - processa o valor recebido e salva na memória
 */
function maiorIdade(int $idade):string{
    if($idade >= 18){
        return "Maior de idade";
    }else{
        return "Menor de idade";
    }
}

echo saudacao();

echo soma(1, 4);

echo nomeCompleto("Lais", "Costa");

echo maiorIdade(18);