<?php 

$pdo = new PDO('mysql:host=localhost;port=3306;dbname=products_crud', 'root', '');

$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION); # to throw an error message during connection if it fails
    /* to make a query in th dtb to select all the prdt*/
$statement = $pdo->prepare('SELECT * FROM products ORDER BY create_date DESC');
$statement ->execute();
$products = $statement-> fetchAll(PDO::FETCH_ASSOC);

?>



<!doctype html>
<html lang="en" dir="auto">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.rtl.min.css" integrity="sha384-7mQhpDl5nRA5nY9lr8F1st2NbIly/8WqhjTp+0oFxEA/QUuvlbF6M1KXezGBh3Nb" crossorigin="anonymous">
    <link rel="stylesheet" href="styles.css">


    <title> PRODUCTS CRUD </title>
  </head>
  <body>
    <h1> PRODUCTS CRUD </h1>

    <table class="table">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">Image</th>
      <th scope="col">Title</th>
      <th scope="col">Price</th>
      <th scope="col">Creation Date/th>
      <th scope="col">Action</th>
    </tr>
  </thead>
  <tbody>
    <?php foreach ($products as $i => $product) : ?>
    
    <tr>
      <th scope="row"><?php echo $i + 1 ?></th>
      <td></td>
      <td><?php echo $product['title'] ?></td>
      <td><?php echo $product['price'] ?></td>
      <td><?php echo $product['create_date'] ?></td>
      <td>
      <button type="button" class="btn btn-outline-warning">Edit</button>
      <button type="button" class="btn btn-outline-danger">Delete</button>


      </td>

    </tr>

            
        
        
       <?php endforeach?>
    
    
    ?>
    
  </tbody>
</table>




<br>
<br>
<a href='../13curl/curl.php '><button class="btn0">BACK</button></a>
<a href="..#"><button class="btn1">NEXT</button></a>
  </body>
</html>

