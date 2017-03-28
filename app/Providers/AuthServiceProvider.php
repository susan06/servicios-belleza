<?php

namespace App\Providers;

use Illuminate\Support\Facades\Gate;
use Illuminate\Foundation\Support\Providers\AuthServiceProvider as ServiceProvider;

class AuthServiceProvider extends ServiceProvider
{
    /**
     * The policy mappings for the application.
     *
     * @var array
     */
    protected $policies = [
        'App\Model' => 'App\Policies\ModelPolicy',
    ];

    /**
     * Register any authentication / authorization services.
     *
     * @return void
     */
    public function boot()
    {
        $this->registerPolicies();

        Gate::define('permission', function ($user, $permission, $permissions = null) {

            if (is_null($permissions)) {
                $permissions = \Session::get('permissions');

            }
            foreach ($permissions as $item) {
                if ($item == $permission) {
                    return true;
                }
            }
        });
    }
}
