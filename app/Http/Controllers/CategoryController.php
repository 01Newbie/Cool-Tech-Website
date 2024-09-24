<?php

namespace App\Http\Controllers;

use App\Models\Category; 
use Illuminate\Http\Request; 

class CategoryController extends Controller
{
    /**
     * Display the articles in the specified category.
     *
     * @param string $slug The slug of the category to display
     * @return \Illuminate\View\View The view for the category with its articles
     */
    public function show($slug)
    {
        // Retrieve the category using the provided slug
        $category = Category::where('slug', $slug)->firstOrFail();
        
        // Fetch all articles associated with the retrieved category
        $articles = $category->articles; 

        // Return the category view, passing the category and its articles
        return view('category.show', compact('category', 'articles'));
    }
}
