<?php

use Illuminate\Support\Facades\Route;


use App\Http\Controllers\AuthController;
use App\Http\Controllers\PageController;
use App\Http\Controllers\ProjectController;



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

Route::get('/', [PageController::class, 'index'])->name('page.home');
Route::get('/sermons', [PageController::class, 'sermons'])->name('page.sermons');
Route::get('/books', [PageController::class, 'books'])->name('page.books');
Route::get('/about', [PageController::class, 'about'])->name('page.about');
Route::get('/contact-us', [PageController::class, 'contact'])->name('page.contact');

Route::get('/register', [AuthController::class, 'registerpage']);

Route::get('/login', [AuthController::class, 'loginpage']);

Route::post('/register', [AuthController::class, 'register'])->name('register');

Route::post('/login', [AuthController::class, 'login'])->name('login');

Route::get('/logout',[AuthController::class, 'logout'])->name('logout');



Route::middleware(['isLoggedin'])->group (function() {

    Route::get('/home', [ProjectController::class, 'index'])->name('home');

});
