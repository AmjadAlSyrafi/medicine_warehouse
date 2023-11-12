<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class MedicineOrder extends Model
{
    protected $fillable = [
        
        'pharmacist_id', 'status', 'payment_status',
        
    ];

    public function warehouse()
    {
        return $this->belongsTo(Warehouse::class);
    }
}
