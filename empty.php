<?php
//echo "<br/>Я люблю гусей".PHP_EOL;
//echo "<br/>Я люблю гусей";


//echo $value.' world!';

define("BR", "<br/>");
const VALUE = 'Hello';

/*
echo $a + $b . '<br>';    // сложение
echo $a * $b . '<br>';    // умножение
echo $a - $b . '<br>';    // вычитание
echo $a / $b . '<br>';  // деление
echo $a % $b . '<br>'; // остаток от деления
echo $a ** $b . '<br>'; // возведение в степень*/


$value = (int)'7Hello'; //7

//echo "На ферме гуляют: "+"2 жирафа"+"4 слона"+"и 2 поросёнка";
//var_dump((bool)$value); // >0 => true

$c = 0;
$c = $c + 1;
$c += 1;
$c -= -1;
$c++;
$c--;
++$c;

$c = 0;
/*echo $c.PHP_EOL; //0
echo ($c+1).PHP_EOL; //1 $c=0
echo $c++.PHP_EOL; //0 c=1
echo $c.PHP_EOL; //1 c = 1
echo ++$c.PHP_EOL;//2 c = 2*/

$a = 1;
$b = 2;
$isFly = ($a !== $b) and !($a < 0);
//echo $isFly;
var_dump($isFly);
/*var_dump($a == $b);  // Сравнение по значению
var_dump($a === $b); // Сравнение по значению и типу
var_dump($a > $b);    // Больше
var_dump($a < $b);    // Меньше
var_dump($a <> $b);  // Не равно
var_dump($a != $b);   // Не равно
var_dump($a !== $b); // Не равно без приведения типов
var_dump($a <= $b);  // Меньше или равно
var_dump($a >= $b);  // Больше или равно*/


echo $_SERVER['REMOTE_ADDR'];

$valA = 5;
$valB = &$valA;
$valB++;
echo $valA;