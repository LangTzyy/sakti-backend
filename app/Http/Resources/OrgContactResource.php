<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class OrgContactResource extends JsonResource
{
    public function toArray(Request $request): array
    {
        return [
            'address' => $this->address,
            'email' => $this->email,
            'office_hours' => $this->office_hours,
            'maps_query' => $this->maps_query,
            'instagram_url' => $this->instagram_url,
            'linkedin_url' => $this->linkedin_url,
            'github_url' => $this->github_url,
        ];
    }
}
