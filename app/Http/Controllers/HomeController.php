<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Country;
use App\Models\Message;
use App\Models\Post;
use App\Models\Tag;
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

//        Message::query()->create([
//            'title' => 'Message 12',
//            'slug' => 'Message-12',
//            'content' => 'Message-12 content',
//            'category_id' => 5,
//        ]);

//        $category = Category::query()->findOrFail(5);
//
//        $category->messages()->save(new Message([
//            'title' => 'Message 13',
//            'slug' => 'Message-13',
//            'content' => 'Message-13 content'
//        ]));

//        $category = Category::query()->findOrFail(5);
//
//        $category->messages()->saveMany([
//            new Message([
//            'title' => 'Message 14',
//            'slug' => 'Message-14',
//            'content' => 'Message-14 content'
//        ]),
//            new Message([
//                'title' => 'Message 15',
//                'slug' => 'Message-15',
//                'content' => 'Message-15 content'
//            ])
//        ]);

        $message = Message::query()->findOrFail(12);

//        $message->tags()->attach([6, 5, 3]);
//        $message->tags()->detach([3]);
//        $message->tags()->sync([6, 5, 3]);

        $message->tags()->toggle([6, 5, 3]);

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
