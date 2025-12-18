<?php

/*Crie uma função em PHP que calcule o IMC baseado na altura e peso passados por parâmetro. */

function calcIMC(float $altura, float $peso):float {
    $imc =$peso/$altura**2;
    
    return $imc;
}

