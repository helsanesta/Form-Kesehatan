<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Article;

class ArticleController extends Controller
{
    public function index() {
        return view('article', [
            "title" => "Halaman Artikel",
            // "name" => "Helsa Nesta Dhaifullah",
            // "email" => "helsa.205025@mhs.its.ac.id",
            "articles" => Article::latest()->get()
        ]);
    }

    public function contents(Article $article){
        return view('konten', [
            "title" => "Single Post",
            "article" => $article
        ]);
    }
}
