<!doctype html>
<html>
<head>
    <title> Associative array</title>
   <link rel="stylesheet" href="styles.css">
</head>
    <body>

    <?php
//create an associative array- an abstract data type that can hold data in (key, value) pairs.

$person = [
    'name' => 'brad',
    'surname' => 'clob',
    'age' => '29',
    'hobbies' => ['gaming', 'movies']
 
];
echo '<pre>';
var_dump($person);
echo '</pre><br>';
    #you can also uses
echo '<pre>';
print_r($person);
echo '</pre><br>';

//get elements by key
echo $person['name']. '<br>'; 

//set element by key
$person['channel'] = 'youtube';
echo '<pre>';
print_r($person);
echo '</pre><br>';

//Null coalescing assignment operator
    /*
if (!isset($person['address'])) {
    $person['address'] = 'unknown';

}
echo '<pre>';
print_r($person);
echo '</pre><br>';              */

  /* short hand version for this*/

  $person ['address'] ??= 'ABSENT';
  echo '<b>short-hand version:</b>'. '<pre>';
  print_r($person);
  echo '</pre><br>';


//check if array has a specific key

        #use isset()

//print the keys of the array

echo '<pre>';
print_r(array_keys($person));
echo '</pre><br>';
//print the values of the array 
echo '<pre>';
print_r(array_values($person));
echo '</pre><br>';
 
//soring associative arrays by value
        /* sorting by keys */
ksort($person);
echo '<pre>';
print_r($person);
echo '</pre><br>';

        /* sort by values */
asort($person);
echo '<pre>';
print_r($person);
echo '</pre><br>';

// 2D arrays
 echo 'On the case below: <b><i>1=true, blank=false.</i></b>';
 $todos = [
    ['Title' => 'School work', 'completed' => true],
    ['Title' => 'music practise', 'completed' => false],

 ];
 echo '<pre>';
 print_r($todos);
 echo '</pre><br>'; 
 
 
 
 ?>
<br>
<br>
<a href='04arrays.php'><button class="btn0">BACK</button></a>
<a href='06conditionals.php'><button class="btn1">NEXT</button></a>

</body>
</html>