<?php

namespace App\Http\Controllers;

use App\Http\Requests\TeacherStoreRequest;
use App\Models\Teacher\Teacher;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Storage;

class TeacherController extends Controller
{
   

    public function store(Request $request)
    {
        dd($request);
        $img = null;
        if ($request->hasFile('img')) {
            $img = $request->file('img')->store('public/images');
            $img = Storage::url($img);
        }
        
        $certificateImg = null;
        if ($request->hasFile('certificate_img')) {
            $certificateImg = $request->file('certificate_img')->store('public/images');
            $certificateImg = Storage::url($certificateImg);
        }
        //another way to store image 
        // if ($request->hasFile('img')) {
        //     $img = $request->file('img');
        //     $image = I::make($img)->encode('jpg', 80);
        //     $path = 'public/images/' . $img->getClientOriginalName();
        //     Storage::put($path, $image);
        // }
    // Store the user data in the database
    Teacher::create([
        'name' => $request->input('name'),
        'user_Name' => $request->input('user_Name'),
        'language' => $request->input('language'),
        'address' => $request->input('address'),
        'gender' => $request->input('gender'),
        'dob' => $request->input('dob'),
        'phone' => $request->input('phone'),
        'email' => $request->input('email'),
        'password' => Hash::make($request->input('password')),
        'img' => $img,
        'certificate_img' => $certificateImg
    ]);
    
    // Redirect to the success page
    return redirect('/')->with('success', 'User has been created successfully!');
    }

    public function show_teacher_data()
    {
        
    }
}
