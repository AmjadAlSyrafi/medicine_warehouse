<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Classification extends Model
{ use HasFactory;

    protected $fillable = [
        'name',
        // Add any other fields you may need for classifications
    ];
    public function warehouse()
    {
        return $this->belongsTo(Warehouse::class);
    }
     // Define relationships

    // A classification can have many medicines
    public function medicines()
    {
        return $this->hasMany(Medicine::class);
    }
}
