<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\OfficeRentAgreement;
use App\Models\User;

class AgreementRenewal extends Model
{
    use HasFactory;

    protected $fillable = [
        'office_rent_agreement_id',
        'new_rent_amount',
        'new_start_date',
        'new_end_date',
        'status',
        'approved_by',
    ];

    public function agreement()
    {
        return $this->belongsTo(OfficeRentAgreement::class, 'office_rent_agreement_id');
    }

    public function approvedBy()
    {
        return $this->belongsTo(User::class, 'approved_by');
    }
}
