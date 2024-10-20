<?php

namespace Modules\UsersModule\App\Http\Model;

use Illuminate\Database\Eloquent\Concerns\HasUuids;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;
use Modules\PermissionsModule\App\Model\AdminGroup;
use Modules\UsersModule\Database\Factories\UserFactory;
use Spatie\Permission\Traits\HasRoles;
use Tymon\JWTAuth\Contracts\JWTSubject;

class User extends Authenticatable implements JWTSubject
{
	use  HasFactory, Notifiable, SoftDeletes, HasUuids, HasRoles;

	/**
	 * The attributes that are mass assignable.
	 *
	 * @var array<int, string>
	 */
	protected $fillable = [
		'id',
		'name',
		'email',
		'password',
		'account_type',   // admin | user
		'admin_group_id', // admin_group_id
		'created_at',
		'updated_at',
		'deleted_at',
	];
	protected static function newFactory()
	{
		return UserFactory::new();
	}

	protected $deleted_at = 'deleted_at';

	/**
	 * The attributes that should be hidden for serialization.
	 *
	 * @var array<int, string>
	 */
	protected $hidden = [
		'password',
		'remember_token',
	];

	/**
	 * The attributes that should be cast.
	 *
	 * @var array<string, string>
	 */
	protected $casts = [
		'email_verified_at' => 'datetime',
	];

	public function getJWTIdentifier()
	{
		return $this->getKey();
	}

	public function getJWTCustomClaims()
	{
		return [];
	}

	public function getCreatedAtAttribute($date)
	{
		return empty($date) ? $date : date('Y-m-d', strtotime($date));
	}

	public function getUpdatedAtAttribute($date)
	{
		return empty($date) ? $date : date('Y-m-d', strtotime($date));
	}

	public function getDeletedAtAttribute($date)
	{
		return empty($date) ? null : date('Y-m-d', strtotime($date));
	}

	public function getEmailVerifiedAtAttribute($date)
	{
		return empty($date) ? null : date('Y-m-d', strtotime($date));
	}

	public function admingroup()
	{
		return $this->belongsTo(AdminGroup::class, 'admin_group_id');
	}
}
