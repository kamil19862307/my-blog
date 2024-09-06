@extends('layouts.main')

@section('title', $title ?? 'Main Page Title')

@section('description')
    <meta name="description" content="My blog">
@endsection

@section('content')
    <h1>Home page</h1>

{{--    @foreach($categories as $category)--}}
{{--        {{ $category->title }} <br>--}}
{{--        @foreach($category->messages as $message)--}}
{{--            {{ $message->title }} <br>--}}
{{--            {{ $message->slug }} <br>--}}
{{--            {{ $message->content }} <br>--}}
{{--        @endforeach--}}
{{--        <hr>--}}
{{--    @endforeach--}}

{{--    @foreach($categories as $category)--}}
{{--        {{ $category->title }}  ({{ $category->message_count }})<br>--}}
{{--    @endforeach--}}

@endsection

