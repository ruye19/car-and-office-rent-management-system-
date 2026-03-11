<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Vehicle;
use App\Models\VehicleServiceRequest;
use App\Models\User;

class VehicleMaintenanceRecord extends Model
{
    use HasFactory;

    protected $fillable = [
        'vehicle_id',
        'vehicle_service_request_id',
        'service_date',
        'service_report_path',
        'recorded_by',
    ];

    public function vehicle()
    {
        return $this->belongsTo(Vehicle::class);
    }

    public function request()
    {
        return $this->belongsTo(VehicleServiceRequest::class, 'vehicle_service_request_id');
    }

    public function recorder()
    {
        return $this->belongsTo(User::class, 'recorded_by');
    }
}
