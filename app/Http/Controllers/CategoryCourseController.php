<?php

namespace App\Http\Controllers;

use App\Models\Category_Course\Category_Course;
use Illuminate\Http\Request;

class CategoryCourseController extends Controller
{
    public function create()
    {
        return view('categorycoursecreate');
    }
    public function store(Request $request)
    {
        $request->validate([
            'description' =>  ['required', 'string', 'max:255', 'min:8'],
            'name' =>  ['required', 'string', 'max:255'],
            'photo' => 'required|image|mimes:jpg,png,jpeg,gif',
        ]);

        // dd($request);
        $categoryCourse = new Category_Course;
        $categoryCourse->information = $request->input('description');
        $categoryCourse->name = $request->input('name');
        $categoryCourse->admin_id = 4;

        $filename = time() . '.' . $request->file('photo')->getClientOriginalExtension();
        $str = 'images/Course_Category/photo/';
        $path = $request->file('photo')->move(public_path('storage/' . $str), $filename);
        $categoryCourse->img = $str . $filename;
        $categoryCourse->save();
        return response('Created  Done >>> ');
    }
}
