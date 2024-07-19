<?php

namespace App\Listeners;

use App\Events\ArticleCreated;
use App\Models\User;
use App\Notifications\NewPost;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Queue\InteractsWithQueue;

class SendArticleCreatedNotification implements ShouldQueue
{
    /**
     * Create the event listener.
     */
    public function __construct()
    {
        //
    }

    /**
     * Handle the event.
     */
    public function handle(ArticleCreated $event): void
    {
        foreach (User::whereNot('id', $event->article->iser_id)->cursor() as $user) {
            $user->notify(new NewPost($event->article));
        }
    }
}
