<?php

// 1
$numero = 5;
if ($numero >0) {
    echo "O número é positivo.";
}

// 2
$idade = 18;
if ($idade >= 18){
    echo "Maior de idade";
}

// 3

$x = 10;
if ($x % 2 == 0) {

}else{
    echo "O número $x é ímpar.";
}

// 4

$a = 15;
$b = 20;

if ($a > $b){
    echo "O maior é A: $a";
}elseif ($b > $a){
    echo "O maior é B: $b";
}else{
    echo "Os números são iguais.";
}

// 5

$nota = 9;

if ($nota >= 7){
    echo "Este aluno esta aprovado.";
}else{
    echo "Este aluno esta reprovado.";
}

// 6
for ($i = 1; $i <= 10; $i++) {
    echo $i . " ";
}

// 7 
for ($i = 1; $i <= 20; $i++) {
    if ($i % 2 == 0) {
        echo $i . " ";
    }
}

// 8 

$soma = 0;
for ($i = 1; $i <= 100; $i++) {
    $soma = $soma + $i;
}
echo "A soma total é: $soma";

// 9

for ($i = 1; $i <= 10; $i++) {
    $resultado = 5 * $i;
    echo "5x $i = $resultado";
}

// 10

for ($i = 10; $i >= 1; $i--){
    echo $i . " ";
}

// 11 

$i = 1;
while ($i <= 5) {
    echo $i . " ";
    $i++;
}


// 12

$numero = -1; 
while ($numero != 0) {
    $numero = (int)readline("Digite um número (0 para sair): ");
}

// 13 

$sorteado = rand(1, 10);
$palpite = 0;
while ($palpite != $sorteado) {
    $palpite = (int)readline("Adivinhe o número: ");
    if ($palpite != $sorteado) echo "Errado! Tente de novo. ";
}
echo "Acertou!";

// 14 

$i = 1;
$soma = 0;
while ($i <= 50) {
    $soma += $i;
    $i++;
}
echo "Soma total: $soma";

// 15

$n = 7; 
$i = 1;
while ($i <= 10) {
    echo "$n x $i = " . ($n * $i) . "<br>";
    $i++;
}










?>