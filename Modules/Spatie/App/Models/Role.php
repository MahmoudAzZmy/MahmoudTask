<?php

namespace Modules\Spatie\App\Models;

use Illuminate\Database\Eloquent\Concerns\HasUuids;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Modules\Spatie\Database\Factories\RolesFactory;
use Spatie\Permission\Models\Role as SpatieRole;

class Role extends SpatieRole
{
    use HasFactory;
    use HasUuids;
    protected $primaryKey = 'id';
    protected static function newFactory()
    {
        return RolesFactory::new();
    }
}
