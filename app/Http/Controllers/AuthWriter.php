<?php

namespace App\Http\Controllers; 

use Illuminate\Http\Request; 

class AuthWriter extends Controller 
{
    // Show the login form
    public function showLoginForm()
    {
        // Return the login view for the writer
        return view('writer.login'); 
    }

    // Handle the login request
    public function login(Request $request)
    {
        // Validate the password input
        $request->validate([
            'password' => 'required', 
        ]);

        // Check if the provided password matches the environment variable
        if ($request->input('password') === env('WRITER_PASSWORD')) {
            $request->session()->put('writer_authenticated', true);
            return redirect()->intended('/writer-console'); 
        }

        // Redirect back to the login page with an error message if the password is incorrect
        return redirect('/writer-login')->with('error', 'Unauthorized access!'); 
    }

    // Handle the logout request
    public function logout(Request $request)
    {
        // Clear the session variable indicating authentication status
        $request->session()->forget('writer_authenticated');
        // Redirect to the login page
        return redirect('/writer-login');
    }
}
