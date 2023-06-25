<?php

namespace App\Http\Controllers;

use App\Models\Episode\Episode;
use Illuminate\Http\Request;

class EpisodeController extends Controller
{
    public function create()
    {
        return view('episodecreate');
    }
    public function store(Request $request)
    {

        $request->validate([
            'title' => ['required', 'string', 'max:255', 'min:5'],
            'description' =>  ['required', 'string', 'max:255', 'min:8'],
            'status' =>  ['required'],
            'photo' => 'required|image|mimes:jpg,png,jpeg,gif|max:200',
            // 'video' => 'mimes:mpeg,ogg,mp4,webm,3gp,mov,flv,avi,wmv,ts|max:100040|required',
            'video' => 'mimes:mpeg,ogg,mp4,webm,3gp,mov,flv,avi,wmv,ts|required',
        ]);
        // <!-- dd('store'); -->
        // dd($request);
        $episode = new Episode;
        $episode->title = $request->input('title');
        $episode->description = $request->input('description');
        $episode->status = $request->input('status');
        $episode->surial_number = 111;
        $episode->teacher_id = 10;
        $episode->course__traning_id = 9;

        $filename = time() . '.' . $request->file('photo')->getClientOriginalExtension();
        $str = 'images/episode/photo/';
        $path = $request->file('photo')->move(public_path('storage/' . $str), $filename);
        // $path = $request->file('photo')->storeAs(public_path('/images/episode/photo'), $filename, 'public');
        // $url = Storage::url($path);
        $episode->img = $str . $filename;

        $filenameved = time() . $request->file('video')->getClientOriginalName();
        $ved = 'uploads/videos/episode/';
        $pathved = $request->file('video')->move(public_path('storage/' . $ved), $filenameved);
        $episode->link =  $ved . $filenameved;
        $episode->save();
        return response('Uplode and Store your data Done >>> ');
    }
}