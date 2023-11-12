<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CompanyOfMedicine extends Model
{
    public function Medicine()
    {
        return $this->hasMany(Medicine::class);
    }
}
