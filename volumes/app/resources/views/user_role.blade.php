<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User Roles</title>
</head>
<body>
    <h1>User Roles</h1>

    <ul>
        @foreach ($roles as $role)
            <li>{{ $role->libelle }}</li>
        @endforeach
    </ul>
</body>
</html>
