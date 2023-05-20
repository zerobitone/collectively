<?php

namespace App\Models;
use Illuminate\Database\Eloquent\Model;

class AuthorRating extends Model
{
    protected $fillable = ['author_id', 'customer_id', 'rating', 'comment'];

    // TODO Define relationships to other models
    public function author()
    {
        return $this->belongsTo(Author::class);
    }

    public
    function customer()
    {
        return $this->belongsTo(Customer::class);
    }
}
