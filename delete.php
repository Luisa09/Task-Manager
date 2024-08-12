<?php
include 'db.php';

$id = $_GET['id'];

$sql = "DELETE FROM tasks WHERE id = :id";
$statement = $pdo->prepare($sql);
$statement->execute(['id' => $id]);

header("Location: index.php");
?>
