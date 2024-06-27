<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Photo Gallery</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
</head>

<body class="bg-gradient-to-br from-blue-200 to-green-200 font-sans text-gray-900">
    <div class="container mx-auto py-8">
        <h2 class="text-3xl font-bold mb-8 text-center text-indigo-800">Photo Gallery</h2>

        @if (session('status'))
            <div class="bg-green-100 border border-green-400 text-green-700 px-4 py-3 rounded relative mb-8"
                role="alert">
                <strong class="font-bold">Success:</strong>
                {{ session('status') }}
            </div>
        @endif

        <div class="flex justify-between mb-8">
            <a href="{{ route('photos.create') }}"
                class="bg-indigo-600 hover:bg-indigo-700 text-white font-bold py-3 px-6 rounded-lg focus:outline-none focus:ring-2 focus:ring-indigo-300">
                Add Photo
            </a>
            <a href="{{ route('home') }}"
                class="bg-blue-600 hover:bg-blue-700 text-white font-bold py-3 px-6 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-300">
                Home
            </a>
        </div>

        <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-6">
            @foreach ($photos as $photo)
                <div class="bg-black rounded-lg overflow-hidden shadow-md">
                    <img src="{{ Storage::url($photo->image_path) }}" alt="{{ $photo->title }}" class="w-full h-auto">
                    <div class="p-4">
                        <h3 class="text-lg font-semibold text-white">{{ $photo->title }}</h3>
                        <div class="flex justify-end mt-2">
                            <form action="{{ route('photos.destroy', ['id' => $photo->id]) }}" method="POST">
                                @csrf
                                @method('DELETE')
                                <button type="submit"
                                    class="bg-red-500 hover:bg-red-600 text-white px-4 py-2 rounded-md focus:outline-none focus:ring-2 focus:ring-red-300">
                                    Delete
                                </button>
                            </form>
                            <a href="{{ route('photos.edit', ['id' => $photo->id]) }}"
                                class="ml-2 bg-blue-500 hover:bg-blue-600 text-white px-4 py-2 rounded-md focus:outline-none focus:ring-2 focus:ring-blue-300">
                                Edit
                            </a>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
</body>

</html>
