<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Gallery extends Model
{
    use HasFactory;

    protected $fillable = [
        'title',
        'title_en',
        'title_fi',
        'image',
        'video_link',
        'support_video',
        'status'
    ];
}
