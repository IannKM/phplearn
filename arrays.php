<!doctype html>
<html>
<head>
    <title> Strings </title>
   <link rel="stylesheet" href="styles.css">
</head>
    <body>

    <?php

    

//create arrays

$fruits = ['apple', 'banana', 'grapes'];

echo '<pre>'; #to be readable nicely in the browser
var_dump($fruits);
echo '</pre>';

//getting elements by index
echo $fruits[1]. '<br>';

//set elements by index

echo $fruits [2] = 'peach' ;
echo '<pre>'; #to be readable nicely in the browser
var_dump($fruits);
echo '</pre>';

//check if array has element at index
isset($fruits[2]); #true

//appending element
$fruits[] = 'grape';
echo '<pre>'; #to be readable nicely in the browser
var_dump($fruits);
echo '</pre>';

//print the length of the array
echo count($fruits). '<br>';

//add elements at the end of the array
array_push($fruits, 'melon');
echo '<pre>'; #to be readable nicely in the browser
var_dump($fruits);
echo '</pre>';

//remove element from the end of the array
echo array_pop($fruits);
echo '<pre>'; #to be readable nicely in the browser
var_dump($fruits);
echo '</pre>';

//add elements at the beginning of the array
array_unshift($fruits, 'orange');
echo '<pre>'; #to be readable nicely in the browser
var_dump($fruits);
echo '</pre>';

////remove element from the beginning of the array
echo array_shift($fruits). '<br>';

//convert strings into array
$string =  "banana, mango, avacado";
echo '<pre>';
echo var_dump (explode(",", $string));
echo '</pre>';

//combine array elements into string

echo implode(",", $fruits). '<br><br>';



//check if element exist ine the array
echo "if apple exists in array:-".'<pre>';
echo  var_dump (in_array("apple", $fruits));
echo '</pre>'. '<br>';

echo "if mango exists in array:-".'<pre>';
echo  var_dump (in_array("mango", $fruits));
echo '</pre>'. '<br></br>';

//search element index in the array
echo "searches if banana exists in array:-".'<pre>';
echo var_dump(array_search('banana', $fruits));
echo '</pre>'. '<br></br>';

//merge two arrays
$veggie = ["kales","onions"];

echo '<pre>';
echo var_dump(array_merge($fruits, $veggie));
echo '</pre>'. '<br></br>';

    /* better way to merge arrays */
echo '<pre>';
echo var_dump([...$fruits, ...$veggie]);
echo '</pre>'. '<br>';

//sorting of array (reverse order also)
sort($fruits);
echo '<pre>';
var_dump(($fruits));
echo '</pre>'. '<br></br>';


/*reverse sort*/
echo '<pre>';
rsort($fruits);
var_dump($fruits);
echo '</pre>';




    ?>
<br>
<br>
<a href='strings.php'><button class="btn0">BACK</button></a>
<a href='#'><button class="btn1">NEXT</button></a>

</body>
</html>