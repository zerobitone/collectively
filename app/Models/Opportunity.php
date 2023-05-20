<?php

namespace App\Models;
use Illuminate\Database\Eloquent\Model;

class Opportunity extends Model
{
    protected $fillable = [
        'name', 'amount', 'stage', 'customer_id'
    ];

    // TODO Beziehung zu Customer-Modell definieren
    public function customer()
    {
        return $this->belongsTo(Customer::class);
    }
}
