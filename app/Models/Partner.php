<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Partner extends Model
{
    protected $fillable = [
        'session_id',
        'first_name',
        'last_name',
        'email',
        'phone',
        'company_name',
        'contact_person',
        'message',
        'status'
    ];
}
