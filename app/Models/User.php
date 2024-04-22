<?php

namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Fortify\TwoFactorAuthenticatable;
use Laravel\Jetstream\HasProfilePhoto;
use Laravel\Sanctum\HasApiTokens;
use Spatie\Permission\Traits\HasRoles;

use App\Models\Member\InfoPersonal;
use App\Models\Member\InfoCompany;
use App\Models\Member\InfoBank;
use App\Models\Member\InfoOther;
use App\Models\Member\InfoDocument;
use App\Models\Master\MemberType;
use App\Models\Payment\PaymentDetails;

class User extends Authenticatable implements MustVerifyEmail
{
    use HasApiTokens;
    use HasFactory;
    use HasProfilePhoto;
    use Notifiable;
    use TwoFactorAuthenticatable;
    use HasRoles;

    /**
     * The attributes that are mass assignable.
     *
     * @var string[]
     */
    protected $fillable = [
        'name',
        'email',
        'member_code',
        'password',
        'profile_photo_path',
        'member_type_id',
        'description',
        'join_date',
        'departure_date',
        'approve_by',
        'is_admin',
        'status',
        'index',
    ];

    public function memberType()
    {
        return $this->belongsTo(MemberType::class, 'member_type_id');
    }
    public function parentUser()
    {
        return $this->belongsTo(User::class, 'approve_by');
    }
    public function infoPersonal()
    {
        return $this->hasOne(InfoPersonal::class, 'member_id');
    }
    public function infoCompany()
    {
        return $this->hasOne(InfoCompany::class, 'member_id');
    }
    public function infoBank()
    {
        return $this->hasOne(InfoBank::class, 'member_id');
    }
    public function infoDocument()
    {
        return $this->hasOne(InfoDocument::class, 'member_id');
    }
    public function infoOther()
    {
        return $this->hasOne(InfoOther::class, 'member_id');
    }
    public function paymentDetails()
    {
        return $this->hasOne(PaymentDetails::class, 'member_id');
    }
    

    protected static function boot()
    {
        parent::boot();

        // Set email_verified_at field when creating a new user
        static::creating(function ($user) {
            $user->email_verified_at = now();
        });
    }

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array
     */
    protected $hidden = [
        'password',
        'remember_token',
        'two_factor_recovery_codes',
        'two_factor_secret',
    ];

    /**
     * The attributes that should be cast.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    /**
     * The accessors to append to the model's array form.
     *
     * @var array
     */
    protected $appends = [
        'profile_photo_url',
    ];
}


?>