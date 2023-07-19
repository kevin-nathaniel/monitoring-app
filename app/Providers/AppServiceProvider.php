<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use App\Models\User;
use Illuminate\Support\Facades\Gate;

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
        Gate::define('super', function(User $user) {
            return $user->role === 'Super Admin';
        });

        Gate::define('manager', function(User $user) {
            return $user->role === 'Manager';
        });

        Gate::define('senior', function(User $user) {
            return $user->role === 'Senior Manager';
        });

        Gate::define('teknisi', function(User $user) {
            return $user->role === 'Teknisi';
        });

        Gate::define('staff', function(User $user) {
            return $user->role === 'Staff';
        });
    }
}
