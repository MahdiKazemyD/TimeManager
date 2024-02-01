<?php

namespace App\Providers;

use App\Repositories\Category\CategoryRepository;
use App\Repositories\Category\CategoryRepositoryInterface;
use App\Repositories\Day\DayRepository;
use App\Repositories\Day\DayRepositoryInterface;
use App\Repositories\Month\MonthRepository;
use App\Repositories\Month\MonthRepositoryInterface;
use App\Repositories\Report\ReportRepository;
use App\Repositories\Report\ReportRepositoryInterface;
use App\Repositories\Target\TargetRepository;
use App\Repositories\Target\TargetRepositoryInterface;
use App\Repositories\Task\TaskRepository;
use App\Repositories\Task\TaskRepositoryInterface;
use App\Repositories\User\UserRepository;
use App\Repositories\User\UserRepositoryInterface;
use App\Repositories\Year\YearRepository;
use App\Repositories\Year\YearRepositoryInterface;
use Illuminate\Support\ServiceProvider;

class RepositoryServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     */
    public function register(): void
    {
        $this->app->bind(CategoryRepositoryInterface::class, CategoryRepository::class);
        $this->app->bind(UserRepositoryInterface::class, UserRepository::class);
        $this->app->bind(YearRepositoryInterface::class, YearRepository::class);
        $this->app->bind(MonthRepositoryInterface::class, MonthRepository::class);
        $this->app->bind(DayRepositoryInterface::class, DayRepository::class);
        $this->app->bind(TargetRepositoryInterface::class, TargetRepository::class);
        $this->app->bind(TaskRepositoryInterface::class, TaskRepository::class);
        $this->app->bind(ReportRepositoryInterface::class, ReportRepository::class);
    }

    /**
     * Bootstrap services.
     */
    public function boot(): void
    {
        //
    }
}
