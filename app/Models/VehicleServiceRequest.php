<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Vehicle;
use App\Models\User;

class VehicleServiceRequest extends Model
{
    use HasFactory;

    protected $fillable = [
        'vehicle_id',
        'requested_by',
        'problem_description',
        'service_type',
        'urgency_level',
        'status',
        'service_provider',
        'approved_by',
    ];

    public function vehicle()
    {
        return $this->belongsTo(Vehicle::class);
    }

    public function requester()
    {
        return $this->belongsTo(User::class, 'requested_by');
    }

    public function approver()
    {
        return $this->belongsTo(User::class, 'approved_by');
    }
}
