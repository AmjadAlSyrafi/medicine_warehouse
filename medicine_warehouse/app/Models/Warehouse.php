<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Warehouse extends Model
{
    use HasFactory;
    public function Classification()
    {
        return $this->hasMany(Classification::class);
    }

    public function orders()
    {
        return $this->hasMany(MedicineOrder::class);
    }
}
