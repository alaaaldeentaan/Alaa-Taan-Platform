<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\CategoryCourseController;
use App\Http\Controllers\CourseTraningController;
use App\Http\Controllers\EpisodeController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\StartController;
use App\Http\Controllers\TeacherController;
use App\Http\Controllers\TestController;
use Faker\Guesser\Name;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('admin/add_training', [AdminController::class, 'add_training'])->name('admin.add_training');
Route::get('admin/add_category', [AdminController::class, 'add_category'])->name('admin.add_category');
Route::get('admin/add_admin', [AdminController::class, 'add_admin'])->name('admin.add_admin');
Route::post('admin/store_training', [AdminController::class, 'store_training'])->name('admin.store_training');
Route::post('admin/detial_Category/{id}', [AdminController::class, 'detial_Category'])->name('admin.detial_Category');
Route::post('admin/update_detial_Category', [AdminController::class, 'update_detial_Category'])->name('admin.update_detial_Category');
Route::post('admin/store_category', [AdminController::class, 'store_category'])->name('admin.store_category');
Route::post('admin/store_admin', [AdminController::class, 'store_admin'])->name('admin.store_admin');
Route::get('admin/display_admin', [AdminController::class, 'display_admin'])->name('admin.display_admin');
Route::post('admin/updateAdmin/{id}', [AdminController::class, 'updateAdmin'])->name('admin.updateAdmin');
Route::post('admin/storeupdateAdmin/{id}', [AdminController::class, 'storeupdateAdmin'])->name('admin.storeupdateAdmin');
Route::post('admin/deleteAdmin/{id}', [AdminController::class, 'deleteAdmin'])->name('admin.deleteAdmin');

/////////////////////////////////////////////////////////////////////////////////////////
Route::get('admin/index', [AdminController::class, 'index'])->name('admin.index');
Route::get('admin/add_teacher', [AdminController::class, 'show'])->name('admin.add_teacher');
Route::get('admin/addstudent', [AdminController::class, 'addStudent'])->name('admin.addStudent');
Route::post('admin/storestudent',[AdminController::class,'storeStudent'])->name('admin.storeStudent');
Route::post('admin/store/teacher', [AdminController::class, 'store'])->name('admin.store_teacher');
Route::get('admin/display/teacher', [AdminController::class, 'display'])->name('admin.display_teacher');
Route::get('admin/displayRequest', [AdminController::class, 'displayRequest'])->name('admin.displayRequest');
Route::get('admin/displayStudent', [AdminController::class, 'displayStudent'])->name('admin.displayStudent');
Route::put('admin/destroy/teache/{teacher}', [AdminController::class, 'destroy'])->name('admin.destroy_teacher');
Route::put('admin/block/teache/{teacher}', [AdminController::class, 'block'])->name('admin.block_teacher');
/////////////////////////////////////////////////////////////////////////////////////////
Route::post('admin/accept/{id}', [AdminController::class, 'accept'])->name('admin.accept');
Route::post('admin/unaccept/{id}', [AdminController::class, 'unAccept'])->name('admin.unaccept');
// Route::view('admin/add_teacher','admin/pages/add_teacher')->name('admin.add_teacher');
// Route::view('index/add_teacher','teacher.pages.add_teacher')->name('index/add_teacher');
Route::post('admin/updatestudent/{id}', [AdminController::class, 'updatestudent'])->name('admin.updatestudent');
Route::post('admin/storeupdatestudent/{id}', [AdminController::class, 'storeupdatestudent'])->name('admin.storeupdatestudent');
Route::post('admin/deletestudent/{id}', [AdminController::class, 'deletestudent'])->name('admin.deletestudent');
/////////////////////////////////////////////////////////////////////////////////////////
Route::post('admin/updateteacher/{id}', [AdminController::class, 'updateteacher'])->name('admin.updateteacher');
Route::post('admin/storeupdateteacher/{id}', [AdminController::class, 'storeupdateteacher'])->name('admin.storeupdateteacher');
Route::post('admin/deleteteacher/{id}', [AdminController::class, 'deleteteacher'])->name('admin.deleteteacher');
/////////////////////////////////////////////////////////////////////////////////////////
Route::get('admin/displayCourses', [AdminController::class, 'displayCourses'])->name('admin.displayCourses');
Route::post('admin/detailtraining/{id}', [AdminController::class, 'detailtraining'])->name('admin.detailtraining');
Route::post('admin/storeupdatetraining/{id}', [AdminController::class, 'storeupdatetraining'])->name('admin.storeupdatetraining');
Route::post('admin/deleteTraining/{id}', [AdminController::class, 'deleteTraining'])->name('admin.deleteTraining');


Route::get('/dc', function () {
    return view('dashboard');
});

Route::get('/Services', function () {
    return view('Services');
});

Route::get('/Events', function () {
    return view('Events');
});
Route::get('/teacher', function () {
    return view('teacher');
});
Route::get('/courses', function () {
    return view('courses');
});
Route::get('/dtc', function () {
    return view('dtc');
});
Route::get('/details', function () {
    return view('detailscourse');
});
Route::get('/lo', function () {
    return view('login');
});
Route::get('/cd', function () {
    return view('cd');
});
Route::get('/cart', function () {
    return view('cart');
})->name('cart');

Route::get('/', [StartController::class, 'create']);
Route::get('/profile', function () {
    return view('Pages.profile', ['name' => 'John Doe']);
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
    Route::post('/profile', [ProfileController::class, 'updatePhotoProfile'])->name('profile.updatePhotoProfile');
});

require __DIR__ . '/auth.php';
Route::get('/teacher/dashboard', function () {
    return view('teacher.dashboard');
})->middleware(['auth:teacher', 'verified'])->name('teacher.dashboard');

// Route::middleware('auth:teacher')->group(function () {
//     Route::get('/profile',   [ProfileController::class, 'edit'])->name('profile.edit');
//     Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
//     Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
// });
require __DIR__ . '/teacherauth.php';

Route::prefix('teacher')->name('teacher.')->group(function () {
    Route::middleware('auth:teacher')->group(function () {
        Route::get('/profile',   [ProfileController::class, 'edit'])->name('profile.edit');
        Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
        Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
    });
});

Route::get('/episode/create', [EpisodeController::class, 'create'])->name('episode.create');
Route::post('/episode/store', [EpisodeController::class, 'store'])->name('episode.store');
Route::get('/course_traning/create', [CourseTraningController::class, 'create']);
Route::post('/course_traning/store', [CourseTraningController::class, 'store'])->name('course_traning.store');
Route::get('/course_category/create', [CategoryCourseController::class, 'create']);
Route::post('/course_category/store', [CategoryCourseController::class, 'store'])->name('course_category.store');


Route::get('/teacherphoto', [StartController::class, 'showteacherphoto'])->name('showteacherphoto');
Route::get('/cart/{id}', [StartController::class, 'addCart'])->name('cart.addCart');

Route::get('/theHome', [StartController::class, 'create'])->name('hom');
Route::get('/theHome/lastCourses', [StartController::class, 'lastCourses'])->name('theHome.lastCourses');
Route::post('/theHome/searshQueryTeacher', [StartController::class, 'searshQueryTeacher'])->name('theHome.searshQueryTeacher');
Route::get('/theHome/showcategorycourses/{id}', [StartController::class, 'show'])->name('showcategorycourses.show');
Route::get('/theHome/showdetailscourse/{id}', [StartController::class, 'showDetailCourse'])->name('showdetailscourse.showDetailCourse');