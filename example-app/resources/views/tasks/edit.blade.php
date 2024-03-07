<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Modifica attività</title>
</head>
<body>
    <h1>Modifica attività</h1>
    <form action="{{ route('tasks.update', $task) }}" method="post">
        @csrf
        @method('PUT')
        <label for="name">Nome dell'attività:</label><br>
        <input type="text" id="name" name="name" value="{{ $task->name }}"><br><br>
        <button type="submit">Salva modifiche</button>
    </form>
</body>
</html>
