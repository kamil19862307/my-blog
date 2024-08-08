@extends('layouts.main')

@section('title', $title ?? 'Main Page Title')

@section('description')
    <meta name="description" content="My blog">
@endsection

@section('content')
    <h1>Home page</h1>

    @forelse($users as $user)
        <span @class(['text-danger' => $loop->odd])>
            {{ $user['name'] }} <br>
        </span>

    @empty
        {{ 'No users' }}<br>
    @endforelse

    @for($i = 1; $i <= 10; $i++)
        {{ $i }} <br>
    @endfor
@endsection

