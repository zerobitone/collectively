<?php

namespace App\Models;
use Illuminate\Database\Eloquent\Model;
class Contact extends Model
{
    protected $fillable = [
        'first_name', 'last_name', 'email', 'phone', 'customer_id'
    ];

    // TODO Beziehung zu Customer-Modell definieren
    public function customer()
    {
        return $this->belongsTo(Customer::class);
    }
}
