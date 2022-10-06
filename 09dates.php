<!doctype html>
<html>
<head>
    <title> Dates</title>
   <link rel="stylesheet" href="styles.css">
</head>
    <body>

    <?php
// print current date
echo date ('d-m/y H:i:s');
echo ('<br>');

// print yesterday
echo date ('d-m/y H:i:s' ); echo ('<br>');
echo date ('d-m/y H:i:s', time() - 60 * 68 *24 );echo ('<br>');

// Different format: https://www.php.net/manual/en/datetime.format.php
echo date('D, dS M-Y H:i:s'); echo ('<br>');


// Print current timestamp
echo time(); echo ('<br>');


//parse date

$parse = date_parse('27th-12-2021 09:30:58');
echo '<pre>'; 
print_r ($parse);
echo'</pre>';

// parse date fro format

$date_string = 'January 5 2021 12:46:02';

$parsedate = date_parse_from_format('F j Y H:i:s', $date_string);
echo '<pre>'; 
print_r ($parsedate);
echo'</pre>';



    ?>
<br>
<br>
<a href='08functions.php'><button class="btn0">BACK</button></a>
<a href='/10website/web_dev.php'><button class="btn1">NEXT</button></a>

</body>
</html>