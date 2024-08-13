<?php

/*
<?php
//Pruebas de Creación de Tareas


test('a task can be created', function () {
    $task = new Task('Nueva tarea', '2024-08-12', 'pending');
    expect($task)->toBeInstanceOf(Task::class);
    expect($task->title)->toBe('Nueva tarea');
    expect($task->due_date)->toBe('2024-08-12');
    expect($task->status)->toBe('pending');
});


|
*/

// uses(Tests\TestCase::class)->in('Feature');

/*
//Pruebas de Validación


test('an exception is thrown if title is empty', function () {
    expect(fn() => new Task('', '2024-08-15', 'pending'))
        ->toThrow(InvalidArgumentException::class, 'Title is required');
});

test('an exception is thrown if due date is in the past', function () {
    expect(fn() => new Task('Task 1', '2020-01-01', 'pending'))
        ->toThrow(InvalidArgumentException::class, 'Due date cannot be in the past');
});
*/

expect()->extend('toBeOne', function () {
    return $this->toBe(1);
});

/*
|--------------------------------------------------------------------------
| Functions
|--------------------------------------------------------------------------
|
| While Pest is very powerful out-of-the-box, you may have some testing code specific to your
| project that you don't want to repeat in every file. Here you can also expose helpers as
| global functions to help you to reduce the number of lines of code in your test files.
|
*/

function something()
{
    // ..
}
