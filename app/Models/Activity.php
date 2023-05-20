<?php

namespace App\Models;
use Illuminate\Database\Eloquent\Model;

class Activity extends Model
{
    protected $fillable = [
        'subject', 'due_date', 'completed', 'customer_id'
    ];

    // TODO Beziehung zu Customer-Modell definieren
    public function customer()
    {
        return $this->belongsTo(Customer::class);
    }
}
