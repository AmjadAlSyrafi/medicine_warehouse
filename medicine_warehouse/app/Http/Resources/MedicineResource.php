<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class MedicineResource extends JsonResource
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
            'scientificName' => $this->scientific_name,
            'tradeName' => $this->trade_name,
            'classification' => $this->classification,
            'manufacturer' => $this->manufacturer,
            'availableQuantity' => $this->available_quantity,
            'expiryDate' => $this->expiry_date,
            'price' => $this->price,
        ];
    }
}
