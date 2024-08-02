@extends('layouts.main')

@section('title', $title ?? 'Main Page Title')

@section('content')

    <h1>Contact page</h1>

@endsection

@section('navbar')
    @parent
    <div class="container">
        Additional content
    </div>
@endsection
