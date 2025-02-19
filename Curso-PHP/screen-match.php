<?php

echo "Bem vindo(a) ao Screen Match!\n";


$nomeFilme = "Top Gun - Maverick";
$nomeFilme = "Thor: Hagnarock";
$nomeFilme = "Se beber não case";

$anoLancamento = 2024;

$quantidadeDeNotas = $argc - 1;
$notas = [];

for ($contador = 1; $contador < $argc; $contador++) {
    $notas[] = (float) $argv[$contador];
}

$notaFilme = array_sum($notas) / $quantidadeDeNotas;
$planoPrime = true;

$incluidoNoPlano = $planoPrime || $anoLancamento < 2020;

echo "Nome do filme:" . $nomeFilme . "\n";
echo "Nota do filme:  $notaFilme \n";
echo "Ano de lançamento: $anoLancamento \n";


if ($anoLancamento > 2024) {
    echo "Esse filme é um lançamento. \n";
} elseif ($anoLancamento > 2021 && $anoLancamento <= 2024) {
    echo "Esse filme ainda é novo.  \n";
} else {
    echo "Esse filme não é um lançamento \n";
}

$genero = match ($nomeFilme) {
    "Top Gun - Maverick" => "ação",
    "Thor: Ragnarock" => "super-herói",
    "Se beber não case" => "comédia",
    default => "Gênero desconhecido",
};
echo "O gênero do filme é : $genero \n";

$filme = [
    "nome" => "Thor: Ragnarok",
    "ano" => 2021,
    "nota" => 7.8,
    "genero" => "super-heroi",
];


echo $filme["nome"];