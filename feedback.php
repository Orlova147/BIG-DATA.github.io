<!DOCTYPE html>
<html lang="ru">
<head>
	<meta charset="utf-8" />
	<title>BIG DATA</title>
</head>

<link rel="stylesheet" type="text/css" href="./style.css"

<body>
	<header class="header">
		<hr size=4px color=#8a2be2>
		<h1 align="center" margin-top="30" class="f2">BIG DATA</h1>
		<hr size=4px color=#8a2be2>

		<nav>
			<img src="./images/logoo.png" width="130" hspace="30">
			<ul class="header_list">
				<li><a href="index.html">Главная</a></li>
			</ul>
		</nav>
	</header>

	<main>
		<h2>Бронирование столика</h2>
		<form action="form.php" method="post">
			<label for="name">Ваше имя:</label>
			<input type="text" id="name" name="name" required><br><br>

			<label for="phone">Номер телефона:</label>
			<input type="tel" id="phone" name="phone" required><br><br>

			<label for="date">Дата:</label>
			<input type="date" id="date" name="date" required><br><br>

			<label for="time">Время:</label>
			<input type="time" id="time" name="time" required><br><br>

			<button type="submit">Забронировать</button>
		</form>
	<?php  
            /* Подключаемся к базе данных */
			$link = mysqli_connect("localhost", "root", "");
			mysqli_select_db($link, "OrlovaE");

			/* Выбираем данные */
			$sql="SELECT name, email, message FROM OrlovaE";
			$result=mysqli_query($link, $sql);

			while ($line=mysqli_fetch_row($result)) 
			{
}			echo "<p>Ваша бронь:</p>"; 
            echo "<p>Имя: " . $name . "</p>"; 
            echo "<p>Телефон: " . $phone . "</p>"; 
            echo "<p>Дата: " . $date . "</p>"; 
            echo "<p>Время: " . $time . "</p>"; 
			}
     ?> 
	</main>

	<footer>
		<p>&copy; 2024 BIG DATA</p>
	</footer>
</body>
</html>