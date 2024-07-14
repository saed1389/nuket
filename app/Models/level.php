<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class level extends Model
{
    use HasFactory;

    protected  $fillable = [
        'name',
        'name_en',
        'name_fi',
        'status'
    ];

    public function courses():HasMany {
        return $this->hasMany(course::class);
    }
}
