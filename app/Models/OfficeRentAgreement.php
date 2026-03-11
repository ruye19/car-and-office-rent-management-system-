<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Branch;
use App\Models\AgreementRenewal;
use App\Models\User;

class OfficeRentAgreement extends Model
{
    use HasFactory;

    protected $fillable = [
        'branch_id',
        'agreement_id',
        'landlord_name',
        'property_address',
        'monthly_rent',
        'payment_schedule',
        'start_date',
        'end_date',
        'status',
        'approved_by',
    ];

    public function branch()
    {
        return $this->belongsTo(Branch::class);
    }

    public function renewals()
    {
        return $this->hasMany(AgreementRenewal::class);
    }

    public function approvedBy()
    {
        return $this->belongsTo(User::class, 'approved_by');
    }
}
