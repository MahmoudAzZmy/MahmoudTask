<?php

namespace Modules\PermissionsModule\App\Policies;

use Illuminate\Auth\Access\HandlesAuthorization;

class AdminGroupsApiPolicy
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
        return true;
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
