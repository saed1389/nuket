<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Setting extends Model
{
    use HasFactory;

    protected $fillable = [
        'logo',
        'about_us',
        'address',
        'phone',
        'whatsApp',
        'email',
        'facebook',
        'twitter',
        'instagram',
        'youtube',
        'bank_account'
    ];
}
