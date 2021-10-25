<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Dates</title>
</head>

<h1>Date</h1>
<pre>
<body>
  <?php
  $date = new DateTime('2000-01-01');
    echo $date->format('Y-m-d');
    echo "<h3>Today is " . date("Y.m.d"). "</h3>";
    echo "<h3>Today is " . date("m"). "</h3>";
    echo "<h3>Actual minute is " . date("i:s"). "</h3>";
  ?>
</body>
</pre>

</html>