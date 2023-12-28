<?php

use App\Http\Controllers\Auth\AuthenticatedSessionController;
use App\Http\Controllers\ProfileController;
use GuzzleHttp\Middleware;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Auth\RegisteredUserController;
use App\Http\Controllers\BusinessController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\CommonController;
use App\Models\Category;
use App\Models\Business;
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
    return redirect()->route('login');
});

// Route::get('/home', function () {
//     return view('Main/home');
// });

// Route::get('/login', function () {
//      return view('Main.login');
// });

Route::middleware('guest')->group(function () {
    Route::get('register/user', [RegisteredUserController::class, 'create'])->name('register.user');

    Route::post('register/user', [RegisteredUserController::class, 'store']);

    Route::get('register/business', [BusinessController::class, 'create'])->name('register.business');

    Route::post('register/business', [BusinessController::class, 'store']);

    Route::get('login', [AuthenticatedSessionController::class, 'create'])->name('login');

    Route::post('login', [AuthenticatedSessionController::class, 'store']);
});


Route::middleware('auth')->group(function () {

    Route::get('/home', [CommonController::class, 'home'])->name('home');

    Route::get('/Categories', [CommonController::class, 'allCategories'])->name('all.categories');

    Route::get('/Blogs', [CommonController::class, 'allBlogs'])->name('all.blogs');

    Route::get('/businesses/{id}', [CommonController::class, 'businesses'])->name('business.list');

    Route::get('/blog/{id?}', [CommonController::class, 'blog'])->name('blog');

    Route::get('/about', [CommonController::class, 'about'])->name('about');

    Route::post('logout', [AuthenticatedSessionController::class, 'destroy'])->name('logout');
});


Route::middleware('auth', 'admin')->group(function () {
    Route::get('/admin/dashboard', [AdminController::class, 'dashboard'])->name('admin.dashboard');

    Route::get('/admin/pending/requests', [AdminController::class, 'pendingRequests'])->name('admin.requests');
    Route::post('/admin/pending/requests/{id?}', [AdminController::class, 'approveRequest'])->name('admin.request.approve');
    Route::delete('/admin/pending/requests/{id?}', [AdminController::class, 'rejectRequest'])->name('admin.request.reject');

    Route::get('/admin/businesses', [AdminController::class, 'businesses'])->name('admin.businesses');

    Route::any('/admin/blog/{id?}', [AdminController::class, 'editBlog'])->name('admin.addBlog');
    Route::post('/admin/add/blog/{id?}', [AdminController::class, 'updateBlog'])->name('admin.updateBlog');

    Route::get('/admin/edit/about', [AdminController::class, 'editAbout'])->name('admin.about');
    Route::post('/admin/edit/about', [AdminController::class, 'updateAbout'])->name('admin.updateAbout');
    // Route::patch('/admin/edit/about', [AdminController::class, 'editAbout'])->name('admin.updateAbout');
});

Route::middleware('auth', 'business')->group(function () {

    Route::get('/business/dashboard', [BusinessController::class, 'dashboard'])->name('business.dashboard');

    Route::get('/business/editDetails', [BusinessController::class, 'editDetails'])->name('business.editDetails');
    Route::post('/business/editDetails', [BusinessController::class, 'saveDetails'])->name('business.saveDetails');
});


// Route::get('/dashboard', function () {
//     return view('dashboard');
// })->middleware(['auth', 'verified'])->name('dashboard');

// Route::middleware('auth')->group(function () {
//     Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
//     Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
//     Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
// });

// require __DIR__ . '/auth.php';

// Route::get('/pb', function () {
//          return view('Main.admin.pending_businesses');
//      });

// Route::get('/abt', function () {
//         return view('Main.about');
//     });

//     Route::get('/blg', function () {
//         return view('Main.blog');
//     });

    Route::get('/blgs', function () {
        return view('Main.all_blogs');
    });
    Route::get('/edtabt', function () {
        return view('Main.admin.edit_about');
    });    
    Route::get('/edtblg', function () {
        return view('Main.admin.add_edit_blog');
    });

    Route::get('/all', function () {
        return view('Main.all_businesses');
    });

    Route::get('/wait', function () {
        return view('Main.business.business_waiting');
    });
