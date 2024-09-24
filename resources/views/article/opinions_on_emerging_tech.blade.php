{{-- resources/views/articles/opinions_on_emerging_tech.blade.php --}}
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Opinions on Emerging Tech</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
</head>
<body class="bg-gray-100">
    <div class="container mx-auto p-6">
        <h1 class="text-4xl font-bold mb-6 text-center">Opinions on Emerging Tech</h1>
        <p class="text-sm text-gray-500 text-center mb-4">Created on: September 22, 2024</p>
        <p class="text-gray-700 mb-4">Thoughts on the future of technology and its impact...</p>
        @include('articles.opinions_on_emerging_tech')
        @include('partials.back_link')
    </div>
</body>
</html>
