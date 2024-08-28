<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

class Dispute extends Authenticatable
{
    use HasFactory, Notifiable;


    protected $fillable = [
        'dispute_person_name',
        'dispute_person_father_name',
        'email',
        'password',
        'dispute_person_cnic',
        'dispute_person_contact_number',
        'dispute_person_address',
        'againstdisputerimage',
        'dispute_type',
        'final_decision_favor',
        'final_review',
        'dispute_status',
    ];


    protected $hidden = [
        'password',
        'remember_token',
    ];

    protected $casts = [
        'email_verified_at' => 'datetime',
        'password' => 'hashed',
    ];


    public function disputer()
    {
        return $this->belongsTo(Disputer::class, 'disputer_id');
    }

    public function members()
    {
        return $this->belongsToMany(Member::class, 'dispute_member', 'dispute_id', 'member_id');
    }

    public function disputestype()
    {
        return $this->belongsTo(DisputeTypeSetting::class,  'dispute_type');
    }

    public function comments()
    {
        return $this->hasMany(DisputeComment::class, 'dispute_id');
    }

    public function againstdisputer()
    {
        return $this->belongsTo(Dispute::class, 'id', 'id');
    }

    public function disputeall()
    {
        return $this->belongsTo(Disputer::class, 'disputer_id');
    }




}
