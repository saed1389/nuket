<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Workshop extends Model
{
    use HasFactory;

    protected $fillable = [
        'title',
        'slug',
        'title_en',
        'slug_en',
        'title_fi',
        'slug_fi',
        'description',
        'description_en',
        'description_fi',
        'image',
        'support_video',
        'status'
    ];
}
