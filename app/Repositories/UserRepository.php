<?php
namespace App\Repositories;

use App\User;
use Cartalyst\Sentinel\Users\IlluminateUserRepository;
use InvalidArgumentException;

class UserRepository extends IlluminateUserRepository
{
    /**
     * Validates the user.
     *
     * @param  array $credentials
     * @param  int $id
     * @return bool
     * @throws InvalidArgumentException
     */
    protected function validateUser(array $credentials, $id = null)
    {
        $instance = $this->createModel();

        $loginNames = $instance->getLoginNames();

        // We will simply parse credentials which checks logins and passwords
        list($logins, $password, $credentials) = $this->parseCredentials($credentials, $loginNames);

        if ($id === null) {
            if (empty($logins)) {
                throw new InvalidArgumentException('No [login] credential was passed.');
            }
        }

        return true;
    }

    /**
     * @param string $role
     * @return mixed
     */
    public function findUsersByRole($role)
    {
        $users = $this->createModel()->whereHas('roles', function ($query) use ($role) {
            $query->where('name', '=', $role);
        })->get();

        return $users;
    }

    /**
     * @param User $user
     * @param $code
     * @return mixed
     */
    public function activate(User $user, $code)
    {
        // Todo: Error handling
        $activationRepo = app('sentinel.activations');

        if ($activationRepo->completed($user)) {
            return 'Already completed';
        }

        if (!$activationRepo->exists($user)) {
            return 'Does not exist';
        }

        return $activationRepo->complete($user, $code);
    }
}