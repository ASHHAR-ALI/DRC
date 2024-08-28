<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DisputeComment extends Model
{
    use HasFactory;


    protected $fillable = [
        'dispute_id',
        'member_id',
        'disputer_id',
        'comment',
    ];



    public function dispute()
    {
        return $this->belongsTo(Dispute::class, 'dispute_id');
    }

    public function againstdisputer()
    {
        return $this->belongsTo(Dispute::class, 'dispute_id', 'id');
    }

    public function disputerUser()
    {
        return $this->belongsTo(Disputer::class, 'disputer_id');
    }
    
    public function disputer()
    {
        return $this->belongsTo(Disputer::class, 'disputer_id');
    }

    public function member()
    {
        return $this->belongsTo(Member::class, 'member_id');
    }

    public function memberUser()
    {
        return $this->belongsTo(Member::class, 'member_id');
    }

    

}
