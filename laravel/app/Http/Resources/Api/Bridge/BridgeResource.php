<?php

namespace App\Http\Resources\Api\Bridge;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class BridgeResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @return array<string, mixed>
     */
    public function toArray(Request $request): array
    {
        return [
            'style' => $this->style ?? null,
            'message' => $this->message ?? null
        ];
    }
}
