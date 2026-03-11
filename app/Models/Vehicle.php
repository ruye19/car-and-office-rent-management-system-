<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\VehicleServiceRequest;
use App\Models\VehicleMaintenanceRecord;
use App\Models\VehicleLicense;
use App\Models\VehicleInspection;

class Vehicle extends Model
{
    use HasFactory;

    protected $fillable = [
        'plate_number',
        'registration_number',
        'mileage',
        'last_service_date',
    ];

    public function serviceRequests()
    {
        return $this->hasMany(VehicleServiceRequest::class);
    }

    public function maintenanceRecords()
    {
        return $this->hasMany(VehicleMaintenanceRecord::class);
    }

    public function licenses()
    {
        return $this->hasMany(VehicleLicense::class);
    }

    public function inspections()
    {
        return $this->hasMany(VehicleInspection::class);
    }
}
