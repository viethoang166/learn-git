<?php

namespace App\Providers;

use App\Repository\BaseRepositoryInterface;
use App\Repository\Eloquent\BaseRepository;
use App\Repository\PermissionGroupRepositoryInterface;
use Carbon\Laravel\ServiceProvider;
use App\Repository\Eloquent\PermissionGroupRepository;
use App\Repository\Eloquent\PermissionRepository;
use App\Repository\PermissionRepositoryInterface;

class RepositoryServiceProvider extends ServiceProvider
{
    public function register()
    {
        $this->app->bind(BaseRepositoryInterface::class, BaseRepository::class);
        $this->app->bind(PermissionGroupRepositoryInterface::class, PermissionGroupRepository::class);
        $this->app->bind(PermissionRepositoryInterface::class, PermissionRepository::class);
    }

    public function boot()
    {
        //
    }
}
