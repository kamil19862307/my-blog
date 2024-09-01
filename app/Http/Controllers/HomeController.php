<?php

namespace App\Http\Controllers;

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
        $users = [];

        $users = DB::table('users')->get(['name', 'id', 'email']);

//    $countries = Country::query()->find('AFG')->toArray();


//    dump('Count ' . Country::query()->count());
//    dump('Max ' . Country::query()->where('Population', '>', 1_000_000)->count());
//    dump('Max ' . Country::query()->max('Population'));
//    dump('Min ' . Country::query()->min('Population'));
//    dump('Avg ' . Country::query()->avg('Population'));

//    $countries = Country::query()->find('AFG2');
//        if(!$countries){
//            abort(404);
//        }


//        $country = Country::query()->findOrFail('AFG');
//        dump($country);


//        $message = new Message();
//        $message->title = 'Message 1';
//        $message->slug = 'message-1';
//        $message->content = 'Message 1 content';
//        $message->category_id = 3;
//        $message->save();
//        $message->id();
//
//        dump($message->save());

//        Message::query()->create([
//            'title' => 'Message 2',
//            'slug' => 'message-2',
//            'content' => 'message 2 content',
//            'category_id' => 5,
//        ]);

//        $message = Message::query()->findOrFail(6);
//        dump($message->delete());

        dump(Message::destroy(4, 5));

        return view('home.index', compact('users'));
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
