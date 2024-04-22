<?php

namespace App\Models\Member;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class InfoDocument extends Model
{
    use HasFactory;
    protected $fillable=[
        'fileNomineePhoto',
        'fileNomineeSignature',
        'fileApplicantSignature',
        
        'fileCompanyLogo',
        'fileEducationCertificate',
        'fileTradeLicense',
        'fileTaxCertificate',
        'fileImportCertificate',
        'fileVatRegistration',
        'fileMemberNID',
        'fileApplicantPhoto',
        'fileNomineeNID',
        'fileVisitingCard',
        'fileIncorporationCertificate',
        'fileArticlesCopy',
        'filePartnershipDeed',
        'fileIndentingLicense',

        'status',
        'member_id',
    ];
}
