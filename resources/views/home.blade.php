<!DOCTYPE html>
<html>

<head>
    <title>Home - Anime Website</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f0f0f0;
            text-align: center;
        }

        .container {
            margin-top: 50px;
        }

        .btn {
            display: inline-block;
            margin: 10px;
            padding: 10px 20px;
            background-color: #3498db;
            color: #fff;
            text-decoration: none;
            border-radius: 5px;
        }

        .btn:hover {
            background-color: #2980b9;
        }
    </style>
</head>

<body>
    <div class="container">
        <h1>Welcome to Anime World</h1>
        <a href="{{ route('anime.index') }}" class="btn">View Anime List</a>
        <a href="{{ route('anime.create') }}" class="btn">Add New Anime</a>

        <form action="{{ route('logout') }}" method="POST" style="display: inline;">
            @csrf
            <button type="submit" class="btn">Logout</button>
        </form>
    </div>
</body>

</html>
