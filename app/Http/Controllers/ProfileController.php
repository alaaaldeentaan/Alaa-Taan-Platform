<?php

namespace App\Http\Controllers;

use App\Http\Requests\ProfileUpdateRequest;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Redirect;
use Illuminate\View\View;
use Illuminate\Support\Facades\Hash;

class ProfileController extends Controller
{
    /**
     * Display the user's profile form.
     */
    public function edit(Request $request): View
    {
        return view('profile.edit', [
            'user' => $request->user(),
        ]);
    }

    /**
     * Update the user's profile information.
     */
    // public function update(ProfileUpdateRequest $request): RedirectResponse
    // {
    //     // dd($request);
    //     $request->user()->fill($request->validated());

    //     if ($request->user()->isDirty('email')) {
    //         $request->user()->email_verified_at = null;
    //     }

    //     $request->user()->save();

    //     return Redirect::route('profile.edit')->with('status', 'profile-updated');
    // }
    public function update(ProfileUpdateRequest $request)
    {
        if (!Hash::check($request->input('last_password'), Auth()->user()->password))
            return Redirect::route('profile.edit')->with('Incorrect', 'last password is not correct');

        // dd("on");
        // dd(Auth()->user()->password, $request->user()->password, Hash::make(Auth()->user()->last_password), $request->user()->password == Hash::make($request->last_password));
        if ($request->new_password == $request->last_password)
            return Redirect::route('profile.edit')->with('success', 'New password must be defferents from last >> Sorry fill Update ');
        // if ($request->user()->password == Hash::make($request->last_password))  
        //     return Redirect::route('profile.edit')->with('success', 'New password must be defferents from last >> Sorry fill Update ');

        // dd($request);
        $request->user()->fill($request->validated());

        if ($request->user()->isDirty('email')) {
            $request->user()->email_verified_at = null;
        }

        // Auth()->user()->password = Hash::make($request->input('password'));
        Auth()->user()->password = Hash::make($request->input('new_password'));
        Auth()->user()->user_name = ($request->input('user_name'));
        Auth()->user()->email = ($request->input('email'));
        Auth()->user()->first_name = ($request->input('first_name'));
        Auth()->user()->last_name = ($request->input('last_name'));

        $request->user()->save();

        return Redirect::route('profile.edit')->with('status', 'profile-updated');
    }
    /**
     * Delete the user's account.
     * $2y$10$Dr0byKSMUHFlk0FX.45u3uqKs5drGUxExdJW8XxYjTymvI3jitNZC
     * $2y$10$Dr0byKSMUHFlk0FX.45u3uqKs5drGUxExdJW8XxYjTymvI3jitNZC
     * $2y$10$oTRIFbbb7KDVZCo3hTQ5feciUg8TewqIi9VFQ7dyUVCEe/XcEdq4a
     */
    public function updatePhotoProfile(Request $request)
    {

        $request->validate([
            'photo' => 'required|image|mimes:jpg,png,jpeg,gif',
        ]);
        $filename = time() . '.' . $request->file('photo')->getClientOriginalExtension();
        $str = 'images/profile/photo/';
        $path = $request->file('photo')->move(public_path('storage/' . $str), $filename);
        Auth()->user()->img = $str . $filename;
        $request->user()->save();
        return redirect()->back();
    }
    public function destroy(Request $request): RedirectResponse
    {
        $request->validateWithBag('userDeletion', [
            'password' => ['required', 'current_password'],
        ]);

        $user = $request->user();

        Auth::logout();

        $user->delete();

        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return Redirect::to('/');
    }
}