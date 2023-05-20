<?php

namespace App\Models;
use Illuminate\Database\Eloquent\Model;
class Note extends Model
{
    protected $fillable = [
        'content', 'author_id'
    ];

    // TODO Beziehung zu Author-Modell definieren
    public function author()
    {
        return $this->belongsTo(Author::class);
    }
}
