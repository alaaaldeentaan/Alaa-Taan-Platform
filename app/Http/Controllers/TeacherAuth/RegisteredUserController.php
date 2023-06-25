<?php

namespace App\Http\Controllers\TeacherAuth;

use App\Http\Controllers\Controller;
use App\Models\Teacher\Teacher;
use App\Providers\RouteServiceProvider;
use Illuminate\Auth\Events\Registered;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\Rules;
use Illuminate\View\View;
use Illuminate\Support\Facades\Storage;

class RegisteredUserController extends Controller
{
    /**
     * Display the registration view.
     */
    public function create(): View
    {
        // dd('you in page register teacher');
        return view('teacher.register');
    }



    /**
     * Handle an incoming registration request.first_name	last_name	user_name
     *
     * @throws \Illuminate\Validation\ValidationException
     */

    /*
    $table->id();
            $table->string('name');
            $table->string('user_Name');
            $table->string('language');
            $table->string('address');
            $table->string('gender');
            $table->date('dob');
            $table->string('phone');
            $table->string('email')->unique();
            $table->string('password');
            $table->rememberToken();
            $table->timestamps();
        'name',
        'user_name',
        'language',
        'phone',
        'dob',
        'gender',
        'address',
        'email',
        'password',
     */
    // public function store(Request $request): RedirectResponse
    public function store(Request $request)
    {
        $request->validate([
            'name' => ['required', 'string', 'max:255', 'min:5'],
            'user_Name' => ['required', 'string', 'max:255', 'min:5'],
            'language' => ['required', 'string', 'max:255', 'min:5'],
            'email' =>     ['required', 'string', 'email', 'max:255', 'unique:' . Teacher::class],
            'phone' => ['required', 'string', 'max:255', 'min:7'],
            'dob' => ['required', 'string', 'string', 'max:255'],
            'password' =>  ['required', 'confirmed', Rules\Password::defaults()],
            'gender' => ['required', 'string', 'max:255'],
            'address' => ['required', 'string', 'max:255'],
            'photo' => 'required|image|mimes:jpg,png,jpeg,gif|max:200',
        ]);


        $teacher = new Teacher;
        $teacher->name = $request->input('name');
        $teacher->user_Name = $request->input('user_Name');
        $teacher->language = $request->input('language');
        $teacher->email = $request->input('email');
        $teacher->phone = $request->input('phone');
        $teacher->dob = $request->input('dob');
        // $teacher->password = $request->input('password');
        $teacher->password = Hash::make($request->password);
        $teacher->gender = $request->input('gender');
        $teacher->address = $request->input('address');


        $filename = time()  . '.' . $request->file('photo')->getClientOriginalName();
        $path = $request->file('photo')->storeAs('images/certificate', $filename, 'public');
        $url = Storage::url($path);
        $teacher->certificate_img = $url;

        $teacher->save();

        // dd($url);
        // $teacher = Teacher::create([
        //     'name' => $request->name,
        //     'user_Name' => $request->user_Name,
        //     'language' => $request->language,
        //     'phone' => $request->phone,
        //     'dob' => $request->dob,
        //     'gender' => $request->gender,
        //     'address' => $request->address,
        //     'email' => $request->email,
        //     'password' => Hash::make($request->password),
        //     'certificate_img' => $url,
        // ]);
        // dd($teacher);


        event(new Registered($teacher));
        // Auth::guard('teacher')->login($teacher);
        // dd($request);
        // return redirect(RouteServiceProvider::TEACHERHOME);
        return redirect()->route('teacher.login');
    }
}