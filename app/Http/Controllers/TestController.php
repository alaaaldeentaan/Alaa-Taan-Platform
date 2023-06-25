<?php

namespace App\Http\Controllers;

use App\Models\Account\Account;
use App\Models\Category_Course\Category_Course;
use App\Models\User;
use Illuminate\Http\Request;

class TestController extends Controller
{
    public function create()
    {
        // $all = Account::where('id', 1)->get();
        // $all = Account::where('id', 3)->with('user')->get();
        // return $all;
        // dd('bbbbbb');
        $cats = Category_Course::all();
        return view('Home', compact('cats'));
    }
}
