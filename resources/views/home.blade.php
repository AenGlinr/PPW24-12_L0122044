<!DOCTYPE html>
<html>

<head>
    <title>Home - Anime Website</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
</head>

<body class="bg-gradient-to-br from-blue-200 to-green-200 font-sans text-gray-900">
    <div class="flex justify-center items-center min-h-screen">
        <div class="container mx-auto">
            <h1 class="text-3xl font-bold mb-8 text-center text-indigo-800">Welcome to Anime World</h1>
            <div class="flex justify-center">
                <a href="{{ route('anime.index') }}"
                    class="btn bg-blue-500 hover:bg-blue-700 text-white py-2 px-6 rounded-lg mr-4">View Anime
                    List</a>
                <a href="{{ route('anime.create') }}"
                    class="btn bg-blue-500 hover:bg-blue-700 text-white py-2 px-6 rounded-lg mr-4">Add New
                    Anime</a>
                <a href="{{ route('photos.index') }}"
                    class="btn bg-blue-500 hover:bg-blue-700 text-white py-2 px-6 rounded-lg mr-4">Photos</a>
                <form action="{{ route('logout') }}" method="POST" style="display: inline;">
                    @csrf
                    <button type="submit"
                        class="btn bg-red-500 hover:bg-red-700 text-white py-2 px-6 rounded-lg">Logout</button>
                </form>
            </div>
        </div>
    </div>
</body>

</html>
