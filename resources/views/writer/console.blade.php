<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Writer Console</title>
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
</head>
<body>
    <div class="container">

         <!-- Main heading for the Writer Console -->
        <h1>Welcome to the Writer Console</h1>

          <!-- Form to submit an article -->
        <form action="/submit-article" method="POST">
            @csrf
            <div class="form-group">
                <label for="title">Title:</label>
                <input type="text" name="title" id="title" class="form-control" required>
            </div>
            <div class="form-group">
                <label for="content">Content:</label>
                <textarea name="content" id="content" class="form-control" rows="5" required></textarea>
            </div>
            <div class="form-group">
                <label for="tags">Tags (comma-separated):</label>
                <input type="text" name="tags" id="tags" class="form-control">
            </div>

            <!-- Submit button for the article form -->
            <button type="submit" class="btn btn-primary">Submit Article</button>
        </form>
        <form action="{{ route('writer.logout') }}" method="POST" style="margin-top: 20px;">
            @csrf

             <!-- Logout button -->
            <button type="submit" class="btn btn-danger">Logout</button>
        </form>
    </div>
</body>
</html>
