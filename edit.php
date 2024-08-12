	<?php
include 'db.php';

$id = $_GET['id'];
$sql = "SELECT * FROM tasks WHERE id = :id";
$statement = $pdo->prepare($sql);
$statement->execute(['id' => $id]);
$task = $statement->fetch(PDO::FETCH_ASSOC);

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $title = $_POST['title'];
    $description = $_POST['description'];

    $sql = "UPDATE tasks SET title = :title, description = :description WHERE id = :id";
    $statement = $pdo->prepare($sql);
    $statement->execute(['title' => $title, 'description' => $description, 'id' => $id]);

    header("Location: index.php");
}
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="css/styles.css">
    <title>Editar Tarea</title>
</head>
<body>
    <h1>Editar Tarea</h1>
    <form method="post">
        <label for="title">Título</label>
        <input type="text" id="title" name="title" value="<?= htmlspecialchars($task['title']) ?>" required><br>

        <label for="description">Descripción</label>
        <textarea id="description" name="description" required><?= htmlspecialchars($task['description']) ?></textarea><br>

        <button type="submit">Guardar</button>
    </form>
    <a href="index.php">Volver a la lista de tareas</a>
</body>
</html>
