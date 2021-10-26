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
		$value= 31;
		$hello = 'Joel ';
		$hello .= 'Martinez';

		echo '<p>strings</p>';
		echo '<p>this is a string</p>';
		echo "<p>String and a value of variable: $value </p>";
		echo "<p>String and a value concatenated: " .$value. "</p>";
		echo "<p>String and a value concatenated: " .$hello. "</p>";
		$greet = function($name) { 
			printf(strtolower("Hi ". $name));
		};
		$greet("Joel");
		echo "<br/>";

		$bye = function($name) { 
			printf("BYE ". $name);
		};
		$bye("Joel");

		$string = 'repeat string <br/>';
		print_r(str_repeat($string, 5));

		$lengthString = '<p>Joel Martinez Fañanas </p>';
		print_r(strlen($lengthString));

		echo ('<br/>');
		echo strpos('Hola JOel, Que tal, Bien', 'Yo');

		echo ('<br/>');
		echo strtoupper('Hola Joel, Que tal, Yo');

		echo ('<br/>');
		echo strtolower('HELLO JOEL, WCOMO ESTAS');

		echo ('<br/>');
		echo substr('HELLO Joelito', -5);

	?>
</body>

</html>