<?php

use Modules\PermissionsModule\App\Dash\Resources\AdminGroupRoles;
use Modules\PermissionsModule\App\Dash\Resources\AdminGroups;
use Modules\Spatie\App\Dash\Resources\Permissions;
use Modules\Spatie\App\Dash\Resources\Roles;
use Modules\UsersModule\App\Dash\Resources\Admins;
use Modules\UsersModule\App\Dash\Resources\Users;

return [
    // Users Start //
    AdminGroupRoles::class,
    AdminGroups::class,
    Admins::class,
    Users::class,
    // Users End//
    Roles::class,
    Permissions::class
];
