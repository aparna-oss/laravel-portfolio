<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Profile extends Model
{
    protected $fillable = [
        'id',
        'name',
        'designation',
        'short_description',
        'about',
        'email',
        'phone',
        'location',
        'profile_image',
        'location',
        'resume',
        'experience_years',
        'availability'
    ];
}
