<?php

namespace App\Models\Member;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\User;

class InfoPersonal extends Model
{
    use HasFactory;
    protected $fillable=[
        'memebrName',
        'memebrDesignation',
        'memebrNID',
        'memebrDOB',
        'memebrMotherName',
        'memebrLifePartner',
        'memebrGender',
        'memebrBloodGroup',
        'memberPhoneNo',
        'memberEmail',

        'qualificationName',
        
        'nomineeName',
        'nomineeNID',
        'nomineeFather',
        'nomineeMother',
        'nomineeRelation',
        'nomineeDesignation',
        
        'bankBranceName',
        'modePayment',
        'totalAmount',
        'paymentDate',
        'moneyReceiptNo',
        
        'kOneCompanyName',
        'kOneMemberName',
        'kOneMembershipNo',

        'kTwoCompanyName',
        'kTwoMemberName',
        'kTwoMembershipNo',
        
        'description',
        'status',
        'member_id',
    ];

    public function user()
    {
        return $this->belongsTo(User::class, 'member_id', 'id');
    }
}
