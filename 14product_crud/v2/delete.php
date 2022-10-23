<?php 
 /* connection string */
 $pdo = new PDO('mysql:host=localhost;port=3306;dbname=products_crud', 'root', '');
 $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION); # to throw an error message during connection if it fails



$id = $_POST['id'] ?? null;

if (!$id) {
    header('location: crud.php');
    exit;
}

$statement = $pdo->prepare('DELETE FROM products WHERE id = :id');
$statement->bindValue(':id', $id); 
$statement->execute();

header('location: crud.php'); 

?>