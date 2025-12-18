<?php
/*Escreva uma função em PHP que receba dois números inteiros e uma string representando
 a operação matemática e retorne o resultado da operação.*/

function calculadora (int $num1, int $num2, string $operador): int{
    switch ($operador) {
        case "+" :
            $calculo = $num1 + $num2;
            break;
        case "-":
            $calculo = $num1 - $num2;
            break;
        case "x":
            $calculo = $num1 * $num2;
            break;
        case "/":
            $calculo = $num1 / $num2;
            break;
        default:
            break;
        }
    return $calculo;        
}

$val1 = 2;
$val2 = 5;
$op = "x";

echo calculadora($val1, $val2, $op);