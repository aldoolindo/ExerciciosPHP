<?php

use function PHPUnit\Framework\returnSelf;
use function PHPUnit\Framework\returnValue;

include ('src/Easy.php');
//Para realizar o teste utilizar o seguinte comando na pasta "vendor\bin": ./phpunit "C:\Users\aldoo\Documents\GitHub\ExerciciosPHP (1)\tests" --testdox tests

//soma, area, smallNumber
$numero1 = rand(1, 30);
$numero2 = rand(20, 40);

//qtde itens, ultimo elemento do array, elemento dentro do array
$array = ['ALDO', 'DANIEL', 'MISAQUE'];
$name = 'MISAEL';

//Qtde Patas animais
$numGalinhas = rand(1,5);
$numVacas = rand(1,5);
$numPorcos = rand(1,5);

//Menor Number array
$lenArray = 10;
$arrayNumeros = [];
for ($i = 0; $i <$lenArray; $i++) {
  $arrayAleatorio = rand(1,50);
  array_push($arrayNumeros, $arrayAleatorio);
}


echo "<h2>Função Soma</h2>";
$soma = 'sum';
// $soma($numero1, $numero2);
echo "O resultado da função sum é: " . $soma($numero1, $numero2) . "<br>";


echo "<h2>Função Área do Triângulo</h2>";
$area = 'area';
echo "A área do trinagulo é: " . $area($numero1, $numero2) . "<br>";

echo "<h2>Função LastItem Array</h2>";
$laslitem = 'getLastItem';
echo "O último elemento do array é: " . $laslitem($array) . "<BR>";

echo "<h2>Função ContemItens array</h2>";
$check = 'check';
$check = check($array, $name);
if ($check) {
  echo "O nome " . $name . " consta no array" . "<br>" ;
}else {
  echo "O nome " . $name . "não consta no array" . "<br>";
}

echo "<h2>Função QtdePatas Animais</h2>";
$animals = 'animals';
$animals = animals($numGalinhas, $numVacas, $numPorcos);
echo "A quantidade de patas entre Galinhas, Vacas e Porcos são de " .  $animals . " patas.<br>";

echo "<h2>Função SmallNumber</h2>";
$smallNumber = 'smallnumber';
$smallNumber = smallNumber($numero1, $numero2);
echo "O menor número é o " . $smallNumber . " .<br>";

echo "<h2>Função SmallNumber no array</h2>";
$menorNmbrArray = 'findSmallestNumber';
$menorNmbrArray = findSmallestNumber($arrayNumeros);
echo $menorNmbrArray;




?>