<?php

namespace Modules\PermissionsModule\App\Http\Controllers\Api;

use Lynx\Base\Api;
use Modules\PermissionsModule\App\Model\AdminGroupRole;
use Modules\PermissionsModule\App\Policies\AdminGroupRolesApiPolicy;
use Modules\PermissionsModule\App\resources\AdminGroupRolesApiResource;

class AdminGroupRolesApiController extends Api
{
    protected $entity = AdminGroupRole::class;
    protected $resourcesJson = AdminGroupRolesApiResource::class;
    protected $policy = AdminGroupRolesApiPolicy::class;
    protected $guard = 'api';
    protected $spatieQueryBuilder = true;
    protected $paginateIndex = true;
    protected $withTrashed = true;
    protected $FullJsonInStore = true;  // TRUE,FALSE
    protected $FullJsonInUpdate = true;  // TRUE,FALSE
    protected $FullJsonInDestroy = true;  // TRUE,FALSE

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

        return [];
    }


    public function rules(string $type, mixed $id = null): array
    {
        return $type == 'store' ? [
            'admin_group_id'    => 'required',
            'resource'         => 'required|string',
            'create'        => 'required',
            'update'        => 'required',
            'show'          => 'required',
            'delete'        => 'required',
            'force_delete'  => 'required',
            'restore'       => 'required'
        ] : [
            'admin_group_id'    => 'required',
            'resource'         => 'required',
            'create'        => 'required',
            'update'        => 'required',
            'show'          => 'required',
            'delete'        => 'required',
            'force_delete'  => 'required',
            'restore'       => 'required'
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
        // if (!empty($data->file)) {
        //     \Storage::delete($data->file);
        // }
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
        return new AdminGroupRolesApiResource($entity);
    }

    /**
     * you can do something in this method before delete record
     * @param object $entity
     * @return void
     */
    public function beforeDestroy($entity): void
    {
        // if (!empty($entity->file)) {
        //     \Storage::delete($entity->file);
        // }
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
