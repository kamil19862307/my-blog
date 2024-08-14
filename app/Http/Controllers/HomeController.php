<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\View;

class HomeController extends Controller
{
    public function index(): \Illuminate\View\View
    {
//        $users = json_decode(file_get_contents('https://jsonplaceholder.typicode.com/users'), true);
//        $users = [];

        // Позиционные плэйсхолдеры
//        $users = DB::select('select id, name, email from users where id > ? and name != ?', [1, 'kamil']);

        $data = [
            'id' => 1,
            'name' => 'Isabel'
        ];

//        $cnt_users = DB::select('select count(*) as cnt from users');

        $cnt_users = DB::scalar('select count(*) as cnt from users');

        // Именованные плэйсхолдеры
        $users = DB::select(
            'select id, name, email from users where id > :id and name != :name',
            $data
        );

        // Заполнение полей
//        DB::insert('insert into users (name, email, password) values (?, ?, ?)',
//            ['John Edgard', 'john@mail.com', 'password']);

        // Именованные плэйсхолдеры
//        DB::insert("insert into users (name, email, password) values (:name, :email, :password)", [
//            'email' => 'johnTrav@mail.com',
//            'name' => 'John Travolta',
//            'password' => 'password'
//            ]
//        );

//        $id = 17;
//
//        $password = Hash::make('password');
//
//        DB::update('update users set password = :password where id = :id', [
//            ':password' => $password,
//            'id' => $id
//            ]);

//        DB::update('update users set email_verified_at = :cur_time where id = :id', [
//            ':cur_time' => now(),
//            'id' => 17
//            ]);

//        DB::update('update users set email_verified_at = :cur_time where id = :id', [
//            ':cur_time' => date('Y-m-d, H:i:s'),
//            'id' => 18
//            ]);

//        DB::delete('delete from users where id = :id', ['id' => 12]);

//        try {
//            DB::transaction(function (){
//                DB::insert('insert into users (name, email, password) values (?, ?, ?)',
//                    ['Edgard Poo', 'poo@mail.com', 'password']);
//
//                DB::insert('insert into users (name, email, password) values (?, ?, ?)',
//                    ['Edgard Poo', 'poo2@mail.com', 'password']);
//            });
//
//        }catch (\Exception $exception){
//            dump($exception->getMessage());
//        }

//        try {
//            DB::beginTransaction();
//
//                DB::insert('insert into users (name, email, password) values (?, ?, ?)',
//                    ['Edgard Poo', 'poo@mail.com', 'password']);
//
//                DB::insert('insert into users (name, email, password) values (?, ?, ?)',
//                    ['Edgard Poo', 'poo@mail.com', 'password']);
//
//                DB::commit();
//
//        }catch (\Exception $exception){
//            DB::rollBack();
//
//            dump($exception->getMessage());
//        }


        return view('home.index', compact('users', 'cnt_users'));
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
