<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Medicine extends Model
{
    protected $fillable = [
        'scientific_name', 'trade_name', 'classification', 'CompanyName', 'available_quantity', 'expiry_date', 'price',
    ];

    public function warehouse()
    {
        return $this->belongsTo(Warehouse::class);
    }
}
