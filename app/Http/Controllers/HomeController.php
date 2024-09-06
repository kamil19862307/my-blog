<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Country;
use App\Models\Message;
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
//        $category = Category::query()->findOrFail(3);
//
//        dump($category);
//
//        $messages = $category->messages;
//
//        dump($messages->toArray());

//        $message = Message::query()->findOrFail(3);
//        dump($message->category);
//        dump($message->category->title);

//        DB::listen(fn($e) => dump($e->toRawSql()));

//        $categories = Category::all();
//        $categories = Category::with('messages')->get();

//        dump($categories->toArray());

//        dump($categories);

//        foreach ($categories as $category) {
//            echo "{$category->title} <br>";
//
//            foreach ($category->messages as $message) {
//                echo "{$message->title} <br>";
//            }
//        }


//        $categories = Category::query()->withCount('message')->get();

        $category = Category::query()->findOrFail(3);

//        dump($category->messages()->where('id', '<>', 1)->orderBy('id', 'desc')->get());

        dump($category->messages->where('id', '<>', 1));

        return view('home.index');
    }


    public function store(Request $request)
    {
//        var_dump($request->all('title', 'content'));
//        var_dump($request->title);

        dump(Message::query()->create($request->all()));
    }

    public function update(Request $request)
    {
//        $message = Message::query()->find($request->id);
//
//        $message->title = $request->title;
//        $message->content = $request->content;
//        $message->slug = $request->slug;
//        $message->category_id = $request->category_id;
//        $message->status = $request->status;
//        $message->save();

//        $message = Message::query()->findOrFail($request->id);
//        $message->update($request->all());

        var_dump(Message::query()
            ->where('id', $request->id)
            ->update($request->all())
        );
        return 'OK';
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
