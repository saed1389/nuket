<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Teacher extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'slug',
        'category_id',
        'description',
        'description_en',
        'description_fi',
        'image',
        'support_video',
        'status'
    ];

    public function courses():HasMany {
        return $this->hasMany(Course::class);
    }

    public function category():BelongsTo
    {
        return $this->belongsTo(Category::class);
    }
}
