<?php

require "uteis.php";

// Declaração de variavel
// $nome = "Leonardo";


//Condição ternaria
// echo ($nome == "Leonardo") ? "Sim" : "Não";


//Condição padrão
// if($nome == "Leonardo"){
//     echo "Sim";
// }else{
//     echo "não";
// }

//Array

$usuarios[0] = [
    'nome' => 'Leonardo',
    'idade' => 33,
    'time' => 'Gremio'
];

$usuarios[1] = [
    'nome' => 'Marcos',
    'idade' => 27,
    'time' => 'Inter'
];

$usuarios[] = [
    'nome' => 'Luis',
    'idade' => 22,
    'time' => 'Mirasol'
];



// echo ("Informe seu nome \n");
// $nome = readline();

// echo ("Informe sua idade \n");
// $idade = readline();

// echo ("Informe seu time do s2 \n");
// $time = readline();

// $usuarios[] = [
//     'nome' => $nome,
//     'idade' => $idade,
//     'time' => $time
// ];


//For padrão
// for ($i = 0; $i < count($usuarios); $i++) {
//     echo "O usuario " . $usuarios[$i]['nome'] . " tem " .
//         $usuarios[$i]['idade'] . " anos e torce para o  "
//         . $usuarios[$i]['time'] . "\n";
// }


foreach ($usuarios as $u){
    echo "\n Nome: " . $u['nome'] . "\n Idade: " . $u['idade'] . "\n Time:" . $u['time'] . "\n";
}

