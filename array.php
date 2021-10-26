<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>

<body>
  <pre>
  <?php 
		echo "<h1>Arrays</h1>";
		$stringArray = ['Joel', 'Martinez', 'Fañanas'];
		$numberArray = [1, 3, 5, 10.29, 12.9, 75];
		$multiArray = [ 
			[1, 2, 3],
			[4, 5, 6],
			[7, 8, 9],
		];


		echo print_r($stringArray);
		echo "<br/>";
		echo print_r($numberArray);
		echo "<br/>";
		echo print_r($multiArray);
		echo "<br/>";
		echo print_r(count($multiArray));
		echo "<br/>";
		echo print_r(array_merge($stringArray, $numberArray));
		echo "<br/>";
		echo print_r(end($numberArray));
		echo "<br/>";
		array_push($stringArray, "Joel", "Martinez");
		print_r($stringArray);
	?>
  </pre>
</body>

</html>