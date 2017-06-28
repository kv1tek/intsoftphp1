<!DOCTYPE html>		<!-- создать функцию, которая принимает название месяца и выводит на экран количество дней в нем-->
<html>
<head>
    <meta charset="utf-8">
	<title>Month </title>
</head>
<body>
<?php              
$month=array('January'=>31,
			'February'=>28,
			'March'=>31,
			'April'=>30,
			'May'=>31,
			'June'=>30,
			'July'=>31,
			'August'=>31,
			'September'=>30,
			'October'=>31,
			'November'=>30,
			'December'=>31);
$nmonth=$_POST['month'];
	 if (array_key_exists("$nmonth", $month)) {
    	echo "You enter $nmonth, it has $month[$nmonth] days <br>";	
		}
		{echo 'Warning! Enter proper month<br>';}
?>
    <a href="index.php" >Try again</a>
</body>
</html>	