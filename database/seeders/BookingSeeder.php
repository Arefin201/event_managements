<?php

namespace Database\Seeders;

use App\Models\Booking;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class BookingSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Booking::create([
            "user_id"=> 1,
            "event_id"=> 3,
            "quantity"=> 10,
            "total_price"=> 500,
            "status"=> "pending",
        ]);
         Booking::create([
            "user_id"=> 2,
            "event_id"=> 1,
            "quantity"=> 8,
            "total_price"=> 1500,
            "status"=> "confirmed",
        ]);
         Booking::create([
            "user_id"=> 3,
            "event_id"=> 2,
            "quantity"=> 4,
            "total_price"=> 500,
            "status"=> "cancelled",
        ]);
         Booking::create([
            "user_id"=> 4,
            "event_id"=> 4,
            "quantity"=> 10,
            "total_price"=> 5000,
            "status"=> "confirmed",
        ]);
    }
}
