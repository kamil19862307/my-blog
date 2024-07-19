<?php

namespace App\Http\Controllers;

use App\Http\Requests\ArticleFormRequest;
use App\Models\Article;
use App\Models\Post;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Gate;
use Illuminate\View\View;

class ArticleController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(): View
    {
        $posts = Article::with('user')
            ->latest()
            ->get();

        return view('articles.index', [
            'posts' => $posts
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {

    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(ArticleFormRequest $request): RedirectResponse
    {

        $validatedData = $request->validated();
        $user = Auth::user();
        $article = new Article();
        $article->title = $validatedData['title'];
        $article->message = $validatedData['message'];
        $user->articles()->save($article);

        return redirect()->route('articles.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(Post $post)
    {
        return view('articles.show', [
            'post' => $post
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Article $article): View
    {
        Gate::authorize('update', $article);

        return view('articles.edit', [
            'post' => $article
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Post $post): RedirectResponse
    {
        Gate::authorize('update', $post);

        $validated = $request->validate([
            'title' => 'required|string',
            'message' => 'required|string'
        ]);

        $post->update($validated);

        return redirect()->route('posts.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Post $post): RedirectResponse
    {
        Gate::authorize('delete', $post);

        $post->delete();

        return redirect()->route('posts.index');
    }
}
