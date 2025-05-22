<?php

namespace Database\Seeders;

use App\Models\Event;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class EventSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Event::create([
            "title"=> "Title 1",    
            "description"=> "Description 1",
            "start_time"=> now()->addDays(7),
            "end_time"=> now()->addDays(8),
        ]);
        Event::create([
            "title"=> "Title 2",    
            "description"=> "Description 2",
            "start_time"=> now()->addDays(7),
            "end_time"=> now()->addDays(8),
        ]);
        Event::create([
            "title"=> "Title 3",    
            "description"=> "Description 3",
            "start_time"=> now()->addDays(7),
            "end_time"=> now()->addDays(8),
        ]);
        Event::create([
            "title"=> "Title 4",    
            "description"=> "Description 4",
            "start_time"=> now()->addDays(7),
            "end_time"=> now()->addDays(8),
        ]);
    }
}
