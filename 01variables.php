<!doctype html>
<html>
<head>
    <title> Variables</title>
    <link rel="stylesheet" href="styles.css">

</head>
    <body>
        <?php
         echo 'hello world';
            echo '<br> <button> call me</button></br>';

//singleline comment
#comment
/* multiline*/

//variable use $

            $name = 'ian';
            $age = 28;
            $var1 = 689.9;
                echo $name.'<br>';
                echo $age.'<br>';
                echo $var1;
                echo gettype($name);
                
             
                
                
//print the whole variable
echo '<br>';
var_dump($name); 



/*$a = "Welcome TutorialsPoint!";
var_dump($a).'</br>';
echo '<br></br><';
$b = array(2,'hello',22.99, array('a','b',2));
var_dump($b);
*/
        echo '<br><br>';
      $name = false; 
      $age = 29;
      $var1 = 5.4; 
      echo gettype($name).'</br>';    
//  variable checking fxns
    is_string($name); //false
    is_int($age);
    is_double($var1) ; 
//check if var is defined

isset($name);    //true

//constants

define('PI', 3.14);
echo PI.'<br>';

//using php built-in constants
echo SORT_ASC.'<br>';
echo PHP_INT_MAX.'<br>';

//button 
echo("<button onclick=\"location.href='numbers.php'\">next>num. page </button>");




    
    ?>
<br>


<a href=" 02numbers.php" class="button">Next</button></a>
    </body>
</html>

