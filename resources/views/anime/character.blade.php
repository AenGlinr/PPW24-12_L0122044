<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Characters - {{ $anime->title }}</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
</head>

<body class="bg-gradient-to-br from-blue-200 to-green-200 font-sans text-gray-900">
    <div class="container mx-auto py-8">
        <h1 class="text-3xl font-bold mb-8 text-center text-indigo-800">Characters - {{ $anime->title }}</h1>

        <div class="mb-8 flex justify-center">
            <a href="{{ route('home') }}"
                class="bg-indigo-600 hover:bg-indigo-700 text-white font-bold py-2 px-4 rounded-lg mr-4 focus:outline-none focus:ring-2 focus:ring-indigo-300">
                Home
            </a>
            <a href="{{ route('anime.create') }}"
                class="bg-indigo-600 hover:bg-indigo-700 text-white font-bold py-2 px-4 rounded-lg focus:outline-none focus:ring-2 focus:ring-indigo-300">
                Add New Anime
            </a>
        </div>

        <div class="overflow-x-auto">
            <table class="w-full bg-white shadow-md rounded-lg border-collapse">
                <thead>
                    <tr class="bg-indigo-600 text-white">
                        <th class="py-3 px-6 text-left">ID</th>
                        <th class="py-3 px-6 text-left">Name</th>
                        <th class="py-3 px-6 text-left">Role</th>
                        <th class="py-3 px-6 text-left">Voice Actor</th>
                    </tr>
                </thead>
                <tbody class="text-gray-700">
                    @foreach ($anime->characters as $character)
                        <tr class="border-b border-gray-200">
                            <td class="py-3 px-6 text-left">{{ $character->id }}</td>
                            <td class="py-3 px-6 text-left">{{ $character->name }}</td>
                            <td class="py-3 px-6 text-left">{{ $character->role }}</td>
                            <td class="py-3 px-6 text-left">{{ $character->voice_actor }}</td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</body>

</html>
