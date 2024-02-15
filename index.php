<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User Input Form with Tailwind CSS</title>
    <link href="https://unpkg.com/tailwindcss@^2/dist/tailwind.min.css" rel="stylesheet">
</head>
<body class="bg-gray-200 font-sans">

    <h1 class="text-3xl font-bold text-center mb-8">User Information</h1>

    <form action="" method="post" class="mx-auto max-w-md border p-8 rounded-md shadow-md">
        <div class="mb-4">
            <label for="name" class="text-gray-700 block mb-2 font-bold">Name:</label>
            <input type="text" id="name" name="name" required class="w-full border rounded-md px-3 py-2 focus:ring-blue-500 focus:ring-2">
        </div>
        <div class="mb-4">
            <label for="email" class="text-gray-700 block mb-2 font-bold">Email:</label>
            <input type="email" id="email" name="email" required class="w-full border rounded-md px-3 py-2 focus:ring-blue-500 focus:ring-2">
        </div>
        <div class="mb-6">
            <label for="message" class="text-gray-700 block mb-2 font-bold">Message:</label>
            <textarea id="message" name="message" rows="5" required class="w-full border rounded-md px-3 py-2 focus:ring-blue-500 focus:ring-2"></textarea>
        </div>
        <button type="submit" class="inline-flex items-center px-4 py-2 bg-blue-500 hover:bg-blue-700 text-white font-bold rounded-md shadow-sm focus:ring-4 focus:ring-blue-500 focus:ring-opacity-50">Submit</button>
    </form>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        // Get user input
        $name = $_POST["name"];
        $email = $_POST["email"];
        $message = $_POST["message"];


        // Displaying user information
        echo "<p class='text-center text-green-500 font-bold mt-8'>Thank you for submitting your information, $name!</p>";
        echo "<p class='text-center mb-2'>Your email: $email</p>";
        echo "<p class='text-center'>Your message: $message</p>";
    }
    ?>

</body>
</html>
