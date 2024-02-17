<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Todo List App</title>
    <!-- Include Tailwind CSS via CDN -->
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
</head>

<body class="bg-gray-100 min-h-screen flex flex-col justify-center items-center">
    <!-- Todo List Container -->
    <div class="container mx-auto px-4 py-8">
        <!-- Todo List Header -->
        <h1 class="text-4xl font-bold text-gray-800 mb-8">Your Tasks List</h1>

        <!-- Add New Task Button -->
        <a href="{{ route('todos.create') }}" class="bg-blue-500 hover:bg-blue-600 text-white font-bold py-2 px-4 rounded shadow-md mb-8 inline-block">Add New Task</a>

        <!-- Todo List Table -->
        <table class="min-w-full divide-y divide-gray-200">
    <thead class="bg-gray-50">
        <tr>
            <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Name</th>
            <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Description</th>
            <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Created At</th>
            <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Actions</th>
        </tr>
    </thead>
    <tbody class="bg-white divide-y divide-gray-200">
        @foreach ($todos as $todo)
        <tr>
            <td class="px-6 py-4 whitespace-nowrap">{{ $todo->name }}</td>
            <td class="px-6 py-4 whitespace-nowrap">{{ $todo->description }}</td>
            <td class="px-6 py-4 whitespace-nowrap">{{ $todo->created_at->format('Y-m-d H:i:s') }}</td>
            <td class="px-6 py-4 whitespace-nowrap">
            <a href="{{ route('todos.edit', $todo->id) }}" class="text-indigo-600 hover:text-indigo-900 mr-2">Edit</a>

            <form action="{{ route('todos.destroy', $todo->id) }}" method="POST" class="inline">
                @csrf
                @method('DELETE')
                <button type="submit" class="text-red-600 hover:text-red-900">Delete</button>
            </form>

            </td>
        </tr>
        @endforeach
    </tbody>
</table>

    </div>
</body>

</html>
