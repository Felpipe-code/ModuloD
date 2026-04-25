<?php

//1
$salario = 3000.00;
$parcela = 800.00;

echo ($parcela <= $salario * 0.3) ? "Aprovado" : "Negado";

//2
$hora = date("H:i");

if ($hora >= "05:00" && $hora <= "11:59") echo "Bom dia";
elseif ($hora >= "12:00" && $hora <= "17:59") echo "Boa tarde";
else echo "Boa noite";

//3
$atual = 10;
$minimo = 15;

echo ($atual < $minimo) ? "Comprar Reposição" : "Estoque OK";

//4
$time = "Grêmio";

$grupos = [
    "Grêmio" => "Grupo A", "Inter" => "Grupo A",
    "Flamengo" => "Grupo B", "Vasco" => "Grupo B"
];

echo $grupos[$time] ?? "Time não identificado";

//5
$valor = 600.00;
$frete = 50.00;

if ($valor > 500) {
    $valor *= 0.9;
    $frete = 0;
} elseif ($valor > 250) {
    $frete = 0;
}

echo $valor + $frete;

//6
$passos = [5000, 7000, 4000, 8000, 6000, 9000, 5000];
$total_km = (array_sum($passos) * 0.8) / 1000;

echo $total_km . " km";

//7
$comentarios = ["legal", "spam", "incrivel"];
$proibidas = ["spam", "clickbait"];

foreach ($comentarios as $palavra) {
    if (in_array($palavra, $proibidas)) {
        die("Bloqueado");
    }
}


//8
$arquivos = ["foto1.jpg", "doc.pdf", "img2.jpg", "som.mp3"];

foreach ($arquivos as $arquivo) {
    if (str_ends_with($arquivo, ".jpg")) echo $arquivo . "\n";
}

//9
$vendas = [150.0, 500.0, 20.0, 350.0];

echo "Maior: " . max($vendas) . " | Menor: " . min($vendas);

//10
$nome = "João Silva Sauro";
$partes = explode(" ", mb_strtolower($nome));

echo $partes[0][0] . end($partes);

//11
$valor = 1000.00;

for ($i = 1; $i <= 12; $i++) {
    $valor *= 1.01;
    echo "Mês $i: " . number_format($valor, 2) . "\n";
}

//12
$senha_correta = "1234";
$tentativas = 0;

while ($tentativas < 3) {
    $entrada = "1235"; // Simulação de entrada
    if ($entrada === $senha_correta) break;
    $tentativas++;
}

if ($tentativas === 3) echo "Conta Bloqueada";

//13
$pessoas = [["Ana", 20], ["Bia", 70], ["Caio", 65]];
$prioritario = []; $geral = [];

foreach ($pessoas as $p) {
    ($p[1] >= 60) ? $prioritario[] = $p[0] : $geral[] = $p[0];
}

//14
$m = 5;

print_r([
    "cm" => $m * 100,
    "mm" => $m * 1000,
    "km" => $m / 1000
]);

//15
$n = 6; $soma = 0;

for ($i = 1; $i < $n; $i++) {
    if ($n % $i == 0) $soma += $i;
}

echo ($soma == $n) ? "Perfeito" : "Não perfeito";

//16
$notas = [7.5, 9.0, 6.0];

echo "Média: " . (array_sum($notas) / count($notas));
echo " Maior: " . max($notas);

//17
$nomes = ["Ana", "Bia", "Caio"];
echo "O vencedor da rodada é: " . $nomes[array_rand($nomes)];

//18
$idade = 3;

if ($idade <= 2) $humana = $idade * 10.5;
else $humana = 21 + (($idade - 2) * 4);

echo $humana;
//19
$t = "51988887777";
echo "(" . substr($t, 0, 2) . ") " . substr($t, 2, 5) . "-" . substr($t, 7);

//20
$carrinho = [["Arroz", 20.0, 2], ["Feijão", 10.0, 3]];
$total = 0;

foreach ($carrinho as $item) {
    $total += $item[1] * $item[2];
}

echo $total;














?>