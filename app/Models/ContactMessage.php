<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ContactMessage extends Model
{
    protected $fillable = [
        'session_id',
        'first_name',
        'last_name',
        'email',
        'phone',
        'message'
    ];
}
