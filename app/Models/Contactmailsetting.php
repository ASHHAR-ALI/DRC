<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

class Contactmailsetting extends Authenticatable
{
    use HasFactory;

    protected $fillable = [
        'contact_reciever_email',
    ];
}

