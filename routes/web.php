<?php

use App\Http\Requests\TaskRequest;
use App\Models\Task;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return redirect()->route('tasks.index');
});

Route::get('/tasks', function () {
    return view('index', ['tasks' => Task::latest()->paginate(10)]);
})->name('tasks.index');

Route::get('/tasks/create', function () {
    return view('create');
})->name('tasks.create');

Route::get('/tasks/{task}', function (Task $task) {
    return view('show', ['task' => $task]);
})->name('tasks.show');

Route::get('/tasks/{task}/edit', function (Task $task) {
    return view('edit', ['task' => $task]);
})->name('tasks.edit');

Route::put('/tasks/{task}', function (Task $task,TaskRequest $request) {
    $task->update($request->validated());
    return redirect()->route('tasks.show', ['task' => $task->id])->with('status', "Task Updated Successfully!");
})->name('tasks.update');

Route::delete('/tasks/{task}', function (Task $task) {
    $task->delete();
    return redirect()->route('tasks.index')->with('status', "Task Deleted Successfully!");
})->name('tasks.destroy');

Route::post('/tasks', function (TaskRequest $request) {
     $store = Task::create($request->validated());
   return redirect()->route('tasks.show',['task' => $store->id])->with('status', 'Task added successfully!');

})->name('tasks.store');
