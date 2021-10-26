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
		echo "<h1>Functions</h1>";

		function sum ($a, $b) {
			return $a + $b;
		}
		function res ($a, $b) {
			return $a - $b;
		}
		
		function multiplication ($a, $b) {
			return $a * $b;
		}

		function division($a, $b) {
			return $a / $b;
		}

		function operation($a, $b, $op) {
			switch ($op) {
				case "+":
					echo "Result: $a + $b = " .sum($a, $b);
					break;
				case "-":
					echo "Result: $a - $b = " .res($a, $b);
					break;
				case "*":
					echo "Result: $a * $b = " .multiplication($a, $b);
					break;
				case "/":
					echo "Result: $a / $b = ". division($a, $b);
			}
		}

		echo "<br />";
		echo "Sum 3 + 4= " .sum(1, 2);
		echo "<br />";
		echo "Multiplication 2 X 5 = ". multiplication(2, 5);
		echo "<br />";
		echo "Division 3 / 4 = ". division(2, 5);
		echo "<br />";
		operation(2,5, "-");
	?>
  </pre>
</body>

</html>