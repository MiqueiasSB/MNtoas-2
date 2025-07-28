<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use App\Repositories\Interfaces\TransactionInterface;
use App\Repositories\Eloquent\TransactionRepository;

use App\Repositories\Interfaces\UserInterface;
use App\Repositories\Eloquent\UserRepository;

use App\Repositories\Interfaces\ClientInterface;
use App\Repositories\Eloquent\ClientRepository;

use App\Repositories\Interfaces\CategoryTransactionInterface;
use App\Repositories\Eloquent\CategoryTransactionRepository;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {

        $this->app->bind(UserInterface::class, UserRepository::class);
        $this->app->bind(ClientInterface::class, ClientRepository::class);
        $this->app->bind(CategoryTransactionInterface::class, CategoryTransactionRepository::class);
        $this->app->bind(TransactionInterface::class, TransactionRepository::class);

    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        //
    }
}
