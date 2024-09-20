<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DoctorController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\LoginController;
// use App\Http\Controllers\ArticleController;

use views\layout\welcome;
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

Route::get('/doctors', [DoctorController::class,'index'])->name('doctors.index');
Route::post('/doctors', [DoctorController::class,'store'])->name('doctors.store');
Route::get('/doctors/create', [DoctorController::class,'create'])->name('doctors.create');
Route::get('/doctors/{id}', [DoctorController::class,'show'])->name('doctors.show');
Route::get('/doctors/{id}/edit', [DoctorController::class,'edit'])->name('doctors.edit');
Route::put('/doctors/{id}', [DoctorController::class,'update'])->name('doctors.update');
Route::delete('/doctors/{id}', [DoctorController::class,'destroy'])->name('doctors.destroy');
Route::resource('/users', UserController::class);
Route::get('/homes', [HomeController::class,'index'])->name('homes.index');
Route::get('/register', [RegisterController::class,'index'])->name('register.index');
Route::post('/register/store', [RegisterController::class,'register']);

Route::get('/login', [LoginController::class, 'showLoginForm'])->name('login');
Route::post('/login', [LoginController::class, 'login']);
Route::Delete('/logout', [LoginController::class, 'logout'])->name('logout');
// Route::middleware(['auth'])->group(function () {
//     Route::get('/articles', [ArticleController::class, 'index'])->name('articles.index');
//     Route::get('/articles/create', [ArticleController::class, 'create'])->name('articles.create');
//     Route::post('/articles', [ArticleController::class, 'store'])->name('articles.store');
// });
