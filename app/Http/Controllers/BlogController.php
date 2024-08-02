<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\View;

class BlogController extends Controller
{
    public function index(): \Illuminate\View\View
    {
        return view('blog.index', [
            'title' => 'Blog main page'
        ]);
    }
}
