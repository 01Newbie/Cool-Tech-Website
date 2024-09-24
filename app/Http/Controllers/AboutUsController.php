<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AboutUsController extends Controller
{
     // Method to handle the request to the 'about' page
    public function about()
    {
         // Return the 'about' view to be rendered
        return view('about'); 
    }
}
