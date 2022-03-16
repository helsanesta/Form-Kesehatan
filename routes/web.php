<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\FormController;
use App\Http\Controllers\ArticleController;
use App\Models\Category;
use App\Models\User;
use App\Models\Article;

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

Route::get('/form', [FormController::class, 'input']);
Route::post('/valid', [FormController::class, 'proses']);

Route::get('/article', [ArticleController::class, 'index']);
Route::get('/article/{article:slug}', [ArticleController::class, 'contents']);

Route::get('/categories', function () {
    return view('categories', [
        'title' =>'Article Categories',
        'categories' => Category::all()
    ]);
});

Route::get('/categories/{category:slug}', function (Category $category) {
    return view('category', [
        'title' => $category->name,
        'articles' => $category->articles,
        'category' => $category->name
    ]);
});

Route::get('/author/{author:username}', function (User $author) {
    return view('article', [
        'title' => "User Articles",
        'articles' => $author->articles,
    ]);
});


