<?php

namespace Modules\PermissionsModule\App\resources;

use Illuminate\Http\Resources\Json\JsonResource;

class AdminGroupRolesApiResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     */
    public function toArray($request): array
    {
        return parent::toArray($request);
        // return [
        //     'id'    => $this->id,

        //     'permissions'  => [
        //         'create'    => $this->create,
        //         'show'    => $this->show,
        //         'update'    => $this->update,
        //         'delete'    => $this->delete,
        //         'restore'    => $this->restore,
        //         'force_delete'    => $this->force_delete,
        //     ]
        // ];
    }
}
