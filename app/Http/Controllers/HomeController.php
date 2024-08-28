<?php

namespace App\Http\Controllers;

use App\Models\Country;
use App\Models\Post;
use Illuminate\Http\Request;
use Illuminate\Support\Collection;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\View;
use function Laravel\Prompts\password;

class HomeController extends Controller
{
    public function index(): \Illuminate\View\View
    {
        $users = [];

        $users = DB::table('users')->get(['name', 'id', 'email']);

//        $posts = Post::all();
//        $posts = Post::all()->toArray();
//        $posts = Post::all()->toJson();

//        $posts = Post::first();
//        $posts = Post::query()->first();
//        $posts = Post::query()->find(2);

//        $posts = Post::query()->find(2, ['message', 'title'])->toArray();

//        $countries = Country::all(['Code', 'Name', 'Population'])->toArray();

//        $countries = Country::query()
//            ->where('Population', '>', 100_000_000)
//            ->orderBy('Population', 'desc')
//            ->limit(10)
//            ->get(['Code', 'Name', 'Population'])
//            ->toArray();

//        $countries = Country::query()
//            ->where('Population', '>', 100_000_000)
//            ->orderBy('Population', 'desc')
//            ->limit(10)
//            ->get(['Code', 'Name', 'Population']);

//        return $countries->toJson();
//        return response()->json($countries);

    $countries = Country::query()->first();

    dump($countries->toArray());
    dump($countries->Name);



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
