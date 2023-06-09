<?php

namespace App\Providers;

// use Illuminate\Support\Facades\Gate;
use Illuminate\Foundation\Support\Providers\AuthServiceProvider as ServiceProvider;
use Illuminate\Support\Facades\Gate;

class AuthServiceProvider extends ServiceProvider
{
    /**
     * The model to policy mappings for the application.
     *
     * @var array<class-string, class-string>
     */
    protected $policies = [
        // 'App\Models\Model' => 'App\Policies\ModelPolicy',
    ];

    /**
     * Register any authentication / authorization services.
     */
    public function boot(): void
    {
        $this->registerPolicies();

        // Gate::define('access-admin', function ($user) {
        //     return $user->hasRole('admin');
        // });

        // Gate::define('access-supplier', function ($user) {
        //     return $user->hasRole('supplier');
        // });

        // Gate::define('access-buyer', function ($user) {
        //     return $user->hasRole('buyer');
        // });

        // Define more gates for other roles
    }
}
