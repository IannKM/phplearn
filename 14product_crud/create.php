<?php 

$pdo = new PDO('mysql:host=localhost;port=3306;dbname=products_crud', 'root', '');

$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION); # to throw an error message during connection if it fails

/* How to check the current rquest method: is it POST OR GET */
       /*  echo '<pre>'; 
        var_dump($_SERVER);
        echo '</pre>';
        exit; */


echo $_SERVER ['REQUEST_METHOD']. '<br>';
if ($_SERVER['REQUEST_METHOD'] === 'POST') {



        $title = $_POST['title'];
        $description = $_POST['description'];
        $price = $_POST['price'];
        $date = date('Y-m-d H:i:s');

        /* insert in the dtb */
        $statement = $pdo->prepare("INSERT INTO products (title, image, description, price, create_date)
                        VALUES (:title, :image, :description, :price, :date)");
       
        $statement->bindValue(':title', $title);
        $statement->bindValue(':image', '');
        $statement->bindValue(':description', $description);
        $statement->bindValue(':price', $price);
        $statement->bindValue(':date', $date);
        $statement->execute();
         
    }





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


    <title> Products Crud </title>
  </head>
  <body>
    <h1> Create new Product </h1>

    <form action="" method="POST">
  <div class="mb-3">
    <label >Product Image</label></br>
    <input type="file" name="image" >
  </div>

  <div class="mb-3">
    <label >Product Title</label>
    <input type="text" name="title" class="form-control"  >
  </div>

  <div class="mb-3">
    <label >Product Description</label>
    <textarea  class="form-control" name="description" ></textarea>
  </div>

  <div class="mb-3">
    <label >Product Price</label>
    <input type="number" step=".01" name="price" class="form-control"  >
  </div>

  <button type="submit" class="btn btn-primary">Submit</button>
</form>

    






  </body>
</html>

