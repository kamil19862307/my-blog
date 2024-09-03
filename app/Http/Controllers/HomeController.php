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
        $messages = Message::query()->get();

//        dump($messages);

        $messages2 = DB::table('messages')->get();

//        dump($messages2);

        $messages3 = DB::select('select * from messages');
//
//        dump($messages3);

//        $data = [1,2,3,4,5,6];
//
//        $data = collect($data);
//
//        dump($data->toArray());

//        $products = collect([
//            ['title' => 'Product 1', 'Price' => 10],
//            ['title' => 'Product 2', 'Price' => 20],
//            ['title' => 'Product 3', 'Price' => 30],
//            ['title' => 'Product 4', 'Price' => 40],
//            ['title' => 'Product 5', 'Price' => 50],
//            ['title' => 'Product 6', 'Price' => 60],
//            ['title' => 'Product 7', 'Price' => 70],
//            ['title' => 'Product 8', 'Price' => 10],
//            ['title' => 'Product 9', 'Price' => 20],
//            ['title' => 'Product 10', 'Price' => 30],
//            ['title' => 'Product 11', 'Price' => 40],
//            ['title' => 'Product 12', 'Price' => 50],
//            ['title' => 'Product 13', 'Price' => 60],
//            ['title' => 'Product 14', 'Price' => 70],
//        ]);
//
//        dump($products);
//        dump($products->avg('Price'));
//        dump($products->min('Price'));
//        dump($products->max('Price'));
//        dump($products->sum('Price'));
//
//        $filtered = $products->filter(function ($value, $key){
//            return $value['Price'] > 30;
//        });
//
//        dump($filtered);

    $countries = Country::query()->limit(10)->get(['Name', 'Continent', 'Population']);

    $filtered = $countries->filter(function ($value, $key){
        return $value['Population'] > 1_000_000;
    });

    dump($filtered);
    dump($filtered->max(['Population']));
    dump($filtered->min(['Population']));

    dump($countries->countBy(function (Country $country){
        return $country->Continent;
    }));

        return view('home.index', compact('messages', 'messages2', 'messages3'));
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
