<?php

namespace App\Http\Controllers;

use App\About;
use Illuminate\Http\Request;

class AboutController extends Controller
{
    public function index()
    {
        $article = About::first();

        return view('layouts.about', compact('article'));
    }
}
