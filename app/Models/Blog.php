<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Blog extends Model
{
    protected $fillable = [
        'name'.
        'slug',
        'tag',
        'thumb_image',
        'main_image',
        'short_details',
        'details',
        'site_title',
        'meta_title',
        'meta_keyword',
        'meta_description',
        'status'
    ];
}
