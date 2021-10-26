<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Conditional</title>
</head>

<body>
  <h1>Conditionals</h1>

  <pre>
  <?php 
    $today = date('D');
    print ($today == 'Tue') ? " <h2>We are on Tuesday</h2>": "<p>other</p>";
    $currentMonth = date('m');
    $otherMonth = date('M');
    echo ($currentMonth == '10')?"<h2>We are in October</h2>":"<p>($otherMonth)</p>";

    $currentMinute = date("i");
    if($currentMinute < 10) {
      echo "<h3>The current minute is less than 10</>";
    } elseif ($currentMinute > 15){
      echo "<h3>The current minute is greater than 15</h3>";
    }else {
      echo "<p>Does not meet any condition</p>";
    }
    echo "<p>Current minute is ".$currentMinute."</p>";

    $dayOfWeek = date('D');
    echo "<p>Today is ".$dayOfWeek."</p>";

    switch($dayOfWeek){
      case 'Mon':
        print 'Monday';
        break;
      case 'Tue':
        print 'Tuesday';
        break;
      case 'Wet':
        print 'Wetnesday';
        break;
      case 'Thu':
        print 'Thursday';
        break;
      case 'Fri':
        print 'Friday';
        break;
      case 'Sat':
        print 'Saturday';
        break;
      case 'Sun':
        print 'Sunday';
        break;
    }
  ?>
</pre>
</body>

</html>