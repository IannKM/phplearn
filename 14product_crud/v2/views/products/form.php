
        <?php if (!empty($errors)): ?>
                <div  class="alert alert-danger"> 
                    <?php foreach ($errors as $errors): ?> 

                <div> <?php echo $errors ?> </div> 
                <?php endforeach; ?>

                </div>
        <?php endif; ?>


    <form action="" method="POST" enctype="multipart/form-data">
  
    <?php if ($product['image']):  ?>
        <img src="/<?php echo $product['image'] ?> " class="update-image" >
        <?php endif; ?>

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
