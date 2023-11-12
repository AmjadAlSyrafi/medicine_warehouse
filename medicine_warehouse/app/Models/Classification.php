<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Classification extends Model
{
    public function warehouse()
    {
        return $this->belongsTo(Warehouse::class);
    }
}
