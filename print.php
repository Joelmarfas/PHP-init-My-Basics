<!-- Generate an instruction that makes use of "echo"
Generate an instruction that makes use of "print"
Generate an instruction that makes use of "print_r",
it is important that you assign a complex value to analyze its potential -->

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>

<body>

  <h1><?php echo "Echo functionality";?></h1>
  <h2><?php print "Print functionality";?></h2>
  <p>
  <pre>
  <?php
  $a = ["Assembler", "Assembleario", "Assemb"];
print($a);
echo "<br>";
  $a = array("Assembler", "Assembleario", "Assemb");
print($a);
echo "<br>";
  $a = array ("Assembler, Assembleario, Assemb");
print_r($a);

echo "<br>";

$b = array("Yai"=>"35", "Kike"=>"37", "Joel"=>"43");
print_r($b);
$b = array("Yai=>35, Kike=>3, Joel=>43");
print_r($b);

echo "<br>";

  $b = array(1,2,3,5);

  print_r($b);
  print("Joel Martínez ");
  ?>

</pre>
</body>

</html>

<!-- <?php

echo "echo does not require parentheses.";
echo "<br>";
echo "<br>";

// Strings can either be passed individually as multiple arguments or
// concatenated together and passed as a single argument
echo 'This ', 'string ', 'was ', 'made ', 'with multiple parameters.', "\n";
echo 'This ' . 'string ' . 'was ' . 'made ' . 'with concatenation.' . "\n";

// No newline or space is added; the below outputs "helloworld" all on one line
echo "hello";
echo "world";

// Same as above
echo "hello", "world";

echo "This string spans
multiple lines. The newlines will be
output as well";

echo "This string spans\nmultiple lines. The newlines will be\noutput as well.";

// The argument can be any expression which produces a string
$foo = "example";
echo "foo is $foo"; // foo is example

$fruits = ["lemon", "orange", "banana"];
echo implode(" and ", $fruits); // lemon and orange and banana

// Non-string expressions are coerced to string, even if declare(strict_types=1) is used
echo 6 * 7; // 42

// Because echo does not behave as an expression, the following code is invalid.
// ($some_var) ? echo 'true' : echo 'false';

// However, the following examples will work:
($some_var) ? print 'true' : print 'false'; // print is also a construct, but
                                            // it is a valid expression, returning 1,
                                            // so it may be used in this context.

echo $some_var ? 'true': 'false'; // evaluating the expression first and passing it to echo
?> -->