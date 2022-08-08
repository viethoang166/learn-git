<?php

namespace App\Providers;

use App\Repository\BaseRepositoryInterface;
use App\Repository\Eloquent\BaseRepository;
use App\Repository\PermissionGroupRepositoryInterface;
use Carbon\Laravel\ServiceProvider;
use App\Repository\Eloquent\PermissionGroupRepository;

class RepositoryServiceProvider extends ServiceProvider
{
    public function register()
    {
        $this->app->bind(BaseRepositoryInterface::class, BaseRepository::class);
        $this->app->bind(PermissionGroupRepositoryInterface::class, PermissionGroupRepository::class);
    }

    public function boot()
    {
        //
    }
}
