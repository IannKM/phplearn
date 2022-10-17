<link rel="stylesheet" href="styles.css">
<?php 

$url = 'https://jsonplaceholder.typicode.com/users';


// Sample example to get data

/* 
$resource = curl_init($url);

curl_setopt($resource, CURLOPT_RETURNTRANSFER, true);
$result = curl_exec($resource);
#  echo $result. '<br><br>';

// Get response status code
$code = curl_getinfo($resource, CURLINFO_HTTP_CODE);
echo '<pre>';
print_r($code );
echo '</pre>';
curl_close($resource);

 */

// Set_opt_array



// Post request


$resource= curl_init();
$user = [
    'name' => 'james bond',
    'uname' => '007',
    'email' => 'bond007@test.com'
];
curl_setopt_array($resource, [
    CURLOPT_URL => $url,
    CURLOPT_RETURNTRANSFER => true,
    CURLOPT_POST => true,
    CURLOPT_HTTPHEADER => ['content-type: application/json'],   CURLOPT_POSTFIELDS => json_encode($user)
]);
$result= curl_exec($resource);
curl_close($resource);
echo $result;



















?>
<br>
<br>
<a href='../12OOP/one.php '><button class="btn0">BACK</button></a>
<a href="../13curl/curl.php"><button class="btn1">NEXT</button></a>