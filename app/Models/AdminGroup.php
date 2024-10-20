<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Concerns\HasUuids;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

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
}
