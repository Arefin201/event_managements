<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Event extends Model
{
    /** @use HasFactory<\Database\Factories\EventFactory> */
    use HasFactory;


    // Event Table Ar Relation ( One to Many) 
    public function bookings(){
        return $this->hasMany(Booking::class);
    }
    
}
