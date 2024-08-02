<?php

namespace App\Providers;

use App\Composers\ProfileComposer;
use Illuminate\Support\Facades\View;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        //
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
//        $site_name = 'PHPzone';
//
//        View::share('site_name', $site_name);
//
//        View::composer(['home.index', 'home.contact'], ProfileComposer::class);
//
//        view()->composer('home.show', function (\Illuminate\View\View $view){
//
//            // Тут какая-то логика
//            $page_description = 'PHP zone site copy';
//
//            $view->with('page_description', $page_description);
//        });

        // Передаём во все странички из папки home навигационное меню
//        view()->composer('home.*', function (\Illuminate\View\View $view){
//
//            $menu = '<ul>';
//                $menu .= '<li><a href="' . route('home.index') . '">Home</a></li>';
//                $menu .= '<li><a href="' . route('home.show') . '">Show</a></li>';
//                $menu .= '<li><a href="' . route('home.contact') . '">Contact</a></li>';
//            $menu .= '</ul>';
//
//            $view->with('nav_menu', $menu);
//        });
    }
}
