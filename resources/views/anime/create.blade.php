<!DOCTYPE html>
<html>

<head>
    <title>Add New Anime</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f0f0f0;
            text-align: center;
        }

        .container {
            margin-top: 50px;
        }

        form {
            width: 50%;
            margin: 0 auto;
        }

        input,
        textarea {
            width: 100%;
            padding: 10px;
            margin: 10px 0;
            border: 1px solid #ddd;
            border-radius: 4px;
        }

        button {
            padding: 10px 20px;
            background-color: #3498db;
            color: #fff;
            border: none;
            border-radius: 4px;
            cursor: pointer;
        }

        button:hover {
            background-color: #2980b9;
        }
    </style>
</head>

<body>
    <div class="container">
        <h1>Add New Anime</h1>
        <form action="{{ route('anime.store') }}" method="POST">
            @csrf
            <input type="text" name="title" placeholder="Title" required>
            <textarea name="description" placeholder="Description" required></textarea>
            <input type="text" name="genre" placeholder="Genre" required>
            <input type="date" name="release_date" placeholder="Release Date" required>
            <input type="text" name="rating" placeholder="Rating" required>
            <button type="submit">Add Anime</button>
        </form>
    </div>
</body>

</html>
