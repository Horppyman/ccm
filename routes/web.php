<?php

use Illuminate\Support\Facades\Route;


use App\Http\Controllers\AuthController;
use App\Http\Controllers\PageController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\BookController;
use App\Http\Controllers\SermonController;




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

    Route::get('/dashboard', [AdminController::class, 'index'])->name('dashboard');


    /*
    ----------------------------------------------------------------
    | Category Routes
    ----------------------------------------------------------------
    */
    Route::get('/category', [CategoryController::class, 'index'])
    ->name('category');

    Route::get('/category/add', [CategoryController::class, 'create'])
    ->name('addcategory');

    Route::post('category/store', [CategoryController::class, 'store'])
    ->name('storecategory');

    Route::get('/category/delete/{id}', [CategoryController::class, 'destroy'])
    ->name('deletecategory');




//     Route::get('/category/edit/{id}', [CategoryController::class, 'edit'])
//     ->name('editcategory');

//     Route::post('/category/store', [CategoryController::class, 'update'])
//     ->name('storecategory');


//     /*
//     ----------------------------------------------------------------
//     | Book Routes
//     ----------------------------------------------------------------
//     */
    Route::get('/book', [BookController::class, 'index'])
    ->name('book');

    Route::get('/book/add', [BookController::class, 'create'])
    ->name('addbook');

    Route::post('/book/store', [BookController::class, 'store'])
    ->name('storebook');

    Route::get('/book/edit/{id}', [BookController::class, 'edit'])
    ->name('editbook');

    Route::post('/book/store/{id}', [BookController::class, 'update'])
    ->name('updatebook');

    Route::get('/book/delete/{id}', [BookController::class, 'destroy'])
    ->name('deletebook');



//     /*
//     ----------------------------------------------------------------
//     | Sermon Routes
//     ----------------------------------------------------------------
//     */
    Route::get('/sermon', [SermonController::class, 'index'])
    ->name('sermon');

    Route::get('/sermon/add', [SermonController::class, 'create'])
    ->name('addsermon');

    Route::post('/sermon/store', [SermonController::class, 'store'])
    ->name('storesermon');

    Route::get('/sermon/edit/{id}', [SermonController::class, 'edit'])
    ->name('editsermon');

    Route::post('/sermon/store/{id}', [SermonController::class, 'update'])
    ->name('updatesermon');

    Route::get('/sermon/delete/{id}', [SermonController::class, 'destroy'])
    ->name('deletesermon');




});
