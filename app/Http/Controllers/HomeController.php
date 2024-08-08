<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\View;

class HomeController extends Controller
{
    public function index(): \Illuminate\View\View
    {
        $users = json_decode(file_get_contents('https://jsonplaceholder.typicode.com/users'), true);

        return view('home.index', compact('users'));
    }

    public function show(): \Illuminate\View\View
    {
        return view('home.show', [
            'title' => 'Show page'
        ]);
    }

    public function contact(): \Illuminate\View\View
    {

        return view('home.contact', [
            'title' => 'Contact page',
            'description' => 'Contact page description'
        ]);
    }
}
