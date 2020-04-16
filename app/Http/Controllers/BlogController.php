<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

class BlogController extends Controller
{
    public function index()
    {
        return view('layouts.blog');
    }

    public function show()
    {
        return view('layouts.article');
    }
}
