<?php

namespace App\Models;
use Illuminate\Database\Eloquent\Model;

class Role extends Model
{
    protected $fillable = [
        'name'
    ];

    // TODO Define relationships to other models
    public function users()
    {
        return $this->belongsToMany(User::class);
    }
}
