<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class EventRegistration extends Model
{
    protected $fillable = [
        'first_name',
        'last_name',
        'email',
        'phone',
        'gift_id'
    ];

    public function gift()
    {
        return $this->belongsTo(GiftItem::class, 'gift_id');
    }
}
