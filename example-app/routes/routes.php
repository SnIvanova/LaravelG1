<?php 
use Illuminate\Support\Facades\Route;
use App\Models\Task;
use Illuminate\Http\Request;

Route::middleware('web')->group(function () {
Route::get('/tasks', function () {
    $tasks = App\Models\Task::all();
    return view('tasks.index', compact('tasks'));
})->name('tasks.index');

// Create route
Route::get('/tasks/create', function () {
    return view('tasks.create');
})->name('tasks.create');

Route::post('/tasks', function (Request $request) {
    Task::create($request->all());
    return redirect()->route('tasks.index');
})->name('tasks.store');

// Show route
Route::get('/tasks/{task}', function (Task $task) {
    return view('tasks.show', compact('task'));
})->name('tasks.show');

// Edit route
Route::get('/tasks/{task}/edit', function (Task $task) {
    return view('tasks.edit', compact('task'));
})->name('tasks.edit');

Route::put('/tasks/{task}', function (Request $request, Task $task) {
    $task->update($request->all());
    return redirect()->route('tasks.index');
})->name('tasks.update');

// Delete route
Route::delete('/tasks/{task}', function (Task $task) {
    $task->delete();
    return redirect()->route('tasks.index');
})->name('tasks.destroy');
});