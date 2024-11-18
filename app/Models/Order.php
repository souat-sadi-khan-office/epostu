<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    protected $fillable = [
        'product',
        'plan',
        'pricing_plan',
        'first_name',
        'last_name',
        'email',
        'phone',
        'address',
        'address2',
        'country',
        'zip',
        'storage',
        'security_gateway'
    ];
}
