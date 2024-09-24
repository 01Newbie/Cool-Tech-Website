<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Writer Login</title>
</head>
<body>
    <div class="container">

     <!-- Main heading for the Writer Login page -->
        <h1>Writer Login</h1>

          <!-- Display any error messages from the session -->
        @if(session('error'))
            <div class="alert alert-danger">{{ session('error') }}</div>
        @endif

         <!-- Form to log in the writer -->
        <form action="{{ route('writer.login') }}" method="POST">
            @csrf
            <div class="form-group">
                <label for="password">Password:</label>
                <input type="password" name="password" id="password" class="form-control" required>
            </div>

             <!-- Submit button for the login form -->
            <button type="submit" class="btn btn-primary">Login</button>
        </form>
    </div>
</body>
</html>
