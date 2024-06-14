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
        /* A resolução deve ser realizada aqui */
        return;
    }

    function smallNumber($num1, $num2){
        /* A resolução deve ser realizada aqui */
        return;
    }

    function findSmallestNumber(array $arr){
        /* A resolução deve ser realizada aqui */
        return;
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