<?php

echo"<pre>";
echo "Olá, bem-vindo a Cafeteria 22!";
echo"</pre>";
echo"<pre>";
echo "Cardápio:";
echo"</pre>";
echo"<pre>";
echo "Capuchino - 1 | Expresso - 2 | Latte - 3";
echo"</pre>";


/**
 * @param $cafe - recebe o valor referente ao código do café selecionado
 * @return - processa o valor direcionando para o valor referente ao café selecionado
 */
function pedidoCafe(int $cafe):string{
    if($cafe == 1){
        return "Você selecionou Capuchino, pague 16,40";
    }else if($cafe == 2){
        return "Você selecionou Expresso, pague 9,90";
    }else if($cafe == 3){
        return "Você selecionou Latte, pague 14,50";
    }else{
        return "Selecione uma das opções disponíveis";
    }
}

echo pedidoCafe(1);