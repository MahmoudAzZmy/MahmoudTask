<?php

namespace Modules\PermissionsModule\App\resources;

use Illuminate\Http\Resources\Json\JsonResource;

class AdminGroupsApiResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     */
    public function toArray($request): array
    {
        return parent::toArray($request);
    }
}
