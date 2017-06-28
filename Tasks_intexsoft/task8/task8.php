<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
	<title></title>
</head>
<body>
<?php
$primenum=0;
$n=0;
$sum=0;
$average=0;
    for ($i=-38; $i<=102;$i=($i+7))
    {
        if($i % 2 == 0)
        {
        	$n++;
        	$average=($average+$i);
        }
        else
        {
         	$sum+=$i;

        } 
    };
    $average/=$n;
echo "Количество четных элементов в интервале от -38 до 102 = $n</br>";
echo "Сумма нечетных элементов в интервале от -38 до 102 = $sum</br>";
echo "Cреднее значение элементов кратных 2 в интервале от -38 до 102 = $average</br>";
?>
</body>
</html>	