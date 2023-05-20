<?php

namespace App\Models;
use \Illuminate\Database\Eloquent\Model;
class Author extends Model
{
    protected $fillable = [
        'name', 'email', 'rating', 'level', 'experience'
    ];

    // TODO Define relationships to other models
    public function authorRatings()
    {
        return $this->hasMany(AuthorRating::class);
    }

    public function notes()
    {
        return $this->hasMany(Note::class);
    }
}
