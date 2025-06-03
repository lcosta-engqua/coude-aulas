<?php

$carteira = 7;
$preco_unitario = 0.6;
$quantidade = 10;
$total = $preco_unitario <= $carteira;
$comprar = $total <= $carteira;

// swith ($produto){
//     case "pao":
//         $preco_unitario = 0.6;
//         break;
//     case "biscoito":
//         $preco_unitario = 2.2;
//         break;
//         default;
//         $preco_unitario;
// }

// if ($total <= $carteira) {
//     echo "Comprei $quantidade itens, por R$ " . number_format($total, 2, ",", ".");
// }else {
//     $diferenca = $total - $carteira;
//     echo "Não deu pra comprar, faltaram R$ " . number_format($diferenca, 2, ",", ".");
// }


// if($produto == "pao"){
//     $preco_unitario = 0.6
// } else if ($produto == "biscoito") {
//     $preco_unitario = 2.2;
// } else {
//     $preco_unitario = 0;
// }

echo $total <= $carteira ? "Comprei $quantidade itens, por R$ " . number_format($total, 2, ",", ".") : 
    "Não deu pra comprar, faltaram R$ " . number_format($diferenca, 2, ",", ".");