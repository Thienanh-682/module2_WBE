<?php

namespace App\Providers;

use App\Http\Repositories\BlogRepositoryInterface;
use App\Http\Repositories\eloquent\BlogEloquentRepository;
use App\Http\Services\BlogServicesInterface;
use App\Http\Services\impl\BlogServices;
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
        $this->app->singleton(BlogServicesInterface::class,BlogServices::class);
        $this->app->singleton(BlogRepositoryInterface::class,BlogEloquentRepository::class);
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        //
    }
}
