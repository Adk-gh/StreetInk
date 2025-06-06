<?php

// app/Models/Tag.php
namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Tag extends Model
{
    use HasFactory;

    protected $fillable = ['name'];

    // Many-to-many with Post
    public function posts()
    {
        return $this->belongsToMany(Post::class);
    }
}
