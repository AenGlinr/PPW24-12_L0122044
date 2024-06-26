<!DOCTYPE html>
<html>

<head>
    <title>Anime List</title>
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
        <h1>Anime List</h1>
        <a href="{{ route('home') }}">Home</a> | <a href="{{ route('anime.create') }}">Add New Anime</a>
        <table>
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Title</th>
                    <th>Description</th>
                    <th>Genre</th>
                    <th>Release Date</th>
                    <th>Rating</th>
                    <th>Characters</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($animes as $anime)
                    <tr>
                        <td>{{ $anime->id }}</td>
                        <td>{{ $anime->title }}</td>
                        <td>{{ $anime->description }}</td>
                        <td>{{ $anime->genre }}</td>
                        <td>{{ $anime->release_date }}</td>
                        <td>{{ $anime->rating }}</td>
                        <td><a href="{{ route('anime.characters', $anime) }}">View Characters</a></td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</body>

</html>
