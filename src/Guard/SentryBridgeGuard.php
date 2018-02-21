<?php
namespace Djuki\SentryLaravelBridge\Guard;

use User;
use Sentry;
use Illuminate\Contracts\Auth\Guard;
use Illuminate\Contracts\Auth\Authenticatable;

class SentryBridgeGuard implements Guard
{
    public function check()
    {
        return Sentry::check();
    }

    public function guest()
    {
        return null;
    }

    public function user()
    {
        return Sentry::getUser();
    }

    public function id()
    {
        return Sentry::getUser() ? Sentry::getUser()->getId() : null;
    }

    public function validate(array $credentials = [])
    {
        return Sentry::validate($credentials);
    }

    public function setUser(Authenticatable $user)
    {
        $id = $user->getAuthIdentifier();
        if ($user = User::find($id)) {
            return Sentry::setUser($user);
        }

        return false;
    }

}