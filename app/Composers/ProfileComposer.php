<?php

namespace App\Composers;

use Illuminate\View\View;

class ProfileComposer
{
    public function compose(View $view): void
    {
        // Тут логика
        $count = 100;

        $view->with('count', $count);
    }
}
