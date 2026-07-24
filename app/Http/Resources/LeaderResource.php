<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class LeaderResource extends JsonResource
{
    public function toArray(Request $request): array
    {
        return [
            'id' => $this->id,
            'position_key' => $this->position_key,
            'role' => $this->role,
            'name' => $this->name,
            'image' => $this->image,
            'visi' => $this->visi,
            'misi' => $this->misi,
        ];
    }
}