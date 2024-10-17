<?php

namespace Modules\Spatie\App\Http\Controllers\Api;

use Lynx\Base\Api;
use Modules\Spatie\App\Models\Role;
use Modules\Spatie\App\Policies\RolePolicy;
use Modules\Spatie\App\resources\RoleResource;

class RoleController extends Api
{
    protected $entity = Role::class;
    protected $resourcesJson = RoleResource::class;
    protected $policy = RolePolicy::class;
    protected $guard = 'api';
    protected $spatieQueryBuilder = true;
    protected $paginateIndex = true;
    protected $withTrashed = false;
    protected $FullJsonInStore = true;  // TRUE,true
    protected $FullJsonInUpdate = true;  // TRUE,true
    protected $FullJsonInDestroy = true;  // TRUE,true

    /**
     * can handel custom query when retrive data on index,indexGuest
     * @param $entity model
     * @return query by Model , Entity
     */
    public function query($entity): Object
    {
        return $entity;
    }

    /**
     * this method append data when store or update data
     * @return array
     */
    public function append(): array
    {
        // $data = [
        //     'user_id' => auth('api')->id(),
        // ];
        // $file = lynx()->uploadFile('file', 'test');
        // if (!empty($file)) {
        //     $data['file'] = $file;
        // }
        // return $data;
        return [];
    }

    /**
     * @param $id integer if you want to use in update rules
     * @param string $type (store,update)
     * @return array by (store,update) type using $type variable
     */
    public function rules(string $type, mixed $id = null): array
    {
        return $type == 'store' ? [
            'name'  => 'required',
            'guard_name'    => 'required'
        ] : [
            'name'  => 'required',
            'guard_name'    => 'required'
        ];
    }

    /**
     * this method can set your attribute names with validation rules
     * @return array
     */
    public function niceName()
    {
        return [];
    }

    /*
     * this method use or append or change data before store
     * @return array
     */
    public function beforeStore(array $data): array
    {
        // $data['title'] = 'replace data';
        return $data;
    }

    /**
     * this method can use or append store data
     * @return array
     */
    public function afterStore($entity): void
    {
        // dd($entity->id);
    }

    /**
     * this method use or append or delete data beforeUpdate
     * @return array
     */
    public function beforeUpdate($entity): void
    {
        if (!empty($data->file)) {
            \Storage::delete($data->file);
        }
    }

    /**
     * this method use or append data after Update
     * @return array
     */
    public function afterUpdate($entity): void
    {
        // dd($entity->id);
    }

    /**
     * this method use or append data when Show data
     * @return array
     */
    public function beforeShow($entity): Object
    {
        return $entity;
    }

    /**
     * this method use or append data when Show data
     * @return array
     */
    public function afterShow($entity): Object
    {
        return new \Modules\Spatie\App\resources\RoleResource($entity);
    }

    /**
     * you can do something in this method before delete record
     * @param object $entity
     * @return void
     */
    public function beforeDestroy($entity): void
    {
        if (!empty($entity->file)) {
            \Storage::delete($entity->file);
        }
    }

    /**
     * you can do something in this method after delete record
     * @param object $entity
     * @return void
     */
    public function afterDestroy($entity): void
    {
        // do something
        // $entity->file
    }
}
