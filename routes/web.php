<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\GajiController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\logincontroller;
use App\Http\Controllers\DashboardHome;
use App\Http\Controllers\regiscontroller;
use App\Http\Controllers\ContactController;


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

Route::get('/home', function () {
    return view('home');
});

Route::get('/dashboard', [GajiController::class, 'index']);
Route::resource('/dashboard/gaji', GajiController::class);

Route::get('/', function () {
    return view('home');
});

Route::get('/contact', function () {
    return view('contact');
});

Route::get('/home', [HomeController::class, 'index'])->name('home.index');
Route::get('/home/create', [HomeController::class, 'create'])->name('home.create');
Route::post('/home/create', [HomeController::class, 'store'])->name('home.store');
Route::get('/home/{home}/edit', [HomeController::class, 'edit'])->name('home.edit');
Route::put('/home/{home}/edit', [HomeController::class, 'update'])->name('home.update');
Route::put('/home/{home}/delete', [HomeController::class, 'destroy'])->name('home.destroy');

Route::get('/dashboardhome', [DashboardHome::class, 'index']);



Route::get('/profile', [ContactController::class, 'profile.index']);

Route::get('/login', [logincontroller::class,'index'])->name('login')->middleware('guest');
Route::post('/login', [logincontroller::class,'authenticate']);
Route::post('/logout', [logincontroller::class,'logout']);

Route::get('/register', [regiscontroller::class,'index'])->middleware('guest');
Route::post('/register', [regiscontroller::class,'store']);