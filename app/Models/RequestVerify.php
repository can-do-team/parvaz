<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class RequestVerify extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id',
        'file1',
        'file2',
        'is_verify',
    ];
}
