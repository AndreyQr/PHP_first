<?php 



$i = 0;
const END = 100;
const DIVIDER = 3;
while ($i < END) {
	$i++;
	if ($i % DIVIDER == 0) {
        echo $i;
        echo "<br/>";
	}
}
$x = 0;
/*do{
    if ($x = 0) {
        echo '0 – ноль.';}
    if else  ($x % 2 = 0){
        echo $x + 'четное число'
    }
    if else  ($x % 2 != 0){
        echo $x + 'нечетное число'
    }
}while (x < 10);*/

$test = 'Потонула деревня в ухабинах,Заслонили избенки леса.Только видно на кочках и впадинах,Как синеют кругом небеса.<br/>';
$letterChanger = ['а'=> 'a', 'б' => 'b', 'в' => 'v', 'г' => 'g','д' => 'd', 'е' => 'e', 'э' => 'e', 'ю' => 'yu', 'я' => 'ya'];
echo (strtr($test, $letterChanger));
$space = 'пробелы заменяет на подчеркивания';
$spaceChanger = [' '=> '_'];
echo (strtr($space, $spaceChanger));
$allRegions = [
	'Московская область' => 'Москва', 'Зеленоград','Клин',
    'Ленинградская область' => 'Санкт-Петербург', 'Всеволожск','Павловск',
    'Рязанская область' => 'Рязань', 'Рыбное','Кораблино'
];
foreach ($allRegions as $key => $city) {
	echo "<br/>$key<br/>-$city";
}

?>