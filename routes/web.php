<?php

use App\Models\Post;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Route;

use App\Http\Controllers\LoginController;
use App\Http\Controllers\PostController;
use App\Models\Category;
use App\Models\User;


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
    return view('home', ['title' => 'home']);
});

Route::get('/about', function () {
    return view('about', [
        'title' => 'about',
        'name' => 'SMAIT Asy-Syukriyyah',
        'image' => 'logo1.png'
    ]);
});

Route::get('/books', [PostController::class,'index']);
// halaman single post
Route::get('posts/{slug}', [PostController::class,'show']);

Route::get('/categories', function() {
    return view('/books/categories', [
        'title' => 'Category',
        'categories' => Category::all()
    ]);
});

Route::get('/categories/{category:slug}', function (Category $category) {
    return view('/books/posts', [
        'title' => "Post By Category : $category->name",
        'posts' => $category->posts->load('author','category'),
    ]);
});

Route::get('/authors/{author:username}', function (User $author) {
    return view('/books/posts', [
        'title'=> "Posts By Author : $author->name",
        'posts' => $author->posts->load('author', 'category'),
    ]);
});

// Route::get('/login', [LoginController::class, 'index']);
