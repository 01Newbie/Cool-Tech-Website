<?php

namespace App\Http\Controllers; 

use Illuminate\Http\Request; 

class DashboardController extends Controller 
{
    // Method to display the dashboard index
    public function index()
    {
        // Return the view for the dashboard index
        return view('dashboard.index'); 
    }
}
