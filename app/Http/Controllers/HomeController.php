<?php

namespace App\Http\Controllers;

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

//        $cities = DB::table('city')->whereIn('id', [1, 2, 3])->get(['ID', 'Name']);

//        $cities = DB::table('city')->where('Name', 'Like', '%mos%' )->get();

//        $query = DB::table('users')
//            ->whereDate('email_verified_at', '>', '2024-08-11' )
//            ->get();

//        $query = DB::table('city')
//            ->select('city.ID', 'city.Name', 'city.CountryCode', 'country.Name as country_name')
//            ->leftJoin('country', 'city.CountryCode', '=', 'country.Code')
//            ->limit(10)
//            ->offset(10)
//            ->get();

//        $query = DB::table('city')
//            ->selectRaw('sum(Population) as sum_of_population, CountryCode')
//            ->groupBy('CountryCode')
//            ->having('sum_of_population', '>', 5_000_000)
//            ->get();

//        dump(DB::select('select @@sql_mode'));
//
//        DB::statement(
//        "set sql_mode =
//                'STRICT_TRANS_TABLES,NO_ZERO_IN_DATE,NO_ZERO_DATE,ERROR_FOR_DIVISION_BY_ZERO,NO_ENGINE_SUBSTITUTION'"
//        );
//
//        dump(DB::select('select @@sql_mode'));

//        $query = DB::table('city')
//            ->selectRaw('sum(Population) as sum_of_population, CountryCode, Name')
//            ->groupBy('CountryCode')
//            ->having('sum_of_population', '>', 5_000_000)
//            ->get();

//        config()->set('database.connections.mysql.strict', false);
//
//        DB::reconnect();

//        $query = DB::table('users')->insert([
//            [
//                'name' => 'John2 Dou',
//                'email' => 'john2@gmail.com',
//                'password' => 'password'
//            ],
//            [
//                'name' => 'John3 Dou',
//                'email' => 'john3@gmail.com',
//                'password' => 'password'
//            ],
//        ]);

//        $query = DB::table('users')->insertGetId([
//                'name' => 'John4 Dou',
//                'email' => 'john4@gmail.com',
//                'password' => 'password'
//        ]);

//        $query = DB::table('users')
//            ->where('id', '=', 32)
//            ->update([
//            'name' => 'John44 Dou',
//            'email' => 'john44@gmail.com',
//            'password' => 'password44'
//        ]);

//        $query = DB::table('users')->updateOrInsert(
//            ['email' => 'john3@gmail.com'],
//            ['name' => 'John33', 'password' => 'password33']
//        );

//        $query = DB::table('users')->delete(31);
//        dump($query);


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
