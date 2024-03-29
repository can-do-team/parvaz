<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Broadcast extends Model
{
    use HasFactory;


    protected $fillable = [
        'title',
        'address',
        'area',
        'time',
        'volume',
        'is_active',
    ];
}
