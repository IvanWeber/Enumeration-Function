<?php
function enumeration($N) {
	for ($i = 0, $n = 0; $i <= INF; $i++) {
		$number_of_numerals = iconv_strlen($i);
		if (($i % $number_of_numerals) === 0) {
		$n++;
		print ($i . ' ');
	}
	if($N === $n) {
		break;
	}
}
}	
?>

<?php if (empty($_POST)): ?>
<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Перебор чисел</title>
<link rel="stylesheet" href="css/style.css">
</head>
<body>
<div class="container">
    <h1 class="main-header">Функция перебора чисел</h1>
    <form action="index.php" method="post">
        <input type="number" name="number" placeholder="Введите ваше число" autocomplete="off">
        <input type="submit" value="Запустить перебор чисел">
    </form>
</div>
</body>
</html>

<?php elseif($_POST['number']==='' || (int)$_POST['number']<=0): ?>
<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Перебор чисел</title>
<link rel="stylesheet" href="css/style.css">
</head>
<body>
<div class="container">
    <h1 class="main-header">Функция перебора чисел</h1>
    <form action="index.php" method="post">
        <input type="number" name="number" placeholder="Введите ваше число" autocomplete="off">
        <input type="submit" value="Запустить перебор чисел">
    </form>
	<p class='validation'><?='Пожалуйста, введите целое положительное число'?></p>
</div>
</body>
</html>

<?php else: ?>
<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Перебор чисел</title>
<link rel="stylesheet" href="css/style.css">
</head>
<body>
<div class="container">
    <h1 class="main-header">Функция перебора чисел</h1>
    <form action="index.php" method="post">
        <input type="number" name="number" placeholder="Введите ваше число" autocomplete="off">
        <input type="submit" value="Запустить перебор чисел">
    </form>
	<h2 class="result-header">Ваши числа:</h2>
	<p><?=enumeration((int)$_POST['number']);?></p>
</div>
</body>
</html>
<?php endif; ?>
