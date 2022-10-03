<!doctype html>
<html>
<head>
    <title> Loops </title>
   <link rel="stylesheet" href="styles.css">
</head>
    <body>

    <?php

// while
        #while ($a <= 10) { }

// Loop with $counter
echo 'counter<br>';
$counter = 0;
 while ($counter <10){
    echo $counter.'<br>';
    #if ($counter ==5){break;}
    $counter++;
 }
echo '<br>';

// do - while
echo 'do-while -';
do {
    echo $counter;
    $counter++;
} while ($counter < 10); 

echo '<br></br>';

// for
echo 'for <br>';
for ($i=0; $i < 10 ; $i++) { 
    echo $i . '<br></br>';

}
// foreach
echo 'foreach<br> ';
$fruits = ['apple', 'banana', 'grapes'];
foreach ($fruits as $fruit) {
    echo $fruit;
}

echo '<br></br>';
echo 'foreach<br> ';
$fruits = ['apple', 'banana', 'grapes'];
foreach ($fruits as $i=> $fruit) {
    echo $i.' '. $fruit;
}
// Iterate over associative array

$person = [
    'name' => 'brad',
    'surname' => 'clob',
    'age' => '29',
    'hobbies' => ['gaming', 'movies']
 
];
foreach ($person as $key => $value) {
    if (is_array($value)) {
        echo $key .' '. implode(",", $value). '<br>';
    } else {
    echo $key.' '. $value. '<br>';
}}


    ?>
<br>
<br>
<a href='conditionals.php'><button class="btn0">BACK</button></a>
<a href='08functions.php'><button class="btn1">NEXT</button></a>

</body>
</html>