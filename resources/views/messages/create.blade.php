@extends('layouts.main')

@section('title', $title ?? 'Create a new message')

@section('description')
    <meta name="description" content="My blog">
@endsection

@section('content')
    <h1>Create a new message</h1>

    @if(session('success'))
        <div class="alert alert-success">
            {{ session('success') }}
        </div>
    @endif

    @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form action="{{ route('messages.store') }}" method="post">
        @csrf
        <div class="mb-3">
            <label for="category_id" class="form-label">Category</label>
            <select name="category_id"
                    class="form-select @error('category_id') is-invalid @enderror"
                    aria-label="category_id">
                <option selected>Select category</option>
                <option value="3">Category 3</option>
                <option value="5">Category 5</option>
                <option value="6">Category 6</option>
            </select>

            @if($errors->has('category_id'))
                <div id="category_id" class="invalid-feedback">
                    {{ $errors->first('category_id') }}
                </div>
            @endif

        </div>
        <div class="mb-3">
            <label for="title" class="form-label">Title</label>
            <input type="text"
                   name="title"
                   class="form-control @error('title') is-invalid @enderror"
                   id="title"
                   placeholder="Message title"
                   value="{{ old('title') }}"
            >
            @if($errors->has('title'))
                <div id="title" class="invalid-feedback">
                    {{ $errors->first('title') }}
                </div>
            @endif
        </div>
        <div class="mb-3">
            <label for="slug" class="form-label">Slug</label>
            <input type="text"
                   name="slug"
                   class="form-control @error('slug') is-invalid @enderror"
                   id="slug"
                   placeholder="Message slug"
                   value="{{ old('slug') }}"
            >
            @if($errors->has('slug'))
                <div id="slug" class="invalid-feedback">
                    {{ $errors->first('slug') }}
                </div>
            @endif
        </div>
        <div class="mb-3">
            <label for="content" class="form-label">Content textarea</label>
            <textarea class="form-control" name="content" id="content" rows="3"></textarea>
        </div>
        <button type="submit" class="btn btn-primary">Create</button>
    </form>

@endsection
