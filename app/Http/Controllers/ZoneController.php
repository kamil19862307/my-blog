<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\View;

class ZoneController extends Controller
{
    public function index(): \Illuminate\View\View
    {
        return view('zone.index', [
            'title' => 'Zone main page'
        ]);
    }
}
