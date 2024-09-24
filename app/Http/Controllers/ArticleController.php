<?php

namespace App\Http\Controllers;

use App\Models\Article;
use Illuminate\Http\Request;

class ArticleController extends Controller
{
    // Method to show the article creation form
    public function create()
    {
        // Return the view for the writer's console where the user can create an article
        return view('writer-console');
    }

    // Method to store a newly created article
    public function store(Request $request)
    {
        // Validate input data from the request
        $validatedData = $request->validate([
            'title' => 'required|string|max:255',
            'content' => 'required|string',
            'tags' => 'nullable|string'
        ]);

        // Create a new Article instance to save to the database
        $article = new Article;
        $article->title = $validatedData['title'];
        $article->content = $validatedData['content'];
        $article->tags = $validatedData['tags'];
        $article->save();

        // Redirect to the home page or a confirmation page with a success message
        return redirect('/')->with('success', 'Article submitted successfully!');
    }

    // Method to show a specific article by ID
    public function show($id)
    {
        // Retrieve the article by ID
        $article = Article::findOrFail($id);

        // Return the view to display the article, passing the article data
        return view('article.show', compact('article'));
    }
}
