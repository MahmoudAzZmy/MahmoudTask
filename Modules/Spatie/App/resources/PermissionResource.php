<?php

namespace Modules\Spatie\App\resources;

use Illuminate\Http\Resources\Json\JsonResource;

class PermissionResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     */
    public function toArray($request): array
    {
        return [
            'name'  => $this->name,
            'guard_name'    => $this->guard_name
        ];
    }
}
