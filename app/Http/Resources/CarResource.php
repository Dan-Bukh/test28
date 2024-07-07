<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class CarResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @return array<string, mixed>
     */
    public function toArray(Request $request): array
    {
        return [
            'id' => $this->id,
            'owner' => $this->owner,
            'make' => $this->make,
            'model' => $this->model,
            'year_born' => $this->year_born,
            'mileage' => $this->mileage,
            'colour' => $this->colour,
        ];
    }
}
