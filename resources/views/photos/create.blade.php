<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Upload Photo</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
</head>

<body class="bg-gradient-to-br from-blue-200 to-green-200 font-sans text-gray-900">
    <div class="container mx-auto py-8">
        <h2 class="text-3xl font-bold mb-8 text-center text-indigo-800">Upload Photo</h2>

        @if ($errors->any())
            <div class="bg-red-100 border border-red-400 text-red-700 px-4 py-3 rounded relative mb-8" role="alert">
                <strong class="font-bold">Error:</strong>
                <ul class="list-disc mt-2 ml-4">
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif

        <form action="{{ route('photos.store') }}" method="POST" enctype="multipart/form-data"
            class="bg-gray-50 rounded-lg px-8 pt-6 pb-8 mb-8 max-w-md mx-auto shadow-md">
            @csrf
            <div class="mb-6">
                <label for="title" class="block text-gray-700 text-sm font-bold mb-2">Photo Title:</label>
                <input type="text" id="title" name="title"
                    class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"
                    placeholder="Enter photo title" value="{{ old('title') }}" required>
            </div>
            <div class="mb-6">
                <label for="image" class="block text-gray-700 text-sm font-bold mb-2">Choose Photo:</label>
                <input type="file" id="image" name="image"
                    class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"
                    required>
            </div>
            <div class="flex items-center justify-center">
                <button type="submit"
                    class="bg-indigo-600 hover:bg-indigo-700 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline">
                    Upload Photo
                </button>
            </div>
        </form>
    </div>
</body>

</html>
