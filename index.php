<?php

// Projeto para verificar quantos X meses há em Y anos

// Criar uma função que rebeça dois parâmetros, $meses e $anos

// Dividir a quantidade de $anos por 12 para achar a quantidade de mêses que há na quantidade de $anos informada

// Dividir o resultado de $anos / 12 pela quantidade de $meses

// Retornar o resultado como integer

function quantMeses($meses, $anos): string
{

    $qntMeses = $anos * 12;
    $resultado = $qntMeses / $meses;

    switch ($resultado) {
        case $resultado < 1:
            $letra = "A";
            break;
        case ($resultado >= 1) && ($resultado < 2):
            $letra = "B";
            break;

        case ($resultado >= 2) && ($resultado < 3):
            $letra = "C";
            break;

        case ($resultado >= 3) && ($resultado < 4):
            $letra = "D";
            break;

        case ($resultado >= 4) && ($resultado < 5):
            $letra = "E";
            break;

        case ($resultado >= 5) && ($resultado < 6):
            $letra = "F";
            break;

        case ($resultado >= 6) && ($resultado < 7):
            $letra = "G";
            break;

        case ($resultado >= 7) && ($resultado < 8):
            $letra = "H";
            break;

        case ($resultado >= 8) && ($resultado < 9):
            $letra = "I";
            break;

        case $resultado >= 9:
            $letra = "J";
            break;



    }

    return "Dentro de $anos anos a quantidade de vezes que $meses meses se repete é " .
        round($resultado,2) . ", portanto aposenta-se na Letra $letra.";

}

echo quantMeses(33, 25);