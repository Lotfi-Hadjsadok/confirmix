<?php

namespace App\Providers;

use App\Models\Order;
use App\Models\User;
use Illuminate\Support\Facades\Gate;
use Illuminate\Database\Eloquent\Model;
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
        Gate::define('edit-order', function (User $user, Order $order) {
            return ($user->role === 'employee' && $user->employee->id === $order->employee->id)
                || ($user->role === 'employer' && $user->employer->id === $order->employer->id);
        });
    }
}
