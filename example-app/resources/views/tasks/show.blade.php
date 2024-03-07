<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ $task->name }}</title>
</head>
<body>
    <h1>{{ $task->name }}</h1>
    <p>ID: {{ $task->id }}</p>
    <a href="{{ route('tasks.edit', $task) }}">Modifica</a>
    <form action="{{ route('tasks.destroy', $task) }}" method="post">
        @csrf
        @method('DELETE')
        <button type="submit">Elimina</button>
    </form>
</body>
</html>
