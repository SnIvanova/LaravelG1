<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Crea nuova attività</title>
</head>
<body>
    <h1>Crea nuova attività</h1>
    <form action="{{ route('tasks.store') }}" method="post">
        @csrf
        <label for="name">Nome dell'attività:</label><br>
        <input type="text" id="name" name="name"><br><br>
        <button type="submit">Salva</button>
    </form>
</body>
</html>
