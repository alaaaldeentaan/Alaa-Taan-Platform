<?php

namespace App\Http\Controllers;

use App\Models\Course_Traning\Course_Traning;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class CourseTraningController extends Controller
{
    public function create()
    {
        return view('coursetraningcreate');
    }
    public function store(Request $request)
    {


        $request->validate([
            'description' =>  ['required', 'string', 'max:255', 'min:8'],
            'price' =>  ['required', 'string', 'max:255'],
            'aproved' =>  ['required'],
            'photo' => 'required|image|mimes:jpg,png,jpeg,gif|max:200',
        ]);
        // dd($request);
        $courcetraning = new Course_Traning;
        $courcetraning->description = $request->input('description');
        $courcetraning->price = $request->input('price');
        $courcetraning->aproved = $request->input('aproved');
        $courcetraning->count_episod = 20;
        $courcetraning->duration = '03:44:22';        

        $courcetraning->teacher_id = 5;
        // $courcetraning->teacher_id = Auth::user()->id;

        $courcetraning->category__course_id = 1;                                

        $filename = time() . '.' . $request->file('photo')->getClientOriginalExtension();
        $str = 'images/Course_Traning/photo/';
        $path = $request->file('photo')->move(public_path('storage/' . $str), $filename);
        // $path = $request->file('photo')->storeAs(public_path('/images/episode/photo'), $filename, 'public');
        // $url = Storage::url($path);
        $courcetraning->img = $str . $filename;

        // $filenameved = time() . $request->file('video')->getClientOriginalName();
        // $ved = 'uploads/videos/episode/';
        // $pathved = $request->file('video')->move(public_path('storage/' . $ved), $filenameved);
        // $courcetraning->link =  $ved . $filenameved;
        $courcetraning->save();
        return response('Created  Done >>> ');
    }
}