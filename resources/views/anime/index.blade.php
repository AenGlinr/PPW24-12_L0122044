<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Anime List</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
</head>

<body class="bg-gradient-to-br from-blue-200 to-green-200 font-sans text-gray-900">
    <div class="container mx-auto py-8">
        <h1 class="text-3xl font-bold mb-8 text-center text-indigo-800">Anime List</h1>

        <div class="mb-4 text-center">
            <a href="{{ route('home') }}"
                class="inline-block bg-indigo-600 hover:bg-indigo-700 text-white font-bold py-2 px-4 rounded-lg mr-2 focus:outline-none focus:ring-2 focus:ring-indigo-300">
                Home
            </a>
            <a href="{{ route('anime.create') }}"
                class="inline-block bg-indigo-600 hover:bg-indigo-700 text-white font-bold py-2 px-4 rounded-lg focus:outline-none focus:ring-2 focus:ring-indigo-300">
                Add New Anime
            </a>
        </div>

        <div class="overflow-x-auto">
            <table class="table-auto border-collapse w-full">
                <thead>
                    <tr class="bg-blue-500 text-white">
                        <th class="py-2 px-4">ID</th>
                        <th class="py-2 px-4">Title</th>
                        <th class="py-2 px-4">Description</th>
                        <th class="py-2 px-4">Genre</th>
                        <th class="py-2 px-4">Release Date</th>
                        <th class="py-2 px-4">Rating</th>
                        <th class="py-2 px-4">Characters</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($animes as $anime)
                        <tr class="border-b border-gray-200">
                            <td class="py-2 px-4">{{ $anime->id }}</td>
                            <td class="py-2 px-4">{{ $anime->title }}</td>
                            <td class="py-2 px-4">{{ $anime->description }}</td>
                            <td class="py-2 px-4">{{ $anime->genre }}</td>
                            <td class="py-2 px-4">{{ $anime->release_date }}</td>
                            <td class="py-2 px-4">{{ $anime->rating }}</td>
                            <td class="py-2 px-4"><a href="{{ route('anime.characters', $anime) }}"
                                    class="text-indigo-600 hover:underline">View Characters</a></td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</body>

</html>
