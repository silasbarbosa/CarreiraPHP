<?php
echo "Bem vindo ao Screen Match!" . PHP_EOL; 

$nomeFilme = "Top Gun - Maverick";
$anoLancamento = 2022;


$notas = [];

for($i = 0; $i < $argc; $i++){
    $notas[$i] = (float) $argv[$i]; 
}
 

$quantidadeDeNotas = count($notas)-1;
$notaFilme = array_sum($notas)/$quantidadeDeNotas;
$planoPrime = true;

echo $notaFilme. "\n";

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

//atualizacão aula
$notasParaOFilme = [10,8,9,7.5,5,6.8];
