<?php
include 'db.php';

$sql = 'SELECT * FROM tasks';
$statement = $pdo->query($sql);
$tasks = $statement->fetchAll(PDO::FETCH_ASSOC);
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="css/styles.css">
    <title>Gestión de Tareas</title>
</head>
<body>
    <h1>Lista de Tareas</h1>
    <a href="create.php">Crear Nueva Tarea</a>
    <ul>
        <?php foreach ($tasks as $task): ?>
            <li>
                <strong><?= htmlspecialchars($task['title']) ?></strong><br>
                <?= htmlspecialchars($task['description']) ?><br>
                <a href="edit.php?id=<?= $task['id'] ?>">Editar</a> |
                <a href="delete.php?id=<?= $task['id'] ?>" onclick="return confirm('¿Estás seguro?')">Eliminar</a>
            </li>
        <?php endforeach; ?>
    </ul>
</body>
</html>
