<?php
 //numbers   
   /* $a = 5 ;
      $b = 6 ;
      $c = 4.3 ; */

//arithmetic
    #echo $a + $b. '<br>';
    #echo $a * $b. '<br>';
    #echo $a / $c. '<br>';

//assignment with math operators
   #$a = $a + $b; 
   #$a += $b; echo $a. '<br>';

// increment operator
      #echo $a++.'<br>';
      #echo ++$a.'<br>';

       #echo $a--.'<br>';
      #echo --$a.'<br>';

// number checking fxn
   /*
   is_int(89);
   is_float(1.25); //true
   is_double(1.2);
   is_numeric('3.5');
   is_numeric(3g); //false */

//conversion

#$strnumber = '13.5';
#$number = (float)$strnumber;
#echo var_dump($number). '<br>';
#echo var_dump($n_one = (int)$strnumber). '<br>';

//formatting numbers

   $number = 123456789.12345;
   echo number_format($number, 2, '.', ',');
    
    
    
    
   echo '<br>';
   echo '<br>';
   echo("<button onclick=\"location.href='test.php'\">BACK </button>");   
   echo("<button onclick=\"location.href='strings.php'\">NEXT page </button>");   
    
    
    ?>
