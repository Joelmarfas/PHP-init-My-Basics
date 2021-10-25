<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>

<body>
  <h1>ITERATORS</h1>
  <h2>Iterator for</h2>
  <pre>
  <?php 
    for ($i = 0; $i <=5; $i++){
      echo "<p>Joel {$i} número de calvo</p>";
    }
  ?>
</pre>
  <pre>
  <h2>Iterator foreach</h2>
  <?php
echo "Ejemplo 1 de foreach: sólo el valor";
echo "<br>";
echo "<br>";


$a = array(1, 2, 3, 17, "Joel", "Martinez");

foreach ($a as $v) {
    echo "Valor actual de \$a: $v.\n";
}
echo "<br>";
echo "<br>"."mismo usando parentsesis","<br>"."<br>";

$a = [1, 2, 3, 17, "Joel", "Martinez"];

foreach ($a as $v) {
    echo "Valor actual de \$a: $v.\n";
}

echo "<br>";
echo "<br>";
echo "<br>";

/* Ejemplo 2 de foreach: valor (con su notación de acceso manual impreso con fines ilustrativos) */

$a = array(1, 2, 3, 17);

$i = 0; /* sólo para efectos ilustrativos */

foreach ($a as $v) {
    echo "\$a[$i] => $v.\n";
    $i++;
}

echo "<br>";
echo "<br>";
echo "<br>";

/* Ejemplo 3 de foreach: clave y valor */

$a = array(
    "uno" => 1,
    "dos" => 2,
    "tres" => 3,
    "diecisiete" => 17
);

foreach ($a as $k => $v) {
    echo "\$a[$k] => $v.\n";
}

echo "<br>";
echo "<br>";
echo "<br>";

/* Ejemplo 4 de foreach: arrays multidimensionales */
$a = array();
$a[0][0] = "a";
$a[0][1] = "b";
$a[1][0] = "y";
$a[1][1] = "z";

foreach ($a as $v1) {
    foreach ($v1 as $v2) {
        echo "$v2\n";
    }
}

echo "<br>";
echo "<br>";
echo "<br>";

/* Ejemplo 5 de foreach: arrays dinámicos */

foreach (array(1, 2, 3, 4, 5) as $v) {
    echo "$v\n";
}
?>
  <?php 
    $a = ['foo'=> 12, 'bar'=> 2];

    foreach ($a as $k){
      echo $k;
    }
  ?>
  <h2>Iterator while</h2>
  <?php
  $i = 0;
  while ($i <= 9) {
    $i++;
    echo "<p>number {$i}</p>";
  }
  ?>
  <h2>Iterator do while</h2>
  <?php
  $i = 0;
  do {
    $i++;
    echo "{$i} ";
  }while ($i<=10)
  ?>
  </pre>
</body>

</html>