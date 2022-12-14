<?php


/* database connection string */
 /** @var $pdo \PDO  */
$pdo = require_once '../../views/partials/database.php';



$search = $_GET['search'] ?? '';
  if ($search) {
    $statement = $pdo->prepare('SELECT * FROM products WHERE title LIKE :title ORDER BY create_date DESC');
    $statement->bindValue(':title', "%$search%");
  }else{
    $statement = $statement = $pdo->prepare('SELECT * FROM products ORDER BY create_date DESC');
  }


/* to make a query in th dtb to select all the prdt*/

$statement->execute();
$products = $statement->fetchAll(PDO::FETCH_ASSOC);


?>


<?php include_once '../../views/partials/header.php';  ?>


  <h1> PRODUCTS CRUD </h1>

  <!-- creating form for entry -->

  <p>
    <a href="create.php" class="btn btn-success">Create Product</a>
  </p>

<form>

  <div class="input-group mb-3">
    <input type="text" class="form-control" 
    placeholder="Search for Products" name = " search" 
    value="<?php echo $search   ?>">
    <button class="btn btn-outline-secondary" type="Submit">Search</button>
  </div> 
</form>


  <table class="table">
    <thead>
      <tr>
        <th scope="col">#</th>
        <th scope="col">Image</th>
        <th scope="col">Title</th>
        <th scope="col">Price</th>
        <th scope="col">Creation Date</th>
        <th scope="col">Actions</th>
      </tr>
    </thead>
    <tbody>
      <?php foreach ($products as $i => $product) : ?>

        <tr>
          <th scope="row"><?php echo $i + 1 ?> </th>
          <td>
            <img src="/<?php echo $product['image'] ?>" class="thumb-image ">
          </td>
          <td><?php echo $product['title'] ?></td>
          <td><?php echo $product['price'] ?></td>
          <td><?php echo $product['create_date'] ?></td>
          <td>

            <a href="update.php? id=<?php echo $product['id'] ?> " class="btn btn-sm btn-outline-warning">Edit</a>

            <form style="display: inline-block;" method="POST" action="delete.php">
              <input type="hidden" name="id" value="<?php echo $product["id"] ?> ">
              <button type="submit" class="btn btn-sm btn-outline-danger">Delete</button>
            </form>
          </td>
        </tr>

      <?php endforeach; ?>

    </tbody>
  </table>




  <br>
  <br>
  <a href='../../13curl/curl.php '><button class="btn0">BACK</button></a>
  <a href="..#"><button class="btn1">NEXT</button></a>
</body>

</html>