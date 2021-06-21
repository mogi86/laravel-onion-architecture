<?php

namespace App\Providers;

use App\Domain\Repositories\TaskRepository;
use App\Infrastructure\MySQL\TaskMySQL;
use Illuminate\Support\ServiceProvider;
use App\Infrastructure\ExternalAPI\TaskExternalAPI;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
//        $this->app->bind(
//            TaskRepository::class,
//            TaskMySQL::class
//        );

        $this->app->bind(
            TaskRepository::class,
            TaskExternalAPI::class
        );
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
