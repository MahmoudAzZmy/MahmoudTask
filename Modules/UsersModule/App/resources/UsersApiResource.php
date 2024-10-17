<?php

namespace Modules\UsersModule\App\resources;

use Illuminate\Http\Resources\Json\JsonResource;

class UsersApiResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     */
    public function toArray($request): array
    {
        return [
            'id'    => $this->id,
            'name'  => $this->name,
            'email' => $this->email,
            'account_type' => $this->account_type,
            'admin_group_id' => $this->admin_group_id,
        ];
    }
}
