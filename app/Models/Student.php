<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    use HasFactory;

    protected $fillable = [
        'first_name',
        'last_name',
        'email',
        'salary',
        'phone',
        'address',

    ];

    protected $casts = [
        'id' => 'integer',
        'first_name' => 'string',
        'last_name' => 'string',
        'email' => 'string',
        'salary' => 'string',
        'phone' => 'string',
        'address' => 'string',

    ];
    protected $hidden=[
        'created_at',
        'updated_at',
    ];
}