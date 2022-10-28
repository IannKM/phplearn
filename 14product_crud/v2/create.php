<?php 

/* database connection string */#
 /** @var $pdo \PDO  */
$pdo = require_once 'views/partials/database.php';



/* Code for generating a random name to the folder where image is saved */
require_once 'fxns.php';

/* How to check the current rquest method: is it POST OR GET */
       /*  echo '<pre>'; 
        var_dump($_SERVER);
        echo '</pre>';
        exit; */
/*  How to check where the image is uploaded */
        /* echo '<pre>'; 
        var_dump($_FILES);
        echo '</pre>';
         exit; */

$errors = [];  

$title = '';
$price = '';
$description = '';
$product = [ 
  'image' => ''
];

/* $image = ''; */  #uncomment this also to prevent submitting form without image


/* echo $_SERVER ['REQUEST_METHOD']. '<br>'; */
if ($_SERVER['REQUEST_METHOD'] === 'POST') {


    if (empty($errors)) {

    require_once 'validate_product.php';
        /* insert in the dtb */
        $statement = $pdo->prepare("INSERT INTO products (title, image, description, price, create_date)
                        VALUES (:title, :image, :description, :price, :date)");
       
        $statement->bindValue(':title', $title);
        $statement->bindValue(':image', $imagePath);
        $statement->bindValue(':description', $description);
        $statement->bindValue(':price', $price);
        $statement->bindValue(':date',  date('Y-m-d H:i:s'));
        $statement->execute();
        
        header('location: crud.php'); #redirect after submitting
    }   
}



?>



<!-- header -->
<?php include_once 'views/partials/header.php';  ?>

<p> 
    <a href="crud.php" class="btn btn-secondary"> BACK HOME</a>  
</p>

   <h1> Create new Product </h1>

<!-- forms part -->   
<?php include_once 'views/products/form.php';  ?>






  </body>
</html>

