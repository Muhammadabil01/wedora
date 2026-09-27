<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Template extends Model
{
    protected $fillable = [
        'slug',
        'name',
        'category',
        'price',
        'description',
        'image',
        'rating',
    ];
}