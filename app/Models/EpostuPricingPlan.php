<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class EpostuPricingPlan extends Model
{
    protected $fillable = [
        'name',
        'plan_id',
        'checked',
        'status'
    ];
}
