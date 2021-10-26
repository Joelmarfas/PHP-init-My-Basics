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
		$integer = 100;
		$float= 100.35;
		$boolean= true;
		$string = "Joel Martinez";
		$null = null;
		$array = ["Joel", "Martinez", "!"];
		$array2 = array("Joel " . "Martinez2!");
		$object = (object) [
			"name" => "Joel",
			"surname" => "Martinez",
			"age" => 31
		];
		
		echo "<p>types</p>";
		echo "Integer: ". $integer."<br/>";
		echo "Float: ". $float."<br/>";
		echo "Boolean: ". $boolean."<br/>";
		echo "String: ". $string."<br/>";
		echo "Null: ". $null."<br/>";
		echo "Array: ". print_r($array)."<br/>";
		echo "Array 2: ". print_r($array2)."<br/>";
		echo "Object: ". print_r($object)."<br/>";
	?>
</body>
</pre>

</html>