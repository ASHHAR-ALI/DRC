<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\belongsTo;
use Illuminate\Database\Eloquent\Relations\HasOne;

class DisputeTypeSetting extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'dispute_type_name',
    ];

    public function disputeType(): belongsTo
    {
        return $this->belongsTo(Dispute::class, 'dispute_type');
    }

}
