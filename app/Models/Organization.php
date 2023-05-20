<?php

namespace App\Models;
use Illuminate\Database\Eloquent\Model;

class Organization extends Model
{
    protected $fillable = [
        'name', 'industry', 'address', 'city', 'state', 'country', 'postal_code'
    ];
}
