<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Validator;

class ValidationServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        Validator::extend('UserExists', function($attribute, $value, $parameters, $validator) {
            // Todo: Better way of getting registered users
            $users = app('sentinel')->getUserRepository()->findUsersByRole('User');
            return !$users->contains('email', $value);
        });
    }

    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }
}
