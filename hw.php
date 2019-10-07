<?php $title = "Второй"?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title><?=$title?></title>
</head>
<body>
<?php
$valueA = -5;
$valueB = 4;

if (($valueA > 0) && ($valueB > 0)){
	echo ($valueA - $valueB);
} elseif (($valueA < 0) && ($valueB < 0)) {
	echo ($valueA * $valueB);
} else {
	echo ($valueA + $valueB);
}
echo "<br/>";
$valueR = 10;
switch ($valueR) {
    case 0:
        echo "0";
	case 1:
		echo "1";
	case 2:
		echo "2";
	case 3:
		echo "3";
	case 4:
        echo "4";
    case 5:
		echo "5";
	case 6:
		echo "6";
	case 7:
		echo "7";
	case 8:
        echo "8";
    case 9:
		echo "9";
	case 10:
		echo "10";
	case 11:
		echo "11";
	case 12:
        echo "12";
    case 13:
		echo "13";
	case 14:
		echo "14";
	case 15:
		echo "15";
	default:
		echo "Больше 15";
}
echo "<br/>";
plusRet(10,15);
function plusRet($valueG,$valueH)
{
    echo $valueG + $valueH;
    return;
}
minusRet(15,5);
function minusRet($valueG,$valueH)
{
	echo "<br/>";
    echo $valueG - $valueH;
    return;
}
multRet(30,2);
function multRet($valueG,$valueH)
{
	echo "<br/>";
    echo $valueG * $valueH;
    return;
}
divisionRet(100,5);
function divisionRet($valueG,$valueH)
{
	echo "<br/>";
    echo $valueG / $valueH;
    return;
}
echo "<br/><br/><br/>";
mathOperation(20,5,1);
function mathOperation($arg1, $arg2, $operationswitch){

switch ($operationswitch) {
	case 1:
	function plusCalc($arg1,$arg2)
	{
		echo $arg1 + $arg2;
		return;
	};
	break;
	case 2:
	function minusRet($arg1,$arg2)
	{
		echo $arg1 - $arg2;
		return;
	}
	break;
	case 3:
	function multRet($arg1,$arg2)
	{
		echo $arg1 * $arg2;
		return;
	};
	break;
	case 4:
	function divisionRet($arg1,$arg2)
	{
    echo $arg1 / $arg2;
    return;
	}
	break;
	}
}
?>
</body>
</html>