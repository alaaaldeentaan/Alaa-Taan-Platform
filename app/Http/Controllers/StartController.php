<?php

namespace App\Http\Controllers;

use App\Models\Category_Course\Category_Course;
use App\Models\Course_Traning\Course_Traning;
use App\Models\Episode\Episode;
use App\Models\Teacher\Teacher;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Redirect;

class StartController extends Controller
{
    public function create()
    {

        // $all = Account::where('id', 1)->get();
        // $all = Account::where('id', 3)->with('user')->get();
        // return $all;
        // dd('bbbbbb');
        $lastcourses = Course_Traning::select('*')
            ->fromSub(function ($query) {
                $query->select(
                    '*',
                    DB::raw('@row_num := IF(@prev_cat = category__course_id, @row_num + 1, 1) AS row_num, @prev_cat := category__course_id')
                )
                    ->from('course__tranings')
                    // ->crossJoin(DB::raw('(SELECT @row_num := 0, @prev_cat := NULL) AS vars'))
                    ->orderBy('category__course_id')
                    ->orderByDesc('id');
            }, 't')
            ->where('row_num', '<=', 2)
            ->orderBy('category__course_id')
            ->orderByDesc('id')
            ->get();
        $cats = Category_Course::all();
        // return view('Home', compact('cats'));
        return view('Home', ['cats' => $cats, 'lastcourses' =>  $lastcourses]);
    }
    public function show($id)
    {
        $cat = Category_Course::find($id);
        $courses = Course_Traning::where('category__course_id', $cat->id)
            ->where('aproved', '=', 0)
            ->get();
        return view('coursesIncategory', ['cat' => $cat, 'courses' => $courses]);
    }
    public function searshQueryTeacher(Request $request)
    {
        $searsh = $request->input('query');
        $check = 0;
        if ($searsh) {
            // $courses = Teacher::with('coursetranings')->where('name', 'LIKE', "%{$searsh}%")
            //     ->orwhere('name', 'LIKE', "{$searsh}%")
            //     ->orwhere('name', 'LIKE', "%{$searsh}")
            //     ->get();
            $courses = Teacher::with('coursetranings')->where('name', 'LIKE', "%{$searsh}%")
                ->orwhere('name', 'LIKE', "{$searsh}%")
                ->orwhere('name', 'LIKE', "%{$searsh}")
                ->get();

            if ($courses->isEmpty()) {
                $courses = Course_Traning::where('description', 'LIKE', "%{$searsh}%")
                    ->orwhere('description', 'LIKE', "{$searsh}%")
                    ->orwhere('description', 'LIKE', "%{$searsh}")
                    ->get();
                $check = 1;
            }
            // return view('coursessearsh', ['courses' => $courses, 'check' => $check]);
            return view('cd', ['courses' => $courses, 'check' => $check]);
        }
        return redirect()->route('hom');
    }
    public function lastCourses(Request $request)
    {
        //   $courses = Course_Traning:: select( DB::raw( 'max(id) as user_count, category__course_id' ) )
        //         ->groupBy('category__course_id')
        //         ->get();
        //  $courses = Course_Traning::orderBy('category__course_id')
        //                         ->groupBy('category__course_id')
        //                             ->take(2)
        //                             ->get();
        // $courses = Course_Traning::select(DB::raw('max(id) as user_count, category__course_id'))
        // ->groupBy('category__course_id')
        // ->get();
        // $courses = Course_Traning::select(DB::raw('max(created_at), category__course_id'))
        //                          ->groupBy('category__course_id')
        //                          ->get();


        $courses = Course_Traning::select('*')
            ->fromSub(function ($query) {
                $query->select(
                    '*',
                    DB::raw('@row_num := IF(@prev_cat = category__course_id, @row_num + 1, 1) AS row_num, @prev_cat := category__course_id')

                )
                    ->from('course__tranings')
                    // ->crossJoin(DB::raw('(SELECT @row_num := 0, @prev_cat := NULL) AS vars'))
                    ->orderBy('category__course_id')
                    ->orderByDesc('id');
            }, 't')
            ->where('row_num', '<=', 2)
            ->orderBy('category__course_id')
            ->orderByDesc('id')
            ->get();

        return $courses;
    }
    public function showDetailCourse($id)
    {

        $detailcourse  = Course_Traning::find($id);
        $tascher = Teacher::find($detailcourse->teacher_id);
        $episodes      = $detailcourse->episodes;
        // return  $detailcourse;
        // dd( $id,'showDetailCourse');
        // $cat = Category_Course::find($id);
        // $courses = Course_Traning::where('category__course_id', $cat->id)
        //     ->where('aproved', '=', 0)
        //     ->get();
        // return view('detailscourse', ['course' => $detailcourse, 'episodes' => $episodes]);
        return view('dtc', ['course' => $detailcourse, 'episodes' => $episodes, 'teacher' =>  $tascher]);
    }
    public  function showteacherphoto()
    {
        $teachers = Teacher::select('img', 'address', 'user_Name', 'dob')
            ->where('is_aproved', '=', 1)
            ->get();
        // return $teachers;
        return view('teacherphoto', ['teachers' => $teachers]);
    }
    public  function addCart($id)
    {
        $course = Course_Traning::find($id);
        // return $course;
        return view('cart', ['course' => $course]);
    }
}
