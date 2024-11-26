<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Create Post</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-100 text-gray-800">
    <div class="container mx-auto py-8">
        <h1 class="text-3xl font-bold text-center mb-6">Create Post</h1>

        <div class="max-w-lg mx-auto bg-white p-6 rounded-lg shadow-md">
            <form action="{{ route('posts.store') }}" method="POST" class="space-y-4">
                @csrf
                <div>
                    <label for="title" class="block text-sm font-medium text-gray-700">Title</label>
                    <input 
                        type="text" 
                        name="title" 
                        id="title" 
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
                        required></textarea>
                </div>

                <button 
                    type="submit" 
                    class="w-full bg-blue-500 text-white py-2 rounded hover:bg-blue-600">
                    Create
                </button>
            </form>
        </div>
    </div>
</body>
</html>
