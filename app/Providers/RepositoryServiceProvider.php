<?php

namespace App\Providers;

use App\Repositories\Admin\AdminRepoitory;
use App\Repositories\Admin\AdminRepositoryInterface;
use Illuminate\Support\ServiceProvider;

class RepositoryServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     */
    public function register(): void
    {
        //
    }

    /**
     * Bootstrap services.
     */
    public function boot(): void
    {
        $this->app->bind(AdminRepositoryInterface::class, AdminRepoitory::class);
    }
}
