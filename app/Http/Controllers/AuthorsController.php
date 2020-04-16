<?php

namespace App\Http\Controllers;

use App\Author;
use Illuminate\Http\Request;

class AuthorsController extends Controller
{
    public function index()
    {
        $authors = Author::all();

        return view('layouts.authors', compact('authors'));
    }

    public function store()
    {
        return redirect()->back();
    }
}
