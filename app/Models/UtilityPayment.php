<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\BranchUtility;
use App\Models\User;

class UtilityPayment extends Model
{
    use HasFactory;

    protected $fillable = [
        'branch_utility_id',
        'amount',
        'payment_date',
        'receipt_path',
        'paid_by',
    ];

    public function utility()
    {
        return $this->belongsTo(BranchUtility::class, 'branch_utility_id');
    }

    public function payer()
    {
        return $this->belongsTo(User::class, 'paid_by');
    }
}
