<link rel="stylesheet" href="styles.css">
<?php 
//magic constants - consta that change their value on the execution context
echo __DIR__ .'<br>'; #prints the folder
echo __FILE__ .'<br>';  #prints current file we printing from
echo __LINE__ .'<br>';  #prints the line __file__ is written in


echo "Our script is located in the:" , dirname(__FILE__) , "\n". '<br><br>';
//  Create directory must specify path

#mkdir('./test', 0777); 

        #TO SEE RESULTS
             #REFRESH BROWSER    

// Rename directory

#rename('./test', "./test2");


//  Delete directory


#rmdir('./test2');

//  Read files and folders inside directory

$files = scandir('../');

echo '<pre>';
print_r ($files);
echo '</pre>'.'<br>';
// File_get_contents, file_put-contents

# echo file_get_contents('abcd.txt');
file_put_contents('sample.txt', 'some content');


// File_GET_contents from URL

/* $userjson = file_get_contents('https://jsonplaceholder.typicode.com/posts');
#echo $userjson;
    /* convert the json data to array 
$user = json_decode($userjson, true); 
echo '<pre>';
print_r ($user);
echo '</pre>'.'<br>';  */


//fileatime - Gets the last access time of the given file.
$filename = './index.php';
if (file_exists($filename)) {
    echo "$filename was last accessed: " . date("F d Y H:i:s.", fileatime($filename));
}


/* for more use..  
    https://www.php.net/manual/en/book.filesystem.php */

?>
<br>
<br>
<a href='../10website/web_dev.php'><button class="btn0">BACK</button></a>
<a href="../12OOP/one.php"><button class="btn1">NEXT</button></a>
<br></br>