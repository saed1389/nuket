<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Additive extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'slug',
        'name_en',
        'slug_en',
        'name_fi',
        'slug_fi',
        'description',
        'description_en',
        'description_fi',
        'image',
        'support_video',
        'status'
    ];
}
