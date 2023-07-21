<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BookController;
use App\Http\Controllers\CategorieController;
use App\Http\Controllers\admin\adminBookController;
use App\Http\Controllers\admin\adminCategorieController;

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



Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/allBooks', [App\Http\Controllers\HomeController::class, 'allBooks'])->name('allBooks');
Route::get('/about', function () {
    return view('about');
})->name('about');

Route::get('/searchBook', [App\Http\Controllers\HomeController::class, 'search'])->name('searchBook');
Route::get('/search', function () {
    return view('search');
})->name('search');

Route::get('/book/{id}', [BookController::class, 'show'])->name('showBook');

Route::get('/categorie/{id}', [CategorieController::class, 'show'])->name('showCategorie');



Route::middleware(['admin'])->group(function ()  {

    Route::get('/admin', [adminBookController::class, 'index'])->name('dashbord');

    Route::get('/addBook', [adminBookController::class, 'create'])->name('createBook');

    Route::post('/addBook', [adminBookController::class, 'store'])->name('storeBook');

    Route::get('/updateBook/{id}', [adminBookController::class, 'updateBook'])->name('updateBook');

    Route::post('/updateBook/{id}', [adminBookController::class, 'updatedBook'])->name('updatedBook');

    Route::get('/updateImage/{id}', [adminBookController::class, 'updateImage'])->name('updateImage');

    Route::post('/updateImage/{id}', [adminBookController::class, 'updatedImage'])->name('updatedImage');

    Route::get('/updateContent/{id}', [adminBookController::class, 'updateContent'])->name('updateContent');

    Route::post('/updateContent/{id}', [adminBookController::class, 'updatedContent'])->name('updatedContent');

    Route::get('/addCategorie', [adminCategorieController::class, 'create'])->name('createCategorie');

    Route::post('/addCategorie', [adminCategorieController::class, 'store'])->name('storeCategorie');

    Route::get('/destroyBook/{id}', [adminBookController::class, 'destroy'])->name('destroyBook');

    Route::get('/destroyCategorie/{id}', [adminCategorieController::class, 'destroy'])->name('destroyCategorie');
    
});