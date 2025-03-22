<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Appointment extends Model
{
    use HasFactory;

     protected $fillable = [
        'p_id',
        'p_name',
        'p_phone',
        'doctor',
        'date',
        'message',
    ];
}
