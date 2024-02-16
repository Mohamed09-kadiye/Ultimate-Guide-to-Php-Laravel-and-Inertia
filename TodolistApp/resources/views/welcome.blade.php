<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://unpkg.com/tailwindcss@^2/dist/tailwind.min.css" rel="stylesheet">

    <title>Your To Do List</title>
</head>
<body class="min-h-screen bg-gray-100 flex flex-col justify-center items-center">
    <div class="container mx-auto px-4 py-16">
        <div class="grid grid-cols-1 md:grid-cols-2 gap-8">
            <div class="text-center md:text-left">
                <h1 class="text-4xl font-bold text-sky-500 mb-4">Organize Your Life with Our To Do List App !</h1>
                <p class="text-lg text-gray-700 mb-8">Stay on top of your tasks, deadlines, and goals with our easy-to-use app. It's the perfect tool for busy individuals and teams.</p>
                <a href="" class="inline-block bg-blue-400 hover:bg-sky-700 text-white font-bold py-2 px-4 rounded shadow-md">View Your Tasks</a>
                <a href="" class="inline-block bg-yellow-500 hover:bg-green-700 text-white font-bold py-2 px-4 rounded shadow-md ml-4">Add New Task</a>
            </div>
            <div class="md:block flex items-center justify-center">
            <img src="{{ asset('images/Gemini_Generated_Image.jpeg') }}" alt="To Do List Illustration" class=" rounded-3xl">
            </div>
        </div>
    </div>
</body>
</html>
