<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\OfficeRentAgreement;
use App\Models\BranchUtility;

class Branch extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'location',
        'proposed_office',
        'landlord_details',
        'estimated_rent',
    ];

    public function officeRentAgreements()
    {
        return $this->hasMany(OfficeRentAgreement::class);
    }

    public function utilities()
    {
        return $this->hasMany(BranchUtility::class);
    }
}
