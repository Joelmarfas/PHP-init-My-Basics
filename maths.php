<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>

<body>
  <?php 
		echo '<h1>Maths</h1>';
		echo '<p>Absolute value: '. abs(44.62). '</p>';
		echo '<p>Rounded value between 5.045 and 2: '. round(5.045, 2). '</p>';
		echo '<p>Highest value (5, 0, 45, 2): '. max(15, 1, 102, 8). '</p>';
		echo '<p>Lowest value (5, 0, 45, 2): '. min(5, 1, 451, 21). '</p>';
		echo '<p>Random number: '. rand(). '</p>';
	?>
</body>

</html>