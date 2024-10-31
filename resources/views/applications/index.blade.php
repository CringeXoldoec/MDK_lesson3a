<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<h1>Список заявок</h1>

<a href="{{ route('applications.create') }}" class="btn btn-primary">Добавить заявку</a>

<table class="table">
    <thead>
        <tr>
            <th>ID</th>
            <th>Тема</th>
            <th>Email</th>
            <th>Дата создания</th>
            <th>Действия</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($applications as $application)
            <tr>
                <td>{{ $application->id }}</td>
                <td>{{ $application->theme }}</td>
                <td>{{ $application->email ?? '-' }}</td>
                <td>{{ $application->created_at }}</td>
                <td>
                    <a href="{{ route('applications.show', $application) }}" class="btn btn-info">Просмотреть</a>
                </td>
            </tr>
        @endforeach
    </tbody>
</table>

</body>
</html>