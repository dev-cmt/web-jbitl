<?php

namespace App\Models\Admin;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Admin\PastCommitteeDetails;
use App\Models\User;

class PastCommittee extends Model
{
    use HasFactory;
    protected $fillable = [
        'title',
        'duration',
        'description',
        'user_id',
        'index',
        'status',
    ];

    
    public function pastCommitteeDetails(){
        return $this->hasMany(PastCommitteeDetails::class, 'past_committee_id');
    }
    public function user(){
        return $this->belongsTo(User::class, 'user_id');
    }
}
