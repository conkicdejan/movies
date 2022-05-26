<?php

namespace App\Providers;

use App\Models\Movie;
use Illuminate\Support\Facades\View;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        $moviesLastFive = Movie::latest()->take(5)->get();
        View::share('movieLastFive', $moviesLastFive);
    }
}
