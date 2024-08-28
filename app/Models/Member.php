<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

class Member extends Authenticatable
{
    use HasFactory, Notifiable;

    protected $fillable = [
        'name',
        'fathername',
        'email',
        'cnic',
        'password',
        'contactnumber',
        'address',
        'memberimage',
    ];

    protected $hidden = [
        'password',
        'remember_token',
    ];

    protected $casts = [
        'email_verified_at' => 'datetime',
        'password' => 'hashed',
    ];



    public function disputes()
    {
        return $this->belongsToMany(Dispute::class, 'dispute_member', 'member_id', 'dispute_id');
    }
}
