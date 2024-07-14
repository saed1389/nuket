<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Category extends Model
{
    use HasFactory;

    protected $table = 'categories';

    protected $fillable = [
        'name',
        'slug',
        'name_en',
        'slug_en',
        'name_fi',
        'slug_fi',
        'color',
        'image',
        'support_video',
        'status'
    ];

    public function courses():HasMany {
        return $this->hasMany(Course::class);
    }

    public function teachers():HasMany
    {
        return $this->hasMany(Teacher::class);
    }
}
