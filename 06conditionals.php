<!doctype html>
<html>
<head>
    <title> Conditionals </title>
   <link rel="stylesheet" href="styles.css">
</head>
    <body>

    <?php

$a = 2;
$b = 3;


//IF statement
if ($b > $a) {
    echo 'true';
}
echo '<br>'. '<br>';
//IF ELSE


    if ($a> $b) {
        echo 'true';
    } else {
        echo 'false';
    }
    
echo '<br>'. '<br>';

//ELSEIF
if ($a > $b) {
    echo "a is bigger than b";
} elseif ($a == $b) {
    echo "a is equal to b";
} else {
    echo "a is smaller than b";
}
echo '<br>'. '<br>';
//difference btwn == and ===

if ($a == 2){
    echo 'yes';
}
echo '<br>'. '<br>';

        
if ($a === '2'){
    echo 'yes';
    }else {         /*it will print "no" because it 
                        compares types eg int and strings */
        echo 'no';
    }           

echo '<br>';

//IF AND
if ($a == 2 && $b ===3){
    echo "do something";
}
echo '<br>';
//IF OR    use OR/||
if ($a > 2 or $b ===3){
    echo "you did something";
}

echo '<br>';

// Ternary if -----is a short hand for if else and nested if-else statements statement 
echo $a < 4 ? 'small' : 'big';

echo '<br>';

//short ternary
$age = 0;
$myage = isset ($age) ?: 12;
echo '<pre>';
var_dump($myage);
echo '</pre><br>';

//null coalescing operator
$myname = isset($name) ? $name: 'jane';
$myname = $name ?? 'john';

//SWITCH
$userrole = 'admin'; // editor, user, admin
switch ($userrole) {
    case 'admin':
        echo 'admin';
        break;
    
    case 'editor':
        echo 'editor';
        break;
    case 'user':
        echo 'user';
        break;
    default:
        echo 'Ivalid role';
}







    ?>
<br>
<br>
<a href='05associative_array.php'><button class="btn0">BACK</button></a>
<a href='07loops.php'><button class="btn1">NEXT</button></a>

</body>
</html>