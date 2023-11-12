<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Warehouse extends Model
{
    use HasFactory;

    protected $fillable = [
        'Classification_id',
        'order_id',
        // Add any other fields you may need for the warehouse
    ];

    // Define relationships

    // A warehouse belongs to a classification
    public function classification()
    {
        return $this->belongsTo(Classification::class);
    }

    // A warehouse belongs to an order
    public function order()
    {
        return $this->belongsTo(MedicineOrder::class);
    }

    // A warehouse has many medicines
    public function medicines()
    {
        return $this->hasMany(Medicine::class);
    }
}
