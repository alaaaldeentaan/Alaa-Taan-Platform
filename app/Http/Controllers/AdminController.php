<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Requests\TeacherStoreRequest;
use App\Models\Admin\Admin;
use App\Models\Category_Course\Category_Course;
use App\Models\Course_Traning\Course_Traning;
use App\Models\Teacher\Teacher;
use App\Models\User;
use Illuminate\Auth\Events\Registered;
use Illuminate\Database\Eloquent\Casts\AsStringable;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Validator;
use Illuminate\Validation\Rules;

class AdminController extends Controller
{
    // use AuthenticatesUsers;
    public function index()
    {
        return view('admin.pages.index');
    }

    public function show()
    {
        return view('admin.pages.add_teacher');
    }
    public function display_admin()
    {
        $admins = Admin::all();
        return view('admin.pages.admin_crad.show_admin' ,compact('admins'));
    }
    public function storeupdateAdmin(Request $request ,$id)
    {

        $request->validate([
            'name' => ['required', 'string', 'max:255', 'min:5'],
            'user_Name' => ['required', 'string', 'max:255', 'min:5'],
        ]);

        DB::table('admins')->where('id', $id)->update([
            'name' => $request->name,
            'user_Name' => $request->user_Name,
        ]);
        return redirect()->route('admin.display_admin')->with('success', 'Your Updated The Admin Successful!');
    }
    public function deleteAdmin($id)
    {
        //  dd('deleteAdmin',$id);
        DB::table('admins')->where('id', $id)->delete();
        return redirect()->route('admin.display_admin')->with('success', 'Admin has been deleted. Successful!');
    }
    public function updateAdmin(Request $request,$id)
    {
        $admin  =  Admin::find($id);
        return view('admin.pages.admin_crad.edit' ,compact('admin'));
    }
    public function add_admin()
    {
        return view('admin.pages.add_admin');
    }
    public function store_admin(Request $request)
    {
            
        $request->validate([
            'name' => ['required', 'string', 'max:255', 'min:5'],
            'user_Name' => ['required', 'string', 'max:255', 'min:5'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:' . Admin::class],
            'password' =>   ['required', 'confirmed', Rules\Password::defaults()],
        ]);
        
        $damin = new Admin;
        $damin->name = $request->input('name');
        $damin->user_Name = $request->input('user_Name');
        $damin->email = $request->input('email');
        $damin->password = Hash::make( $request->input('password') );
        $damin->img = 'images/profile/photo/def.jpg';
        $damin->account_id = 3;
        $damin->save();
        return redirect()->route('admin.add_admin')->with('success', 'Your Created A New Admin successful!');
    }
    ////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
    public function store_category(Request $request)
    {
        
        $request->validate([
            'name' => ['required', 'string', 'max:255', 'min:3'],
            'information' => 'required|string|max:255',
            'admin_id' => 'required|integer|digits_between:1,5',
            'photo' =>  'required|mimes:jpeg,png,jpg,gif',
        ]);
        
        // dd($request);
        $category = new Category_Course();

        $category->name = $request->input('name');
        $category->information = $request->input('information');
        $category->admin_id = $request->input('admin_id');

        $filename = $request->file('photo')->getClientOriginalName();
        $path = $request->file('photo')->storeAs('images/Course_Category/photo', $filename, 'public');
        // $path = $request->file('photo')->storeAs('images/Course_Category/photo', $filename);
        $url = Storage::url($path);
        $category->img = $path;
        $category->save();
        return redirect()->route('admin.add_category')->with('success', 'Your Created A New Category Course successful!');
    }
    ////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
    public function add_training()
    {
        $categorys = Category_Course::all();
        $data = Teacher::all();
        return view('admin.pages.add_training', compact('categorys' , 'data'));
    }
    public function add_category()
    {
        $admins = Admin::all();
        return view('admin.pages.add_category' ,compact('admins'));
    }
    public function store_training(Request $request)
    {  
        dd($request);
        $request->validate([
            'description' => ['required', 'string', 'max:255', 'min:5'],
            'count_episod' => 'required|integer|digits_between:1,5',
            'price' => 'required|integer|digits_between:1,5',
            'duration' => ['required', 'string', 'max:255'],
            'category__course_id' => 'required|integer|digits_between:1,5',
            'teacher_id' => 'required|integer|digits_between:1,5',
            'photo' =>  'required|mimes:jpeg,png,jpg,gif',
        ]);
        // dd($request);
        
        $training = new Course_Traning();
        
        $training->description = $request->input('description');
        $training->count_episod = $request->input('count_episod');
        $training->price = $request->input('price');
        $training->duration = $request->input('duration');
        $training->category__course_id = $request->input('category__course_id');
        $training->aproved = 0;
        $training->teacher_id = $request->input('teacher_id');

        $filename = time()  . '.' . $request->file('photo')->getClientOriginalName();
        $path = $request->file('photo')->storeAs('images/Course_Traning/photo', $filename, 'public');
       
        $url = Storage::url($path);
        $training->img = $path;

        $training->save();

        return redirect()->route('admin.add_training')->with('success', 'Your Created A New  course training successful!');
    }
    public function detial_Category($id)
    {
        $category = Category_Course::find($id);
        return view('admin.pages.course_training.detail_category', compact('category'));
    }
    public function update_detial_Category(Request $request)
    {
        
        $request->validate([
            'id' => 'required',
            'name' => ['required', 'string', 'max:255', 'min:5'],
            'information' => 'required|string|max:255|min:5',
        ]);
        
        // dd($request);
        DB::table('category__courses')->where('id', $request->id )->update([
            'name' => $request->name,
            'information' => $request->information,
        ]);
        return redirect()->route('admin.displayCourses')->with('success', 'category courses has been updated successful!');
    }
    ////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
    public function addStudent()
    {
        return view('admin.pages.add_student');
    }

    public function store(Request $request)
    {

        // dd($request);
        // $validator = Validator::make($request->all(), [
        //     'photo' =>  'required|mimes:jpeg,png,jpg,gif',
        // ]);

        // if ($validator->fails()) {
        //     dd('Error');
        // }    
        // dd('pass');
        $request->validate([
            'name' => ['required', 'string', 'max:255', 'min:5'],
            'user_Name' => ['required', 'string', 'max:255', 'min:5'],
            'language' => ['required', 'string', 'max:255', 'min:5'],
            'email' =>     ['required', 'string', 'email', 'max:255', 'unique:' . Teacher::class],
            'phone' => ['required', 'string', 'max:255', 'min:7'],
            'dob' => ['required', 'string', 'max:255'],
            'password' =>  ['required', 'confirmed', Rules\Password::defaults()],
            'gender' => ['required', 'string', 'max:255'],
            'address' => ['required', 'string', 'max:255'],
            'photo' =>  'required|mimes:jpeg,png,jpg,gif',
        ]);

        // dd($request);

        $teacher = new Teacher;
        $teacher->name = $request->input('name');
        $teacher->user_Name = $request->input('user_Name');
        $teacher->language = $request->input('language');
        $teacher->email = $request->input('email');
        $teacher->phone = $request->input('phone');
        $teacher->dob = $request->input('dob');
        $teacher->password = Hash::make($request->password);
        $teacher->gender = $request->input('gender');
        $teacher->address = $request->input('address');
        $teacher->img = 'images/profile/photo/def.jpg';

        $filename = time()  . '.' . $request->file('photo')->getClientOriginalName();
        $path = $request->file('photo')->storeAs('images/certificate', $filename, 'public');
        $url = Storage::url($path);
        $teacher->certificate_img = $url;

        $teacher->save();

        // dd($request);
        // $img = null;
        // if ($request->hasFile('img')) {
        //     $img = $request->file('img')->store('public/images');
        //     $img = Storage::url($img);
        // }
        // $certificateImg = null;
        // if ($request->hasFile('certificate_img')) {
        //     $certificateImg = $request->file('certificate_img')->store('public/images');
        //     $certificateImg = Storage::url($certificateImg);
        // }
        // Teacher::create([
        //     'name' => $request->input('name'),
        //     'user_Name' => $request->input('user_name'),
        //     'language' => $request->input('language'),
        //     'address' => $request->input('address'),
        //     'gender' => $request->input('gender'),
        //     'dob' => $request->input('dob'),
        //     'phone' => $request->input('phone'),
        //     'email' => $request->input('email'),
        //     'password' => Hash::make($request->input('password')),

        // ]);

        return redirect()->route('admin.add_teacher')->with('success', 'Your Created A New  Teaacher successful!');

        //         @if (session('success'))
        //   <div class="alert alert-success">
        //     {{ session('success') }}
        //   </div>
        // @endif
    }
    public function storeStudent(Request $request)
    {
        $request->validate([
            'user_name' => ['required', 'string', 'max:255'],
            'first_name' => ['required', 'string', 'max:255'],
            'last_name' => ['required', 'string', 'max:255'],
            'email' =>     ['required', 'string', 'email', 'max:255', 'unique:' . User::class],
            'password' =>  ['required', 'confirmed', Rules\Password::defaults()],
        ]);

        // dd('oooooo');

        $user = User::create([
            'user_name' => $request->user_name,
            'first_name' => $request->first_name,
            'last_name' => $request->last_name,
            'email' => $request->email,
            'img' => 'images/profile/photo/def.jpg',
            'password' => Hash::make($request->password),
        ]);
        return redirect()->route('admin.addStudent')->with('success', 'Your Created Student successful!');
    }
    public function display()
    {
        $teachers = Teacher::where('is_aproved', 1)->get();
        return view('admin.pages.teacher_crad.show_teacher', compact('teachers'));
    }
    public function displayRequest()
    {
        $teachers = Teacher::where('is_aproved', 0)->get();
        return view('admin.pages.show_teacher_request', compact('teachers'));
    }
    public function displayStudent()
    {
        $students = User::all();
        return view('admin.pages.student_crad.show_student', compact('students'));
    }

    public function block(Teacher $teacher)
    {
        $teacher->is_aproved = 0;
        return redirect()->back()->with('success', 'Teacher has been blocked.');
    }
    public function destroy(Teacher $teacher)
    {
        $teacher->delete();
        return redirect()->back()->with('success', 'Teacher has been deleted.');
    }

    public function accept($id)
    {
        // dd('accept ', $id);

        $teacher =  Teacher::find($id);
        $teacher->is_aproved =  1;
        $teacher->save();
        return redirect()->back()->with('success', 'Teacher has been Accepted.');
    }
    public function unAccept($id)
    {
        //  dd('un accept ', $id);
        Teacher::where('id', $id)->delete();
        return redirect()->back()->with('success', 'Teacher has been deleted.');
    }
    ////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
    public function updatestudent($id)
    {
        $student = User::find($id);
        return view('admin.pages.student_crad.edit', compact('student'));
    }
    public function storeupdatestudent(Request $request, $id)
    {
        //  dd('storeupdatestudent', $request->id, $request->user_name, $request->first_name,$id);
        DB::table('users')->where('id', $id)->update([
            'user_name' => $request->user_name,
            'first_name' => $request->first_name,
            'last_name' => $request->last_name,
        ]);
        return redirect()->route('admin.displayStudent')->with('success', 'student has been updated.');
    }
    public function deletestudent($id)
    {
        //  dd('deletestudent',$id);
        DB::table('users')->where('id', $id)->delete();
        return redirect()->route('admin.displayStudent')->with('success', 'student has been deleted.');
    }
    ////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////

    public function updateteacher($id)
    {

        $teacher = Teacher::find($id);
        return view('admin.pages.teacher_crad.edit', compact('teacher'));
    }
    public function storeupdateteacher(Request $request, $id)
    {
        //  dd('storeupdatestudent', $request->id, $request->user_name, $request->first_name,$id);
        // dd($request->id , $id);
        DB::table('teachers')->where('id', $id)->update([
            'name' => $request->name,
            'user_Name' => $request->user_Name,
            'language' => $request->language,
            'phone' => $request->phone,
            'gender' => $request->gender,
            'address' => $request->address,
            'dob' => $request->dob,
        ]);
        return redirect()->route('admin.display_teacher')->with('success', 'student has been updated.');
    }
    public function deleteteacher($id)
    {
        //  dd('deleteteacher',$id);
        DB::table('teachers')->where('id', $id)->delete();
        return redirect()->route('admin.display_teacher')->with('success', 'student has been deleted.');
    }
    ////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
    public function displayCourses()
    {
        $courses = Course_Traning::all();
        // return  $courses;
        return view('admin.pages.course_training.show_training', compact('courses'));
    }
    public function detailtraining($id)
    {
        // dd($id);
        $course = Course_Traning::find($id);
        return view('admin.pages.course_training.edit', compact('course'));
    }
    public function storeupdatetraining(Request $request, $id)
    {

        DB::table('course__tranings')->where('id', $id)->update([
            'description' => $request->description,
            'count_episod' => $request->count_episod,
            'price' => $request->price,
            'duration' => $request->duration,
            'teacher_id' => $request->teacher_id,
            'category__course_id' => $request->category__course_id,
        ]);
        return redirect()->route('admin.displayCourses')->with('success', 'course tranings has been updated.');
    }
    public function deleteTraining($id)
    {
        DB::table('course__tranings')->where('id', $id)->delete();
        return redirect()->route('admin.displayCourses')->with('success', 'course tranings has been deleted.');
    }
}