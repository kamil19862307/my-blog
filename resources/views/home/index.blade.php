@extends('layouts.main')

@section('title', $title ?? 'Main Page Title')

@section('description')
    <meta name="description" content="My blog">
@endsection

@section('content')
    <h1>Home page</h1>

    @forelse($users as $user)
        <span @class(['text-danger' => $loop->odd])>
            {{ $user->id }}. {{ $user->name }} - {{ $user->email }} <br>
        </span>

    @empty
        {{ 'No users' }}<br>
    @endforelse


{{--    Всего пользователей: {{ $cnt_users[0]->cnt }}--}}
{{--    Всего пользователей: {{ $cnt_users }}--}}

@endsection

