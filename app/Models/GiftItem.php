<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class GiftItem extends Model
{
    protected $fillable = [
        'name',
        'quantity',
        'photo',
        'status'
    ];

    public function events()
    {
        return $this->hasMany(EventRegistration::class);
    }
}
