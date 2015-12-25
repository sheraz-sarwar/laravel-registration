<?php
namespace App\Repositories;

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
}