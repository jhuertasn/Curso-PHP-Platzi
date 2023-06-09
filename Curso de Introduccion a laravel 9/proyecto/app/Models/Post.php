<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasFactory;

    protected $fillable = [
        'title',
        'slug',
        'body',
    ];

    public function user()
    {
        //relaciones 
        //belongsto pertenece a Users
        return $this->belongsTo(User::class);
    }
}
