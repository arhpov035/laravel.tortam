<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;

    protected $fillable = [
        "title",
        "preview",
        "description",
        "thumbnail",
        "price"
    ];

    public function comments()
    {
        $this->hasMany(Comment::class)->orderBy("created_at");
    }
}
