<?php
use App\Models\Task;
//Pruebas de Validación


test('an exception is thrown if title is empty', function () {
    expect(fn() => new Task('', '2024-08-15', 'pending'))
        ->toThrow(InvalidArgumentException::class, 'Title is required');
});

test('an exception is thrown if due date is in the past', function () {
    expect(fn() => new Task('Task 1', '2020-01-01', 'pending'))
        ->toThrow(InvalidArgumentException::class, 'Due date cannot be in the past');
});
