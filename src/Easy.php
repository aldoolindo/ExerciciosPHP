<?php

use PharIo\Manifest\Email;

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

    function missNumber($array){
        $somaEsperada = 55;
        $somaAtual = array_sum($array);
        $numAusente = $somaEsperada - $somaAtual;
        return $numAusente;
    }

    function isChristmas($date){
        $natal = Date('2024-12-25');
        if ($date === $natal) {
            return true;
        }else {
            return false;
        }
    }

    function isValidEmail($email){
        //verifica se o email contem o caractere @
        if (strpos($email, '@') === false) {
            return false;
        }
        
        //verifica se o email contem pelo menos um caracter antes do @
        $partes = explode('@', $email);
        if (count($partes)!== 2 || empty($partes[0])){
            return false;
        }
    
        //verifica se o email contém o caractere '.' depois do @
        if (strpos($partes[1], '.') === false){
            return false;
        }

        //verifica se o '.' e o @ estão em posicções válidas
        $positionArroba = strpos($email, '@');
        $positionPonto = strpos($email, '.');
        if ($positionArroba > $positionPonto || $positionArroba === strlen($email) -1 || $positionPonto === strlen($email) -1){
          return false;  
        }

        //se passar por todas as validações o email é valido
        return true;
    }
?>