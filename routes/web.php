<?php

use App\Models\About;
use App\Models\Blog;
use App\Models\Classes;
use App\Models\Course;
use App\Models\Student;
use App\Models\Teacher;
use Illuminate\Support\Facades\Auth;
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

// Frontend qismlari

// Front
Route::get('/', function () {
    $blogs = Blog::take(3)->where('school_id', env('SCHOOL_ID'))->orderByDesc('id')->get();
    $teachers = Teacher::with('about')->get();
    $classes = Classes::take(7)->where('school_id', env('SCHOOL_ID'))->orderByDesc('id')->get();
    $schools = About::with('teachers')->get();
    $allClasses = Classes::take(7)->where('school_id', env('SCHOOL_ID'))->orderByDesc('id')->get();
    $courses = Course::take(3)->where('school_id', env('SCHOOL_ID'))->orderByDesc('id')->get();
    return view('frontend.home.index', compact('blogs', 'teachers', 'classes', 'allClasses', 'courses','schools'));
})->name('home');

// About
Route::get('/about', function () {
    $classes = Classes::take(8)->where('school_id', env('SCHOOL_ID'))->orderByDesc('id')->get();
    $allClasses = Classes::where('school_id', env('SCHOOL_ID'))->get();
    return view('frontend.about.index', compact('classes', 'allClasses'));
})->name('about');

// Classes
Route::get('/classes', function () {
    return view('frontend.classes.index');
})->name('classes.index');

Route::get('/statistika', function () {
    return view('frontend.statistika.index');
})->name('statistika');

// classes single
Route::get('/class-detail/{id}', function ($id) {
    $class = Classes::find($id);
    $classes = Classes::where('school_id', env('SCHOOL_ID'))->get();
    $course = Course::where('school_id', env('SCHOOL_ID'))->first();
    return view('frontend.classes.detail', compact('class', 'classes', 'course'));
})->name('class.detail');

// courses
Route::get('/schools', function () {
    $schools = Course::where('school_id', env('SCHOOL_ID'))->get();
    return view('frontend.schools.index', compact('schools'));
})->name('schools.index');

// schoolss single
Route::get('/schools-detail/{id}', function ($id) {
    $schools = Course::find($id);
    return view('frontend.schools.detail', compact('schools'));
})->name('schools.detail');


// Teacher
Route::get('/teachers', function () {
    return view('frontend.teachers.index');
})->name('teachers.index');

// Students
Route::get('/front/students', function () {
    return view('frontend.students.index');
})->name('front.students');


// Contact
Route::get('/contact', function () {
    $courses = Course::where('school_id', env('SCHOOL_ID'))->get();
    return view('frontend.contact.index', compact('courses'));
})->name('contact');

// Blog
Route::get('/blog', function () {
    return view('frontend.blog.index');
})->name('blog.index');

// Blog show
Route::get('/blog-show/{id}', function ($id) {
    $blog = Blog::find($id);
    return view('frontend.blog.show', compact('blog'));
})->name('blog.show');

// 404
Route::get('/404', function () {
    return view('frontend.errors.404');
})->name('404');

Route::group(['middleware' => 'auth'], function () {

    // Admin
    Route::get('/admin', function () {
        return view('admin.index');
    })->name('admin');

    // Admin Qisimlari
    Route::resource('/abouts', \App\Http\Controllers\AboutController::class);
    Route::resource('/teacher', \App\Http\Controllers\TeacherController::class);
    Route::resource('/class', \App\Http\Controllers\ClassesController::class);
    Route::resource('/weeks', \App\Http\Controllers\WeekController::class);
    Route::resource('/courses', \App\Http\Controllers\CourseController::class);
    //    Route::resource('/categories',\App\Http\Controllers\CategoryController::class);
    Route::resource('/blogs', \App\Http\Controllers\BlogController::class);
    Route::resource('/degree', \App\Http\Controllers\DegreeController::class);
    Route::resource('/students', \App\Http\Controllers\StudentController::class);
    Route::resource('/certificate', \App\Http\Controllers\CertificateController::class);
    Route::resource('/users', \App\Http\Controllers\UserController::class);

    Route::resource('/roles', \App\Http\Controllers\RoleController::class);
    Route::resource('/menegers', \App\Http\Controllers\WorkersController::class);


});
Route::get('login', function () {
    return view('admin.login');
})->name('login');
Route::get('/logout', function () {
    Auth::logout();
    return view('admin.login');
})->name('logout');
