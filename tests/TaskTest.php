<?php

use PHPUnit\Framework\TestCase;

class TaskTest extends TestCase
{
    public function testExample()
    {
        $this->assertTrue(true);
    }

    public function testTaskCreation()
    {
        $task = new Task("Título de prueba", "Descripción de prueba");
        $this->assertEquals("Título de prueba", $task->getTitle());
        $this->assertEquals("Descripción de prueba", $task->getDescription());
    }
}
