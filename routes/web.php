<?php

use Illuminate\Support\Facades\Route;
use App\Models\Article;
use App\Models\Author;

Route::get('/', function () {
    return view('home', [
        'article' => Article::first()
    ]);
});
Route::get('/about', function () {
    return view('about');
});
Route::get('/articles', function () {
    return view('articles', [
        'articles' => Article::all()
    ]);
});
Route::get('/articles/{id}', function ($id) {
$article = Article::find($id);
    return view('article', ['article' => $article]);

});
Route::get('/authors', function () {
    return view('authors', [
        'authors' => Author::all()
    ]);
});
Route::get('/authors/{id}', function ($id) {
$author = Author::find($id);
$articles = Article::all();
    return view('author', ['author' => $author, 'articles' => $articles]);

});
