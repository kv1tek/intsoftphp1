<!DOCTYPE html>
<html>
<head>
    <title>Groups list</title>
<meta charset="utf-8">
	<title>Name by characters</title>
</head>
<body>
<?php
$name=str_split($_POST['user_name']);	// объявляем переменную name и задаем ее значение в виде массива значения переменной POST полученной с формы ввода имени
	if ($name != 0) 
		{
			foreach ($name as $key => $value) 
			{		
				echo $value . "<br>";			//вывод по буквам c новой строки <br> через цикл foreach значения переменной name
			}
		 echo 'Вы не ввели имя!<br>';
		}	
?>
    <a href="index.php" >Попробовать еще раз</a>
</body>
</html>	