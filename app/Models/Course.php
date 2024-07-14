<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Course extends Model
{
    use HasFactory;

    protected $fillable = [
        'category_id',
        'teacher_id',
        'name',
        'slug',
        'name_en',
        'slug_en',
        'name_fi',
        'slug_fi',
        'description',
        'description_en',
        'description_fi',
        'rate',
        'level_id',
        'max_student',
        'price',
        'discount',
        'intro_video',
        'image',
        'course_start_date',
        'course_duration',
        'support_video',
        'featured',
        'status'
    ];

    public function category():BelongsTo {
        return $this->belongsTo(Category::class);
    }

    public function teacher():BelongsTo {
        return $this->belongsTo(Teacher::class);
    }

    public function level():BelongsTo {
        return $this->belongsTo(Level::class);
    }

    public function orderItems():HasMany
    {
        return $this->hasMany(OrderItem::class);
    }
}
