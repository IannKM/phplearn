<!doctype html>
<html>
<head>
    <title> Functions </title>
   <link rel="stylesheet" href="styles.css">
</head>
    <body>

    <?php
// Function which prints "Hello i am Siri"
    

/* function hello()  #to avoid code repetition and have reusable code
{
    echo "Hello i am Siri";

}  hello(); 
hello();
hello();
 */


//Function with argument
/* 
function hello ($name)
{ 
   echo "Hello I am $name";
}
hello('Siri.<br>');
hello('Alexa.<br>');  */

            /*alternatively */
/*             
 function hello ($name)
{ 
    return"Hello i am $name";
}
echo hello('siri<br>');
echo hello('alexa<br>');  */

// Create sum of two functions
        /*

function sum($a, $b)
{

    return $a + $b;
}
echo sum(4,5);
            */

// Create function to sum all numbers using ... $nums
        /*
function sum(...$nums)
{

    $sum = 0;
    foreach ($nums as $k) {
        $sum += $k;
    }
        return $sum;
}
echo sum(1, 2, 3, 4, 5, 6,);

        */
// Arrow functions
echo '<br>';

function sum(...$nums)
{

   return array_reduce($nums, fn($carry, $n) =>$carry + $n);

    }
echo sum(1, 2, 3, 4, 5, 6,);






    ?>
<br>
<br>
<a href='07loops.php'><button class="btn0">BACK</button></a>
<a href='09dates.php'><button class="btn1">NEXT</button></a>

</body>
</html>