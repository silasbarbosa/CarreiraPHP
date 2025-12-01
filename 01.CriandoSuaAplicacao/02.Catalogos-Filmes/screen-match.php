<?php
echo "Bem vindo ao Screen Match!" . PHP_EOL; 

$nomeFilme = "Top Gun - Maverick";
$anoLancamento = 2022;

$quantidadeDeNotas = $argc-1;
$somaDeNotas = 0;

for($contador =1; $contador < $argc; $contador++){
    $somaDeNotas +=$argv[$contador]; 
}

$notaFilme = $somaDeNotas/$quantidadeDeNotas;
$planoPrime = true;

$incluidoNoPlano = $planoPrime || $anoLancamento <2020;

echo "Nome do Filme: $nomeFilme \n";
echo "Nota do Filme: $notaFilme \n";
echo "Ano de Lancameno: $anoLancamento \n";


if($anoLancamento==2025){
    echo "O filme é lançamento \n";
}
else {
    echo "O filme nao é um lancamento \n";
}

$genero = match($nomeFilme){
    "Top Gun - Maverick" => "Ação",
    default => "Genero desconhecido",

};

echo "O genero do filme é: $genero";