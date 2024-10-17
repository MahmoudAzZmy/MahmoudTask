<?php

namespace Modules\PermissionsModule\App\Model;

use Illuminate\Database\Eloquent\Concerns\HasUuids;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Modules\PermissionsModule\Database\Factories\AdminGroupRoleFactory;

class AdminGroupRole extends Model
{
	use HasFactory, HasUuids, SoftDeletes;
	protected $fillable = [
		'admin_group_id',
		'resource',
		'create',
		'show',
		'update',
		'delete',
		'force_delete',
		'restore',
	];

	public function admingroup()
	{
		return $this->belongsTo(AdminGroup::class, 'admin_group_id');
	}

	public function groups()
	{
		return $this->belongsToMany(AdminGroup::class);
	}
	protected static function newFactory()
	{
		return AdminGroupRoleFactory::new();
	}
}
