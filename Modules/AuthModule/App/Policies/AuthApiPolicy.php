<?php

namespace Modules\AuthModule\App\Policies;

use Illuminate\Auth\Access\HandlesAuthorization;

class AuthApiPolicy
{
    use HandlesAuthorization;

    /**
     * Create a new policy instance.
     */
    public function __construct()
    {
        //
    }
}
