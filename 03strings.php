<!doctype html>
<html>
<head>
    <title> Strings </title>
   <link rel="stylesheet" href="styles.css">
</head>
    <body>

<?php

$name = 'php';
$string = 'Hello ' .$name. ' Learn.  '.'<br>' ;
$string2 = "Hello $name too.";
 echo $string, $string2 . '<br>' ;
 
//concatenation

$strng = "      Hello World        ";

echo "1 - " . strlen($strng) .'<br>';
echo "2 - " . trim($strng) .'<br>';
echo "3 - " . ltrim($strng) .'<br>';
echo "4 - " . rtrim($strng) .'<br>';
echo "5 - " . str_word_count($strng) .'<br>';
echo "6 - " . strrev($strng) .'<br>';
echo "7 - " . strtoupper($strng) .'<br>';
echo "8 - " . strtolower($strng) .'<br>';#
echo "9 - " . ucfirst('hello') .'<br>';
echo "10 - " . lcfirst('HELLO') .'<br>';
echo "11 - " . ucwords('hello world') .'<br>';
echo "12 - " . strpos($strng, 'world') .'<br>';
echo "13 - " . stripos($strng, 'world') .'<br>';
echo "14 - " . substr($strng, 8) .'<br>';
echo "15 - " . str_replace('World', 'PHP', $strng) .'<br>';
echo "16 - " . str_ireplace('world', 'PHP', $strng) .'<br>';

echo '<br>';
echo '<br>';

//multiline txt and line breaks

$longtxt = " Hello I am tring out PHP 
                for the first time, 
                I am excites to learn. " ;

            echo $longtxt. '<br><br>';
             echo nl2br($longtxt). '<br>';   
             echo '<br>';
             echo '<br>';
$longtxt1 = "<b> Service Admin </b> - 
                Manages service request and 
                monitor service health in <b>Azure.</b>";

    echo nl2br($longtxt1).'<br>';
    echo "3 - " . nl2br(htmlentities($longtxt1));


 

echo '<br>';
echo '<br>';
#echo("<button onclick=\"location.href='numbers.php '\">BACK </button>");   
#echo("<button onclick=\"location.href='arrays.php'\">NEXT page </button>");   
 
?>
    </body>

    
<a href='02numbers.php'><button class="#">BACK</button></a>
<a href='04arrays.php'><button class="btn1">NEXT</button></a>


</html>