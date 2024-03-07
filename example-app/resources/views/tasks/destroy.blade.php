<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Destroy Task</title>
</head>
<body>
    <h1>Delete Task</h1>
    <p>Are you sure you want to delete this task?</p>
    <form action="{{ route('tasks.destroy', $task) }}" method="POST">
        @csrf
        @method('DELETE')
        <button type="submit">Confirm Delete</button>
    </form>
</body>
</html>
