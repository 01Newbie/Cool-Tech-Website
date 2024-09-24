<h1>Writer's Console</h1>

<form action="/writer-console" method="POST">
    @csrf
    <label for="title">Title:</label><br>
    <input type="text" id="title" name="title" required><br><br>

    <label for="content">Content:</label><br>
    <textarea id="content" name="content" rows="10" required></textarea><br><br>

    <label for="tags">Tags (comma-separated):</label><br>
    <input type="text" id="tags" name="tags"><br><br>

    <button type="submit">Submit Article</button>
</form>
