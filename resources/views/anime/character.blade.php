<!DOCTYPE html>
<html>

<head>
    <title>Characters - {{ $anime->title }}</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f0f0f0;
            text-align: center;
        }

        .container {
            margin-top: 50px;
        }

        table {
            width: 80%;
            margin: 0 auto;
            border-collapse: collapse;
        }

        th,
        td {
            padding: 10px;
            border: 1px solid #ddd;
        }

        th {
            background-color: #3498db;
            color: #fff;
        }

        a {
            color: #3498db;
            text-decoration: none;
        }

        a:hover {
            text-decoration: underline;
        }
    </style>
</head>

<body>
    <div class="container">
        <h1>Characters - {{ $anime->title }}</h1>
        <a href="{{ route('home') }}">Home</a> | <a href="{{ route('anime.create') }}">Add New Anime</a>
        <table>
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Name</th>
                    <th>Role</th>
                    <th>Voice Actor</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($anime->characters as $character)
                    <tr>
                        <td>{{ $character->id }}</td>
                        <td>{{ $character->name }}</td>
                        <td>{{ $character->role }}</td>
                        <td>{{ $character->voice_actor }}</td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</body>

</html>
