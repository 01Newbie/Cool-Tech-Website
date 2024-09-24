<?php

namespace App\Http\Controllers;

use App\Models\Tag;
use Illuminate\Http\Request;

class TagController extends Controller
{
    /**
     * Display the articles associated with a specific tag.
     *
     * @param string $slug The slug of the tag to be displayed.
     * @return \Illuminate\View\View
     */
    public function show($slug)
    {
        // Retrieve the tag by its slug, or throw a 404 error if not found
        $tag = Tag::where('slug', $slug)->firstOrFail();
        
        // Get the articles associated with the tag
        $articles = $tag->articles; 

        // Return the view with the tag and its associated articles
        return view('tag.show', compact('tag', 'articles'));
    }
}
