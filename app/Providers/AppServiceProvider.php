<?php

namespace App\Providers;

use App\Models\PageView;
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
        View::composer('user.components.footer', function ($view) {
            $pageViews = PageView::where('id', 1)->value('count');
            $view->with('pageViews', $pageViews);
        });
    }
}
