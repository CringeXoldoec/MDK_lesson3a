<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<h1>Просмотр заявки</h1>

<p><strong>ID:</strong> {{ $application->id }}</p>
<p><strong>Тема:</strong> {{ $application->theme }}</p>
<p><strong>Email:</strong> {{ $application->email ?? '-' }}</p>
<p><strong>Дата создания:</strong> {{ $application->created_at }}</p>
</body>
</html>