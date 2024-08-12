<?php
include 'db.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $title = $_POST['title'];
    $description = $_POST['description'];

    $sql = "INSERT INTO tasks (title, description) VALUES (:title, :description)";
    $statement = $pdo->prepare($sql);
    $statement->execute(['title' => $title, 'description' => $description]);

    header("Location: index.php");
}

?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="css/styles.css">
    <title>Crear Nueva Tarea</title>
</head>
<body>
    <h1>Crear Nueva Tarea</h1>
    <form method="post">
        <label for="title">Título</label>
        <input type="text" id="title" name="title" required><br>

        <label for="description">Descripción</label>
        <textarea id="description" name="description" required></textarea><br>

        <button type="submit">Guardar</button>
    </form>
    <a href="index.php">Volver a la lista de tareas</a>
</body>
</html>
