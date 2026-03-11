<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Vehicle;

class VehicleLicense extends Model
{
    use HasFactory;

    protected $fillable = [
        'vehicle_id',
        'expiry_date',
        'receipt_path',
    ];

    public function vehicle()
    {
        return $this->belongsTo(Vehicle::class);
    }
}
