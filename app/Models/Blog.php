<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Blog extends Model
{
    use HasFactory;

    protected $fillable = [
        'blog_category_id',
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

    public function blogCategory(): BelongsTo {
        return $this->belongsTo(BlogCategory::class);
    }
}
