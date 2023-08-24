<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\SliderController;
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

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');
Route::middleware('auth:web')->group(function () {
    Route::resource('/sliders',SliderController::class);
});
Route::get('/front', function () {
    return view('pages.front.front');
})->name('front.front');
Route::get('/front/marketing', function () {
    return view('pages.front.marketing');
})->name('front.marketing');
Route::get('/front/business', function () {
    return view('pages.front.business');
})->name('front.business');
Route::get('/front/team', function () {
    return view('pages.front.team');
})->name('front.team');
Route::get('/front/about', function () {
    return view('pages.front.about');
})->name('front.about');
Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';

Route::get('/{page}', [AdminController::class,'index']);
