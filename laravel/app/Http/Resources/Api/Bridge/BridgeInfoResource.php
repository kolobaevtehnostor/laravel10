<?php

namespace App\Http\Resources\Api\Bridge;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class BridgeInfoResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @return array<string, mixed>
     */
    public function toArray(Request $request): array
    {
        return [
            'styles' => $this->styles ?? [],
            'types' => $this->types ?? []
        ];
    }
}
