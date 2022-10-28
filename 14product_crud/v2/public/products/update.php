<?php 



/* database connection string */
  /** @var $pdo \PDO  */
  require_once '../../views/partials/database.php';

/* Code for generating a random name to the folder where image is saved */
require_once '../../fxns.php';


$id = $_GET['id'] ?? null;
if (!$id) {
    header('Location: crud.php');
    exit;
}
 
$statement = $pdo->prepare('SELECT * FROM products WHERE id = :id');
$statement->bindValue(':id', $id);
$statement->execute();
$product = $statement->fetch(PDO::FETCH_ASSOC);


/* echo '<pre>';
var_dump($product);
echo '</pre>';
exit;
 */


$errors = [];  

$title = $product['title'];
$description = $product['description']; 
$price = $product['price'];


/* echo $_SERVER ['REQUEST_METHOD']. '<br>'; */
if ($_SERVER['REQUEST_METHOD'] === 'POST') {


   
  require_once '../../validate_product.php'; 



    if (empty($errors)) {

       

-

        /* insert in the dtb */
        $statement = $pdo->prepare("UPDATE products SET title = :title,
                                                         image = :image, 
                                                        description = :description,
                                                        price = :price WHERE id = :id");
       
        $statement->bindValue(':title', $title);
        $statement->bindValue(':image', $imagePath);
        $statement->bindValue(':description', $description);
        $statement->bindValue(':price', $price);
        $statement->bindValue(':id', $id);
        $statement->execute();

        header('location: crud.php'); #redirect after submitting
    }   
}

?>



<?php include_once '../../views/partials/header.php';  ?>

 
  
<p> 
    <a href="crud.php" class="btn btn-secondary"> BACK HOME</a>  
</p>


<h1> Update Product <b><?php echo $product['title']?> </b></h1>

<?php include_once '../../views/products/form.php';  ?>
    

  </body>
</html>

