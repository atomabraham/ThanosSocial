<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasFactory;
    protected $fillable = [
        'text',
        'user_id',
        'user_name',
        'user_secondname',
        'user_profile',
    ];

    public function user()
    {
        return $this->belongsTo(User::class,'user_id');
    }

}
