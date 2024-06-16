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

//Miss Number
$arrayMissNumeros = array(1, 2, 4, 5, 6, 7, 8, 9, 10);

//Função é natal
$dataHoje = date('Y-m-d');

//Função email válido
$email1 = 'aldoolindo@gmail.com';
$email2 = 'aldoolindo@com';
$email3 = '@gmail.com';



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
echo "O menor número do array é " . $menorNmbrArray . "<br>";

echo "<h2>Função Número ausente</h2>";
$numAusente = 'missNumber';
$numAusente = missNumber($arrayMissNumeros);
echo "O número ausente no array é o número " . $numAusente . "<br>";

echo "<h2>Função hoje é natal?</h2>";
$hojeNatal = 'isChristmas';
$hojeNatal = isChristmas($dataHoje);
if ($hojeNatal == 'true'){
  echo "Hoje " . $dataHoje . " é Natal<br>";
}else {
  echo "Hoje " . $dataHoje . " não é natal!<br>";
}

echo "<h2>Função validação e-mail</h2>";
$validaEmail = 'isValidEmail';
if(isValidEmail($email1) === true ){
  echo "O e-mail " . $email1 . " é válido <br>";
}else {
  echo "O e-mail " . $email1 . " é inválido <br>";

}

if(isValidEmail($email2) === true ){
  echo "O e-mail " . $email2 . " é válido <br>";
}else {
  echo "O e-mail " . $email2 . " é inválido <br>";

}

if(isValidEmail($email3) === true ){
  echo "O e-mail " . $email3 . " é válido <br>";
}else {
  echo "O e-mail " . $email3 . " é inválido <br>";

}




?>