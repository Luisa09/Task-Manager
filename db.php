<?php
$host = 'localhost';
$dbname = 'task_manager';
$username = 'root'; // Ajusta según tu configuración
$password = ''; // Ajusta según tu configuración

try {
    $pdo = new PDO("mysql:host=$host;dbname=$dbname", $username, $password);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    die("Error al conectar con la base de datos: " . $e->getMessage());
}
?>
