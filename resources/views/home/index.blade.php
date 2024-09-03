@extends('layouts.main')

@section('title', $title ?? 'Main Page Title')

@section('description')
    <meta name="description" content="My blog">
@endsection

@section('content')
    <h1>Home page</h1>

    @php
        /**
        * @var \Illuminate\Support\Collection $products
        * @var  \App\Models\Message $message
        */
    @endphp

    {{--    @foreach($products->chunk(3) as $chunk)--}}
    {{--        <div class="row my-4">--}}
    {{--            @foreach($chunk as $product)--}}
    {{--                <div class="col-md-3">--}}
    {{--                    {{ $product['title'] }}--}}
    {{--                </div>--}}
    {{--            @endforeach--}}
    {{--        </div>--}}
    {{--    @endforeach--}}

    @foreach($messages as $message)
        {{ $message->title }} | {{ $message->isActive() }}<br>
    @endforeach

    <hr>

    @foreach($messages2 as $message)
        {{ $message->title }}<br>
    @endforeach

    <hr>
    @foreach($messages3 as $message)
        {{ $message->title }}<br>
    @endforeach

    <hr>

@endsection

