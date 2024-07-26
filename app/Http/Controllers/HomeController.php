<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\View;

class HomeController extends Controller
{
    public function index(): \Illuminate\View\View
    {
        return View::make('home.index', [
            'name' => 'John',
            'age' => 35,
            'title' => 'Home page'
        ]);
    }

    public function show(): \Illuminate\View\View
    {
        $name = 'Ivan';
        $age = 38;
        $title = 'Show page';

        return view('home.show', compact('name', 'age', 'title'));
    }

    public function contact(): \Illuminate\View\View
    {
        $title = 'Contact page';

        return view('home.contact')
            ->with(['title' => $title]);
    }
}
