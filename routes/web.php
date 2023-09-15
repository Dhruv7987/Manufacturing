<?php

use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UsersController;
use Illuminate\Support\Facades\Auth;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/admin', function () {
    return view('admin.index');
})->name('admin');

Route::get('/signin', function () {
    return view('admin.signin');
})->name('signin');

Route::get('/signup', function () {
    return view('admin.signup');
})->name('signup');

Route::get('/table', function () {
    return view('admin.tables');
})->name('table');

// Route::get('/admin-page', function () {
//     return view('admin.admin-page');
// })->name('admin-page');

Route::get('/admin-page',[UsersController::class,'index'])->name('admin-page');
Route::get('/admin-create',[UsersController::class,'create'])->name('admin-create');
Route::post('/admin-store',[UsersController::class,'store'])->name('admin-store');
Route::get('/admin-edit/{id}',[UsersController::class,'edit'])->name('admin-edit');
Route::put('/admin-update/{id}', [UsersController::class, 'update'])->name('admin-update');
Route::post('/status', [UsersController::class, 'status'])->name('status');


Auth::routes();

Route::get('/home', [HomeController::class, 'index'])->name('home');
