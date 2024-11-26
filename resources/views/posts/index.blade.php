<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Posts</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-100 text-gray-800">
    <div class="container mx-auto py-8">
        <h1 class="text-3xl font-bold text-center mb-6">Posts</h1>

        <div class="flex justify-end mb-4">
            <a href="{{ route('posts.create') }}" class="bg-blue-500 text-white px-4 py-2 rounded hover:bg-blue-600">
                Create New Post
            </a>
        </div>

        @if ($message = Session::get('success'))
            <div class="bg-green-100 text-green-700 p-4 mb-4 rounded">
                {{ $message }}
            </div>
        @endif

        <div class="overflow-x-auto">
            <table class="w-full bg-white rounded-lg shadow-md overflow-hidden">
                <thead class="bg-gray-800 text-white">
                    <tr>
                        <th class="px-4 py-2 text-left">Title</th>
                        <th class="px-4 py-2 text-left">Content</th>
                        <th class="px-4 py-2 text-center">Actions</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($posts as $post)
                        <tr class="border-b hover:bg-gray-50">
                            <td class="px-4 py-2">{{ $post->Title }}</td>
                            <td class="px-4 py-2">{{ $post->Content }}</td>
                            <td class="px-4 py-2 text-center space-x-2">
                                <a href="{{ route('posts.edit', $post->id) }}" class="text-blue-500 hover:underline">
                                    Edit
                                </a>
                                <form action="{{ route('posts.destroy', $post->id) }}" method="POST" class="inline">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="text-red-500 hover:underline">
                                        Delete
                                    </button>
                                </form>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</body>
</html>
