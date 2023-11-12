<?php

namespace App\Http\Resources;
use App\Http\Resources\ClassificationResource;
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
            'availableQuantity' => $this->available_quantity,
            'expiryDate' => $this->expiry_date,
            'price' => $this->price,
            'classification'=> ClassificationResource::make($this->classification)
        ];
    }
}
