<?php

namespace App\Http\Controllers;

use App\Models\Article; 

class HomeController extends Controller
{
    /**
     * Display the homepage with the latest articles.
     *
     * @return \Illuminate\View\View The homepage view with articles.
     */
    public function index()
    {
        // Fetch the latest 5 articles from the database
        $articles = Article::latest()->take(5)->get();

        // Return the homepage view with the fetched articles
        return view('home', compact('articles'));
    }
}
