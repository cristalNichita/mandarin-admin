<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Courier extends Model
{
    use HasFactory;

    protected $fillable = [
        'first_name', 'last_name', 'second_name',
        'kitchen', 'phone', 'requisites',
        'type', 'password'
    ];

    protected $hidden = [
        'password',
    ];
}
