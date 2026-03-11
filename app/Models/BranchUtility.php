<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Branch;
use App\Models\UtilityPayment;

class BranchUtility extends Model
{
    use HasFactory;

    protected $fillable = [
        'branch_id',
        'type',
        'provider',
        'account_number',
        'payment_cycle',
    ];

    public function branch()
    {
        return $this->belongsTo(Branch::class);
    }

    public function payments()
    {
        return $this->hasMany(UtilityPayment::class);
    }
}
