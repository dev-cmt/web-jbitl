<?php

namespace App\Models\Member;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\User;

class InfoBank extends Model
{
    use HasFactory;

    protected $fillable=[
        'bankBranceName',
        'modePayment',
        'totalAmount',
        'paymentDate',
        'moneyReceiptNo',
        'slip',

        'status',
        'member_id',
    ];

    public function user()
    {
        return $this->belongsTo(User::class, 'member_id', 'id');
    }
}
