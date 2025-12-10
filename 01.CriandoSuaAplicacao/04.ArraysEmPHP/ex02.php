<?php /*2 - Percorra um array de notas (cada uma de 0 a 10) e exiba a nota do aluno em questão com a informação se o aluno foi aprovado ou não.
Se a nota for maior do que 6, o aluno foi aprovado. Caso contrário, foi reprovado.*/


$notas = [];

for($i=1; $i<$argc; $i++){
    $notas[$i] = (float) $argv[$i];
} 

foreach($notas as $nota){
   $result = $nota>6 ? "aprovado" : "reprovado";
   
   echo "Aluno $result \n";
   
   
    /*if($nota>6){
        echo "Aluno aprovado com a nota: $nota \n";

    }
    else{
        echo "Aluno reprovado com a nota: $nota \n";
    }*/
}