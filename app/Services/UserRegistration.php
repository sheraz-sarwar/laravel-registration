<?php

namespace App\Services;

use Illuminate\Support\Collection;
use Illuminate\Support\Facades\Mail;

class UserRegistration
{
    protected $user;

    public function __construct()
    {
        $this->user = new Collection();
    }

    public function register()
    {
        // Todo: Sanity check
        $user = app('sentinel')->register($this->user->toArray());

        if ($this->user->has('password')) {
            $role = app('sentinel')->findRoleByName('User');
        } else {
            $role = app('sentinel')->findRoleByName('Guest');
        }

        $role->users()->attach($user);

        Mail::send('welcome', ['user' => $user], function ($m) use ($user) {
            $m->to($user->email, $user->first_name)->subject('Testing...');
        });

        return $user;
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
        if (!empty($password)) {
            $this->user->put('password', $password);
        }
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