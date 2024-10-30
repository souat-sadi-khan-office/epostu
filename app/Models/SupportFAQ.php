<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class SupportFAQ extends Model
{
    protected $fillable = [
        'question',
        'answer',
        'status'
    ];
}
