<?php

namespace Modules\UsersModule\App\Policies;

use Illuminate\Auth\Access\HandlesAuthorization;

class UsersApiPolicy
{
    use HandlesAuthorization;

    /**
     * Create a new policy instance.
     */
    public function __construct()
    {
        //
    }
    use HandlesAuthorization;

    public function viewAny()
    {
        return true;
    }

    public function view()
    {
        return true;
    }

    public function create()
    {
        return true;
    }

    public function show()
    {
        return false;
    }

    public function update()
    {
        return true;
    }

    public function delete()
    {
        return true;
    }

    public function forceDelete()
    {
        return true;
    }

    public function restore()
    {
        return true;
    }
}
