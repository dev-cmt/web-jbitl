<?php

namespace App\Models\Member;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class InfoCompany extends Model
{
    use HasFactory;
    protected $fillable=[
        'companyName',
        'addressOrganization',
        'typeOwnership',
        'typeBusiness',
        
        'tradeLicenseNo',
        'tradeLicenseDate',
        'eTinNo',
        'eTinDate',
        'vatRegistrationNo',
        'vatRegistrationDate',
        'ircCertificateNo',
        'ircCertificateDate',
        'rjscIncorporationNo',
        'rjscIncorporationDate',
                    
        'poultryDairyFisheries',
        'tradingBrandOthers',
        
        'contactCompanyName',
        'contactCompanyAddress',
        'contactCompanyNumber',
        'contactCompanyEmail',

        'status',
        'member_id',
    ];
}
