<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    use HasFactory;
    protected $fillable = ['name']; // Kolom yang bisa diisi selain id dan timestamps
    // Relasi one-to-many dengan Article
    public function articles()
    {
        return $this->hasMany(Article::class);
    }
}
