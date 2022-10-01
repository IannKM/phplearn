<!doctype html>
<html>
<head>
    <title> Strings </title>
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

if (!isset($person['address'])) {
    $person['address'] = 'unknown';

}
echo '<pre>';
print_r($person);
echo '</pre><br>';



    ?>
<br>
<br>
<a href='strings.php'><button class="btn0">BACK</button></a>
<a href='#'><button class="btn1">NEXT</button></a>

</body>
</html>