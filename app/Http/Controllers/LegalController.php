<?php

// app/Http/Controllers/LegalController.php

namespace App\Http\Controllers;

use Illuminate\Http\Request; 

class LegalController extends Controller
{
    /**
     * Display the legal information page.
     *
     * @return \Illuminate\View\View The view for the legal information.
     */
    public function index()
    {
        // Return the view for the legal information page
        return view('legal.index');
    }
}
