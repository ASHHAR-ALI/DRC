<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;
use Illuminate\Database\Eloquent\Relations\HasOne;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Foundation\Auth\User as Authenticatable;

class Disputer extends Authenticatable
{
    use HasFactory, Notifiable;

    protected $fillable = [
        'name',
        'fathername',
        'email',
        'cnic',
        'password',
        'contact',
        'address',
        'disputerimage',
    ];

    protected $hidden = [
        'password',
        'remember_token',
    ];

    protected $casts = [
        'email_verified_at' => 'datetime',
        'password' => 'hashed',
    ];


    public function disputeTypes(): HasMany
    {
        return $this->hasMany(DisputeTypeSetting::class);
    }

    public function disputes(): HasMany
    {
        return $this->hasMany(Dispute::class, 'disputer_id');
    }
}
