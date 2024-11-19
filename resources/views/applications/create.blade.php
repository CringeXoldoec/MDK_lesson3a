<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<h1>Добавление новой заявки</h1>

<form method="POST" action="{{ route('applications.store') }}">
    @auth
        <p>Текущий пользователь: {{ auth()->id() }}</p>
    @endauth
    @csrf
    <div class="form-group">
        <label for="id">Id пользователя:</label>
        <input type="text" value="{{ auth()->id() }}" id="id" name="id" required class="form-control" readonly>
    </div>
    <div class="form-group">
        <label for="theme">Тема заявки:</label>
        <input type="text" id="theme" name="theme" required class="form-control">
    </div>
    <div class="form-group">
        <label for="email">Email для связи:</label>
        <input type="email" id="email" name="email" class="form-control">
    </div>
    <button type="submit" class="btn btn-primary">Отправить заявку</button>
</form>

</body>
</html>