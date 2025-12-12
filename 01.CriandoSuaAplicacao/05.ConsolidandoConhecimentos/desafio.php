<?php 
$saldo = 1001;
do{ 
    echo "\n********************
Titular: Silas Barbosa
Saldo atual: R$ $saldo
*********************
1. Consultar saldo atual
2. Sacar valor
3. Depositar valor
4. Sair \n";

$entrada =(int) fgets(STDIN);

switch ($entrada) {
    case 1:
        echo "Seu saldo atual é de R$ $saldo"; 
        break;

    case 2:
        echo "Qual valor gostaria de sacar? ";
        $saque = (float) fgets(STDIN);
        if($saque>$saldo){
            echo "Saldo Insuficiente para operação";
            break;
        }
        $saldo -= $saque;
        echo "Seu saldo atual é de R$ $saldo";
        break;

    case 3:
        echo "Qual valor gostaria de depositar? ";
        $deposito = (float)fgets(STDIN);
        $saldo += $deposito;
        echo "Desposito feito com sucesso";
        break;

    case 4:
        echo "Obrigado por utilizar nosso sistema!";
        break;
    default:
        echo "Insira uma entrada válida!";
        break;
    }
   
}while($entrada!=4);