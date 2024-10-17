<?php

namespace Modules\Spatie\App\Dash\Resources;

use Dash\Resource;
use Modules\Spatie\App\Models\Permission;

class Permissions extends Resource
{
	public static $model = Permission::class;
	public static $group = 'Spatie';
	public static $displayInMenu = true;
	public static $icon = ''; 
	public static $title = 'name';
	public static $search = [
		'id',
		'name',
	];
	public static $searchWithRelation = [];
	public static function customName()
	{
		return 'Permissions';
	}
	public static function vertex()
	{
		return [];
	}
	public function fields()
	{
		return [
			id()->make('ID', 'id'),

			text('Title', 'name')
				->rule('required', 'string')
				->column(6),
		];
	}
	public function actions()
	{
		return [];
	}
	public function filters()
	{
		return [];
	}
}
