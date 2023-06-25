<?php

namespace App\Http\Controllers\TeacherAuth;

use App\Http\Controllers\Controller;
use App\Http\Requests\TeacherAuth\LoginRequest;
use App\Models\Teacher\Teacher;
use App\Providers\RouteServiceProvider;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\View\View;

class AuthenticatedSessionController extends Controller
{
    /**
     * Display the login view.
     */
    public function create(): View
    {
        return view('teacher.login');
    }

    /**
     * Handle an incoming authentication request.
     */
    public function store(LoginRequest $request): RedirectResponse
    {
        // dd($request->email );
        // $teacher = Teacher::where('email' , $request->email )->where('is_aproved' , 1 )->get();
        // $teacher = Teacher::where('email',  $request->email )->get(['is_aproved']);
        $teacher = DB::table('teachers')->where('email',$request->email)->where('is_aproved', 1)->first();
         if(!$teacher)
           return redirect()->route('login');
        $request->authenticate();
        $request->session()->regenerate();
        return redirect()->intended(RouteServiceProvider::TEACHERHOME);
    }

    /**
     * Destroy an authenticated session.
     */
    public function destroy(Request $request): RedirectResponse
    {
        // dd('logout');
        Auth::guard('teacher')->logout();

        $request->session()->invalidate();

        $request->session()->regenerateToken();

        return redirect('/');
    }
}