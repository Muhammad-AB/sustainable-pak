<?php

use App\Http\Controllers\ProfileController;
use GuzzleHttp\Middleware;
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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/home', function () {
     return view('Main/home');
});

Route::get('/business/signup', function () {
    return view('Main/business_signup');
})->name('business.signup');

Route::get('/user/signup', function () {
    return view('Main/user_signup');
})->name('user.signup');


// Route::get('/mylogin', function () {
//     return view('Main/login');
// })->name('Main.login');

Route::middleware('auth')->group(function () {
    Route::get('/home', function() {return view('Main.home');})->name('home');
    Route::get('/allCategories', function() {return view('Main.my_all_categories');})->name('all.categories');
    Route::get('/allBlogs', function() {return view('Main.my_all_blogs');})->name('all.blogs');
    Route::get('/businesses', function() {return view('Main.my_business_list');})->name('business.list');
    Route::get('/blog', function() {return view('Main.my_blog');})->name('blog');
    Route::get('/about', function() {return view('Main.my_about');})->name('about');
});




Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
