<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Doctor extends Model
{
    use HasFactory;

    protected $fillable = [
        'title',
        'category_id',
        'category_name',
        'long_description',
        'post_img',
        'slug',
    ];
}
