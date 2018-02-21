<?php
namespace Djuki\SentryLaravelBridge\Providers;

use Illuminate\Auth\UserProviderInterface;
use Illuminate\Contracts\Auth\User as UserContract;

class SentryUserProvider implements UserProviderInterface {

    protected $model;

    public function __construct(UserContract $model)
    {
        $this->model = $model;
    }

    public function retrieveById($identifier)
    {
        dd('retrieveById');
    }

    public function retrieveByToken($identifier, $token)
    {
        dd('retrieveByToken');
    }

    public function updateRememberToken(UserContract $user, $token)
    {
        dd('updateRememberToken');
    }

    public function retrieveByCredentials(array $credentials)
    {
        dd('retrieveByCredentials');
    }

    public function validateCredentials(UserContract $user, array $credentials)
    {
        dd('validateCredentials');
    }

}