<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Elenco delle attività</title>
</head>
<body>
    <h1>Elenco delle attività</h1>
    <ul>
        @foreach ($tasks as $task)
            <li>{{ $task->name }}</li>
        @endforeach
    </ul>
    <a href="{{ route('tasks.create') }}">Aggiungi nuova attività</a>
</body>
</html>
