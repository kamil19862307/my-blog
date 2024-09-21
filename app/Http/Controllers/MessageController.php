<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreMessageRequest;
use App\Models\Message;
use Illuminate\Http\RedirectResponse;

class MessageController extends Controller
{
    // для показа формы
    public function create()
    {
        return view('messages.create', ['title' => 'Create a message']);
    }

    // для сохранения данных из формы
    public function store(StoreMessageRequest $request): RedirectResponse
    {
        Message::query()->create($request->validated());

        return redirect()->route('messages.create')
            ->with('success', 'Message ' . $request->title . ' has been created!');
    }
}
