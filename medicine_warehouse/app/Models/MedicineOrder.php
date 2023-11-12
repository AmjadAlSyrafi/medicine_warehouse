<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class MedicineOrder extends Model
{    use HasFactory;

    protected $fillable = [
        'pharmacist_id',
        'status',
        'payment_status',
        
    ];

  // A medicine order belongs to a pharmacist
  public function pharmacist()
  {
      return $this->belongsTo(user::class);
  }

  // A medicine order has many medicines through the warehouse
  public function medicines()
  {
      return $this->hasManyThrough(Medicine::class, Warehouse::class);
  }
}
