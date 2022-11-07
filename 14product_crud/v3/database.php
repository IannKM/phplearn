<?php 


namespace app;

use PDO;


class Database
{
    public \PDO $pdo;
    public function __construct()
    {
                /* connection string */
       $this->pdo = new PDO('mysql:host=localhost;port=3306;dbname=products_crud', 'root', '');
        $this->pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        # to throw an error message during connection if it fails

       /*  return $pdo; */

    }
    public function getProducts($search = '')
    {

       
        if ($search) {
          $statement = $this->pdo->prepare('SELECT * FROM products WHERE title LIKE :title ORDER BY create_date DESC');
          $statement->bindValue(':title', "%$search%");
        }else{
          $statement = $statement = $this->pdo->prepare('SELECT * FROM products ORDER BY create_date DESC');
        }
      
      
      /* to make a query in th dtb to select all the prdt*/
      
      $statement->execute();
      $products = $statement->fetchAll(PDO::FETCH_ASSOC);
      

    }

}





























?>