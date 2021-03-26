<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>
		<?php $title = 'Document';
		echo $title;
		?>
	</title>
</head>
<body>
<?php
$tit = 'Document';
$h1 = 'Здесь содержится заголовок';
?>

<h1><?php echo $h1;?></h1>

<?php
$a = 5;
$b = 10;

$a = $a + $b;
$b = $a - $b;
$a = $a - $b;

 echo 'Переменная а = ' . $a. '<br>';
 echo 'Переменная b = ' . $b;

 ?>


</body>
</html>