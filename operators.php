<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Operators</title>
</head>

<body>
  <pre>
  <h1>Operators</h1>
  <?php
    $a = 5;
    $b = 10;

    $sum = $a + $b;
    $res = $a - $b;
    $multi = $a * $b;
    $div = $a / $b;
    $module = $a % $b;
    echo "<br>";
    echo var_dump($sum); 
    echo "<br>";
    echo "El resultado de la suma es {$sum}";
    echo "<br>";
    echo "<br>";
    echo var_dump($res);
    echo "<br>";
    echo "<br>";
    echo var_dump($multi);
    echo "<br>";
    echo "<br>";
    echo var_dump($div);
    echo "<br>";
    echo "<br>";
    echo var_dump($module);
    echo "<br>";
    echo "<br>";
    echo var_dump($sum == $multi);
    echo "<br>";
    echo "<br>";
    echo var_dump($module != $sum);
    echo "<br>";
    echo "<br>";
    echo var_dump($div);
    echo "<br>";
    echo "<br>";
    echo var_dump($div <= $res);
    echo "<br>";
    echo "<br>";
    echo var_dump($multi >=$div);
    echo "<br>";
    echo "<br>";
    echo var_dump($multi && $div);
    echo "<br>";
    echo "<br>";
    echo var_dump($multi || $div);
    echo "<br>";
    echo "<br>";
    echo var_dump(!$div);
  ?>
  </pre>
</body>

</html>