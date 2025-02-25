<?php

namespace App\Providers;

use Illuminate\Foundation\Support\Providers\AuthServiceProvider as ServiceProvider;
use Illuminate\Support\Facades\Validator;

class AuthServiceProvider extends ServiceProvider
{
    /**
     * The policy mappings for the application.
     *
     * @var array
     */
    protected $policies = [
        // 'App\Models\Model' => 'App\Policies\ModelPolicy',
    ];
    private $allowedDomains = [
        '@fau.edu'
    ];

    /**
     * Register any authentication / authorization services.
     *
     * @return void
     */
    public function boot()
    {
        $this->registerPolicies();

        Validator::extendImplicit('allowed_domain', function($attribute, $value, $parameters, $validator) {
            return in_array(explode('@', $value)[1], $this->allowedDomains);
        }, 'Email must end with @fau.edu');

        //
    }
}
