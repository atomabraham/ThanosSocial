<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class User_Post extends Model
{
    use HasFactory;
    protected $fillable = [
        'user_id',
        'post_id',
        'user_username',
    ];

}
