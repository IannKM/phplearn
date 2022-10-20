<?php 

$pdo = new PDO('mysql:host=localhost;port=3306;dbname=products_crud', 'root', '');
$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION); # to throw an error message during connection if it fails

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

/* $image = ''; */  #uncomment this also to prevent submitting form without image


/* echo $_SERVER ['REQUEST_METHOD']. '<br>'; */
if ($_SERVER['REQUEST_METHOD'] === 'POST') {



        $title = $_POST['title'];
        $description = $_POST['description'];
        $price = $_POST['price'];
        $date = date('Y-m-d H:i:s');

       
    if (!$title){
        $errors[] = 'Product Title is required.';
    }
    if (!$price){
        $errors[] = 'Product Price is required.';
    }

    /* if (!$image){    #uncomment to prevent submitting form without image
        $errors[] = 'Product Image is required.';
    } */

    if (!is_dir('images')){
        mkdir('images');
    }



    if (empty($errors)) {

        $image = $_FILES[ 'image'] ?? null; 
        $imagePath = '';
        if ($image && $image['tmp_name']){

            $imagePath = 'images/'.randomString(8).'/'.$image['name'];
            mkdir(dirname($imagePath));


            move_uploaded_file($image['tmp_name'], $imagePath);
        }

        /* insert in the dtb */
        $statement = $pdo->prepare("INSERT INTO products (title, image, description, price, create_date)
                        VALUES (:title, :image, :description, :price, :date)");
       
        $statement->bindValue(':title', $title);
        $statement->bindValue(':image', $imagePath);
        $statement->bindValue(':description', $description);
        $statement->bindValue(':price', $price);
        $statement->bindValue(':date', $date);
        $statement->execute();
        header('location: crud.php'); #redirect after submitting
    }   
}

/* used to Assigning a random name to the folder where image is saved */

function randomString($n)
{
    $characters = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
    $str = '';
    for ($i = 0; $i < $n; $i++) {
        $index = rand(0, strlen($characters) - 1);
        $str .= $characters[$index];
    }

    return $str;
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


        <?php if (!empty($errors)): ?>
                <div  class="alert alert-danger"> 
                    <?php foreach ($errors as $errors): ?> 

                <div> <?php echo $errors ?> </div> 
                <?php endforeach; ?>

                </div>
        <?php endif; ?>


    <form action="" method="POST" enctype="multipart/form-data">
  <div class="mb-3">
    <label >Product Image</label></br>
    <input type="file" name="image" >
  </div>

  <div class="mb-3">
    <label >Product Title</label>
    <input type="text" name="title" class="form-control" value="<?php echo $title ?>"  >
  </div>

  <div class="mb-3">
    <label >Product Description</label>
    <textarea  class="form-control" name="description" value= "<?php echo $description ?>" ></textarea>
  </div>

  <div class="mb-3">
    <label >Product Price</label>
    <input type="number" step=".01" name="price" class="form-control" value=" <?php echo $price ?> " >
  </div>

  <button type="submit" class="btn btn-primary">Submit</button>
</form>

    






  </body>
</html>

