<link rel="stylesheet" href="styles.css">
<?php 

// Class and instance

require_once "fellow.php";
require_once "student.php";

$student = new Student("john", "smith", "1234");
echo '<pre>';
print_r ($student);
echo '</pre>'.'<br>';


/* 
$f = new Fellow("Terry",  "smith");
$f-> setAge(40);

echo '<pre>';
print_r ($f);
echo '</pre>'.'<br>';

echo $f->getAge();

$f2 = new Fellow("john",  "smith"); 
$f2-> setAge(25);
echo '<pre>';
print_r ($f2);
echo '</pre>'.'<br>';

echo Fellow::$counter;

 */











?>
<br>
<br>
<a href='../12OOP/one.php '><button class="btn0">BACK</button></a>
<a href="../13curl/curl.php"><button class="btn1">NEXT</button></a>
