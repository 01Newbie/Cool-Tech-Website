{{-- resources/views/articles/top_5_software.blade.php --}}
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Top 5 Software of 2024</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
</head>
<body class="bg-gray-100">
    <div class="container mx-auto p-6">
        <h1 class="text-4xl font-bold mb-6 text-center">Top 5 Software of 2024</h1>
        <p class="text-sm text-gray-500 text-center mb-4">Created on: September 22, 2024</p>
        <p class="text-gray-700 mb-4">A review of the top software...</p>
        
        @include('articles.future_of_tech') 
        @include('articles.latest_hardware_innovations') 

        <div class="text-center">
            <a href="/" class="text-blue-600 hover:underline">Back to Latest Articles</a>
        </div>
    </div>
</body>
</html>
