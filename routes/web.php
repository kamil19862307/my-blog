<?php

use App\Http\Controllers\ArticleController;
use App\Http\Controllers\BlogController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\MainController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\Test\ProductController;
use App\Http\Controllers\Test\ResourceController;
use App\Http\Controllers\ZoneController;
use Illuminate\Foundation\Http\Middleware\VerifyCsrfToken;
use Illuminate\Support\Facades\Route;

//Route::get('/', function () {
//    return view('welcome');
//});

Route::get('/', [HomeController::class, 'index'])->name('home.index');
Route::get('/show', [HomeController::class, 'show'])->name('home.show');
Route::get('/contact', [HomeController::class, 'contact'])->name('home.contact');
Route::post('/store', [HomeController::class, 'store'])->withoutMiddleware(VerifyCsrfToken::class);
Route::post('/update', [HomeController::class, 'update'])->withoutMiddleware(VerifyCsrfToken::class);

Route::prefix('blog')->name('blog.')->group(function (){
    Route::get('/', [BlogController::class, 'index'])->name('home');
    Route::get('/blog-single', [BlogController::class, 'blogSingle'])->name('blogSingle');
});

Route::prefix('zone')->name('zone.')->group(function (){
    Route::get('/', [ZoneController::class, 'index'])->name('home');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

Route::resource('posts', PostController::class)
    ->only(['index', 'show', 'store', 'edit', 'update', 'destroy'])
    ->middleware(['auth', 'verified']);

Route::resource('articles', ArticleController::class)
    ->only(['index', 'show', 'store', 'edit', 'update', 'destroy'])
    ->middleware(['auth', 'verified']);

Route::get('/invoke', MainController::class);

Route::prefix('test')->name('test.')->group(function (){
    Route::get('/posts', [ProductController::class, 'index'])->name('posts.index');
    Route::get('/posts/create', [ProductController::class, 'create'])->name('posts.create');
    Route::post('/posts', [ProductController::class, 'store'])->name('posts.store')
        ->withoutMiddleware(VerifyCsrfToken::class);
    Route::get('/posts/{id}', [ProductController::class, 'show'])->name('posts.show');
    Route::get('/posts/{id}/edit', [ProductController::class, 'edit'])->name('posts.edit');
    Route::put('/posts/{id}', [ProductController::class, 'update'])->name('posts.update')
        ->withoutMiddleware(VerifyCsrfToken::class);
    Route::delete('/posts/{id}', [ProductController::class, 'destroy'])->name('posts.destroy')
        ->withoutMiddleware(VerifyCsrfToken::class);
});

Route::resource('resource', ResourceController::class)
    ->only(['index', 'show'])
    ->names(['show' => 'resource.view']);

require __DIR__.'/auth.php';
