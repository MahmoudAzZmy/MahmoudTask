<?php

namespace Modules\PermissionsModule\App\Model;

use Illuminate\Database\Eloquent\Concerns\HasUuids;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Modules\PermissionsModule\Database\Factories\AdminGroupFactory;

class AdminGroup extends Model
{
	use HasFactory, HasUuids;

	protected $fillable = [
		'id',
		'name',
	];

	public function roles()
	{
		return $this->hasMany(AdminGroupRole::class, 'admin_group_id', 'id');
	}

	protected static function newFactory()
	{
		return AdminGroupFactory::new();
	}
}
