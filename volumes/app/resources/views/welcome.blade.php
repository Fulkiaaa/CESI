<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hello World!</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            background-color: #f0f0f0;
            color: #333;
        }
        .container {
            max-width: 800px;
            margin: 50px auto;
            padding: 20px;
            background-color: #fff;
            border-radius: 5px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }
        h1, h3 {
            text-align: center;
        }
        p {
            text-align: center;
            font-size: 1.2em;
        }
        table {
            width: 80%;
            margin: 20px auto;
            border-collapse: collapse;
            background-color: #fff;
            box-shadow: 0 0 20px rgba(0, 0, 0, 0.1);
        }
        
        th, td {
            padding: 12px 15px;
            text-align: left;
            border-bottom: 1px solid #ddd;
        }
        
        th {
            background-color: #f2f2f2;
        }
        
        tbody tr:hover {
            background-color: #f9f9f9;
        }
        
        ul {
            margin: 0;
            padding: 0;
        }
        
        ul li {
            list-style-type: none;
        }
        
    </style>
</head>
<body>

<div class="container">
    <h1>Hello World!</h1>
    <h3>Liste des Utilisateurs avec leurs Rôles</h3>
</div>
   <table>
        <thead>
            <tr>
                <th>Prénom</th>
                <th>Nom</th>
                <th>Rôles</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($users as $user)
                <tr>
                    <td>{{ $user->prenom }} </td>
                    <td>{{ $user->nom }}</td>
                    <td>
                        <ul>
                            @foreach ($user->roles as $role)
                                <li>{{ $role->libelle }}</li>
                            @endforeach
                        </ul>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>

</body>
</html>
