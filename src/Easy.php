<?php

    function sum($num1, $num2){
        $soma = $num1 + $num2;
        return $soma;
    }

    function area($num1, $num2){
        $area = ($num1 * $num2) /2;
        return $area;
    }

    function getLastItem(array $arr){
        $lstarr = end($arr);
        return $lstarr;
    }

    function check(array $arr, $num){
        if (in_array($num, $arr)) {
            return true;
        }else {
            return false;
        }
        
    }

    function animals($numGalinhas, $numVacas, $numPorcos){
        $pataGalinhas = 2;
        $pataVacas = 4;
        $pataPorcos = 4;
        $resultado = ($numGalinhas * $pataGalinhas) + ($numVacas * $pataVacas) + ($numPorcos * $pataPorcos);
        return $resultado;
    }

    function smallNumber($num1, $num2){
        $menorNumber = min($num1, $num2);
        return $menorNumber;
    }

    function findSmallestNumber(array $arr){
        $menorNmbrArray = min($arr);
        return $menorNmbrArray;
    }

    function missNumber(array $arr){
        /* A resolução deve ser realizada aqui */
        return;
    }

    function isChristmas($date){
        /* A resolução deve ser realizada aqui */
        return;
    }

    function isValidEmail($email){
        /* A resolução deve ser realizada aqui */
        return;
    }

?>