<?php

namespace App\Http\Controllers;

use App\Article;

class BlogController extends Controller
{
    public function index()
    {
        $articles = Article::all();

        return view('layouts.blog', compact('articles'));
    }

    public function show($slug)
    {
        $article = Article::findBySlugOrFail($slug);

        return view('layouts.article', compact('article'));
    }
}
