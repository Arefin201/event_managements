<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Notificaton extends Model
{
    /** @use HasFactory<\Database\Factories\NotificatonFactory> */
    use HasFactory;

    // Booking Table Ar Relation Eveent ()
    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
