<?php

namespace App\Http\Controllers;

use App\Models\Message;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;

class MessageController extends Controller
{
    // для показа формы
    public function create()
    {
        return view('messages.create', ['title' => 'Create a message']);
    }

    // для сохранения данных из формы
    public function store(Request $request): RedirectResponse
    {
        $validated = $request->validate([
            'title' => ['required', 'max:100'],
            'slug' => ['required', 'unique:messages', 'max:255'],
            'content' => ['required'],
            'category_id' => ['required', 'exists:categories,id']
        ]);

        Message::query()->create($request->all());

        return redirect()->route('messages.create')
            ->with('success', 'Message ' . $request->title . ' has been created!');
    }
}
