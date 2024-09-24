<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request; 
use Illuminate\Support\Str; 
use App\Models\Article;
use App\Models\Category;
use App\Models\Tag;

class SearchController extends Controller
{
    public function index(Request $request)
    {
        // Retrieve input values from the search request
        $articleId = $request->input('article_id');
        $categoryName = $request->input('category');
        $tagName = $request->input('tag');
    
        // Count how many fields are filled
        $filledCount = count(array_filter([$articleId, $categoryName, $tagName]));
    
        // Only one field should be filled
        if ($filledCount !== 1) {
            return view('search.index')->with('error', 'Please enter exactly one search term (Article ID, Category, or Tag).');
        }
    
        // Redirect to the article page if an article ID is provided
        if ($articleId) {
            return redirect()->route('article.show', ['id' => $articleId]);
        }
    
        // Redirect to the category page if a category name is provided
        if ($categoryName) {
            return redirect()->route('category.show', ['slug' => Str::slug($categoryName)]);
        }
    
        // Redirect to the tag page if a tag name is provided
        if ($tagName) {
            return redirect()->route('tag.show', ['slug' => Str::slug($tagName)]);
        }
    
        // If no valid input is found, show the search page with an error message
        return view('search.index')->with('error', 'Please enter a valid search term.');
    }
    
}
