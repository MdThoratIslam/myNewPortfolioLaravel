<?php

namespace App\Http\Resources\Module;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class ModuleResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @return array<string, mixed>
     */
    public function toArray(Request $request): array
    {
        //return parent::toArray($request);
        return [
            'id'                    => $this->id,
            'name'                  => $this->name,
            'route'                 => $this->route,
            'route_type'            => $this->route_type,
            'sub_modules'           => $this->subModules,
            'status_active'         => $this->status_active,
            'is_delete'             => $this->is_delete,
            'created_at'            => $this->created_at,
            'updated_at'            => $this->updated_at,
        ];

    }
}
