<?php

$idade = 1;

// while($idade < 10){
//     echo "Sua idade é: $idade" . "<hr>";
//     $idade++;
// };

// echo ">>> estou aqui";

// do{
//     echo "Sua idade é: $idade " . "hr";
// }while($idade < 1);

//Imprimir de 0-100 apenas números pares

// for($i=0; $i <= 100; $i += 2){
//     echo "Números pares: " . $i . "<hr>";
//     // $i = $i+1;
// }

$carrinhoDeCompras = 
    [
        'produtos' => [
            'caixaDeLeite' => 5,
            'arroz' => 37,
            'tomate' => 5
        ],
        'precos' => [
            'caixaDeLeite' => 1.99,
            'arroz' => 5.00,
            'tomate' => 3.50
        ]
    ];

foreach($carrinhoDeCompras as $keys => $itens){
    echo "<pre>";
    var_dump($keys, $itens);
    echo "</pre>";
    echo "<hr>";
}
