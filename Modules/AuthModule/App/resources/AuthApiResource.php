<?php

namespace Modules\AuthModule\App\resources;

use Illuminate\Http\Resources\Json\JsonResource;

class AuthApiResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     */
    public function toArray($request): array
    {
        return parent::toArray($request);
    }
}
