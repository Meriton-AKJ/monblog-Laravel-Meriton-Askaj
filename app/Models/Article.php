<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Article extends Model
{
    use HasFactory;

    protected $fillable = ['user_id', 'title', 'content'];

    // Relation : un article appartient à un utilisateur
    public function user()
    {
        return $this->belongsTo(User::class);
    }
}