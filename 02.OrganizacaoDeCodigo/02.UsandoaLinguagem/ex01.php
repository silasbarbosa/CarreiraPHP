<?php

/* Escreva um programa em PHP que inicialize um array de notas e exiba somente as 3 maiores notas do array.*/

$array_notas = array (2,3,4,7,9,1);


sort ($array_notas);
echo array_slice ($array_notas,-3);