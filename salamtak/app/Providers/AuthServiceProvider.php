<?php

namespace App\Providers;

use Illuminate\Support\Facades\Gate;

// use Illuminate\Auth\Access\Gate;
use Illuminate\Foundation\Support\Providers\AuthServiceProvider as ServiceProvider;

class AuthServiceProvider extends ServiceProvider
{
    /**
     * The model to policy mappings for the application.
     *
     * @var array<class-string, class-string>
     */
    protected $policies = [
        // 'App\Models\Dashboard' => 'App\Policies\DashboardPolicy',
        ];
    /**
     * Register any authentication / authorization services.
     *
     * @return void
     */
    public function boot()
    {
        $this->registerPolicies();

        // Define gates for each role
        // Gate::define('access-admin-dashboard', 'App\Policies\DashboardPolicy@admin');
        // Gate::define('access-hospital-dashboard', 'App\Policies\DashboardPolicy@hospital');
        // Gate::define('access-doctor-dashboard', 'App\Policies\DashboardPolicy@doctor');
        //
    }
}
