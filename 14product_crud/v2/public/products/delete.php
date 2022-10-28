<?php 

/* database connection string */
    /** @var $pdo \PDO  */
require_once '../../views/partials/database.php';

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