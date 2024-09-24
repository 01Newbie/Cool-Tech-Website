<?php

namespace App\Http\Controllers;

use App\Http\Requests\ProfileUpdateRequest; 
use Illuminate\Http\RedirectResponse; 
use Illuminate\Http\Request; 
use Illuminate\Support\Facades\Auth; 
use Illuminate\Support\Facades\Redirect; 
use Illuminate\View\View; 

class ProfileController extends Controller
{
    /**
     * Display the user's profile form.
     *
     * @param Request $request The incoming request instance.
     * @return View The profile edit view.
     */
    public function edit(Request $request): View
    {
        return view('profile.edit', [
            'user' => $request->user(), 
        ]);
    }

    /**
     * Update the user's profile information.
     *
     * @param ProfileUpdateRequest $request The request containing the validated user data.
     * @return RedirectResponse Redirects to the profile edit page with a success message.
     */
    public function update(ProfileUpdateRequest $request): RedirectResponse
    {
        // Fill the user's model with validated data
        $request->user()->fill($request->validated());

        // If the email is changed, reset the email verification timestamp
        if ($request->user()->isDirty('email')) {
            $request->user()->email_verified_at = null;
        }

        // Save the updated user information
        $request->user()->save();

        // Redirect to the profile edit page with a success status message
        return Redirect::route('profile.edit')->with('status', 'profile-updated');
    }

    /**
     * Delete the user's account.
     *
     * @param Request $request The incoming request instance.
     * @return RedirectResponse Redirects to the home page after account deletion.
     */
    public function destroy(Request $request): RedirectResponse
    {
        // Validate the request to ensure the current password is provided
        $request->validateWithBag('userDeletion', [
            'password' => ['required', 'current_password'],
        ]);

        // Retrieve the authenticated user
        $user = $request->user();

        // Log the user out
        Auth::logout();

        // Delete the user's account
        $user->delete();

        // Invalidate and regenerate the session token
        $request->session()->invalidate();
        $request->session()->regenerateToken();

        // Redirect to the home page after deletion
        return Redirect::to('/');
    }
}
