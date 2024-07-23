<?php

namespace App\Http\Controllers\Test;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function index(): string
    {
        return 'Test posts list';
    }

    public function create(): string
    {
        return 'Test post create';
    }

    public function store(): string
    {
        return 'Test post store';
    }

    public function show($id): string
    {
        return 'Test post show id - ' . $id;
    }

    public function edit($id): string
    {
        return 'Test post edit id - ' . $id;
    }

    public function update($id): string
    {
        return 'Test post update id - ' . $id;
    }

    public function destroy($id): string
    {
        return 'Test post destroy id - ' . $id;
    }
}
