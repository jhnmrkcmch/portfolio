<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\View;
use App\Models\Card;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\URL;


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
        View::composer(['about.team', 'adminPages.cards'], function ($view) {
            $view->with('cards', Card::all());
        });

        Route::middleware('api')
            ->prefix('api')
            ->group(base_path('routes/api.php'));
        
        if (env('APP_ENV') === 'production') {
            URL::forceScheme('https');
        }

    }
}
