<?php

namespace App\Providers;

use App\Repositories\UserRepository;
use Cartalyst\Sentinel\Laravel\SentinelServiceProvider;

class ExtendedSentinelServiceProvider extends SentinelServiceProvider
{

    /**
     * Registers the users.
     *
     * @return void
     */
    protected function registerUsers()
    {
        $this->registerHasher();

        $this->app->singleton('sentinel.users', function ($app) {
            $config = $app['config']->get('cartalyst.sentinel');

            $users        = array_get($config, 'users.model');
            $roles        = array_get($config, 'roles.model');
            $persistences = array_get($config, 'persistences.model');
            $permissions  = array_get($config, 'permissions.class');

            if (class_exists($roles) && method_exists($roles, 'setUsersModel')) {
                forward_static_call_array([$roles, 'setUsersModel'], [$users]);
            }

            if (class_exists($persistences) && method_exists($persistences, 'setUsersModel')) {
                forward_static_call_array([$persistences, 'setUsersModel'], [$users]);
            }

            if (class_exists($users) && method_exists($users, 'setPermissionsClass')) {
                forward_static_call_array([$users, 'setPermissionsClass'], [$permissions]);
            }

            return new UserRepository($app['sentinel.hasher'], $app['events'], $users);
        });
    }
}
