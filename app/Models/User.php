<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;
use App\Models\VehicleServiceRequest;
use App\Models\VehicleMaintenanceRecord;
use App\Models\UtilityPayment;

class User extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'name',
        'email',
        'password',
        'role',
    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array<int, string>
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * The attributes that should be cast.
     *
     * @var array<string, string>
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    // relationships

    public function requestedServiceRequests()
    {
        return $this->hasMany(VehicleServiceRequest::class, 'requested_by');
    }

    public function approvedServiceRequests()
    {
        return $this->hasMany(VehicleServiceRequest::class, 'approved_by');
    }

    public function recordedMaintenance()
    {
        return $this->hasMany(VehicleMaintenanceRecord::class, 'recorded_by');
    }

    public function utilityPayments()
    {
        return $this->hasMany(UtilityPayment::class, 'paid_by');
    }
}
