<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class BlogCategory extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'slug',
        'name_en',
        'slug_en',
        'name_fi',
        'slug_fi',
        'support_video',
        'status'
    ];

    public function blogs():HasMany {
        return $this->hasMany(Blog::class);
    }
}
