<?php

namespace App;

class Task
{
    protected $id;
    protected $title;
    protected $completed;

    public function __construct($title, $completed = false)
    {
        $this->title = $title;
        $this->completed = $completed;
    }

    public function getTitle()
    {
        return $this->title;
    }

    public function isCompleted()
    {
        return $this->completed;
    }

    public function markAsCompleted()
    {
        $this->completed = true;
        // Aquí puedes añadir la lógica para actualizar la base de datos si es necesario
    }
}

namespace App;

class Task
{
    public $title;
    public $due_date;
    public $status;

    public function __construct($title, $due_date, $status)
    {
        $this->title = $title;
        $this->due_date = $due_date;
        $this->status = $status;
    }
}
