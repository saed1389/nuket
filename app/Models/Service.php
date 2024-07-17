<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Service extends Model
{
    use HasFactory;

    protected $fillable = [
        'title',
        'slug',
        'title_en',
        'slug_en',
        'title_fi',
        'slug_fi',
        'category',
        'description',
        'description_en',
        'description_fi',
        'image',
        'link',
        'support_video',
        'status'
    ];
}
