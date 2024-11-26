<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Post</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-100 text-gray-800">
    <div class="container mx-auto py-8">
        <h1 class="text-3xl font-bold text-center mb-6">Edit Post</h1>

        <div class="max-w-lg mx-auto bg-white p-6 rounded-lg shadow-md">
            <form action="{{ route('posts.update', $post->id) }}" method="POST" class="space-y-4">
                @csrf
                @method('PUT')

                <div>
                    <label for="title" class="block text-sm font-medium text-gray-700">Title</label>
                    <input 
                        type="text" 
                        name="title" 
                        id="title" 
                        value="{{ $post->Title }}" 
                        class="w-full mt-1 p-2 border border-gray-300 rounded focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-blue-500" 
                        required>
                </div>

                <div>
                    <label for="content" class="block text-sm font-medium text-gray-700">Content</label>
                    <textarea 
                        name="content" 
                        id="content" 
                        rows="5"
                        class="w-full mt-1 p-2 border border-gray-300 rounded focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-blue-500" 
                        required>{{ $post->Content }}</textarea>
                </div>

                <button 
                    type="submit" 
                    class="w-full bg-blue-500 text-white py-2 rounded hover:bg-blue-600">
                    Update
                </button>
            </form>
        </div>
    </div>
</body>
</html>
