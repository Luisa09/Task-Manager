<?php 
// Suponiendo que tienes una clase Database con métodos para manejar la conexión
class TaskRepository
{
    protected $pdo;

    public function __construct($pdo)
    {
        $this->pdo = $pdo;
    }

    public function markTaskAsCompleted($id)
    {
        $stmt = $this->pdo->prepare("UPDATE tasks SET completed = TRUE WHERE id = ?");
        $stmt->execute([$id]);
    }
}
 ?>