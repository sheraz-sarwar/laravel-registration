<?php

namespace App\Services;

use Illuminate\Support\Collection;

class UserRegistration
{
    protected $user;

    public function __construct()
    {
        $this->user = new Collection();
    }

    public function register()
    {
        app('sentinel')->register($this->user->toArray());
    }

    /**
     * @param mixed $firstName
     * @return UserRegistration
     */
    public function setFirstName($firstName)
    {
        $this->user->put('first_name', ucwords(strtolower($firstName)));
        return $this;
    }

    /**
     * @param mixed $lastName
     * @return UserRegistration
     */
    public function setLastName($lastName)
    {
        $this->user->put('last_name', ucwords(strtolower($lastName)));
        return $this;
    }

    /**
     * @param mixed $email
     * @return UserRegistration
     */
    public function setEmail($email)
    {
        $this->user->put('email', $email);
        return $this;
    }

    /**
     * @param mixed $password
     * @return UserRegistration
     */
    public function setPassword($password)
    {
        $this->user->put('password', $password);
        return $this;
    }

    /**
     * @param mixed $gender
     * @return UserRegistration
     */
    public function setGender($gender)
    {
        $this->user->put('gender', $gender);
        return $this;
    }

    /**
     * @param mixed $dateOfBirth
     * @return UserRegistration
     */
    public function setDateOfBirth($dateOfBirth)
    {
        $this->user->put('date_of_birth', $dateOfBirth);
        return $this;
    }
}