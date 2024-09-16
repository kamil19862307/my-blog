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
//        $message = Message::query()->findOrFail(2);

//        dump($message);

//        $tags = $message->tags;
//
//        foreach ($tags as $tag) {
//            echo "{$tag->title} | {$tag->slug} | {$tag->pivot->created_at}<br>";
//        }

//        $tags = Tag::query()->findOrFail(4);
//
//        dump($tags->messages->toArray());

//        $messages = Message::all();
//
//        foreach ($messages as $message) {
//            echo "{$message->title}<br>";
//            foreach ($message->tags as $tag) {
//                echo "{$tag->title}<br>";
//            }
//            echo '<hr>';
//        }

//        $messages = Message::with('tags')->get();
//
//        foreach ($messages as $message) {
//            echo "{$message->title}<br>";
//            foreach ($message->tags as $tag) {
//                echo "{$tag->title}<br>";
//            }
//            echo '<hr>';
//        }

//        dump(Category::query()->findOrFail(6)->latestMessage);

        dump(Category::query()->findOrFail(6)->latestActiveMessage);

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
