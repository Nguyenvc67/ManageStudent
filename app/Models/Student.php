<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    use HasFactory;

    protected $table = 'students';
    protected $fillable = [
        'full_name', 
        'dob', 
        'address', 
        'class_name', 
        'status', 
        'email', 
        'phone',
    ];
    public $timestamps = false;
}
