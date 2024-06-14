<?php

use function PHPUnit\Framework\returnSelf;
use function PHPUnit\Framework\returnValue;

include ('src/Easy.php');

$numero1 = rand(1, 30);
$numero2 = rand(20, 40);
$array = ['ALDO', 'DANIEL', 'MISAQUE'];
$name = 'MISAEL';

$soma = 'sum';
// $soma($numero1, $numero2);
echo "O resultado da função sum é: " . $soma($numero1, $numero2) . "<br>";


$area = 'area';
echo "A área do trinagulo é: " . $area($numero1, $numero2) . "<br>";

$laslitem = 'getLastItem';
echo "O último elemento do array é: " . $laslitem($array) . "<BR>";

$check = 'check';
$check = check($array, $name);
if ($check) {
  echo "O nome " . $name . " consta no array" . "<br>" ;
}else {
  echo "O nome " . $name . "não consta no array" . "<br>";
}





?>