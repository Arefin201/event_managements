<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        
        User::create([
            'role'=> 'Admin',
            'name'=> 'admin',
            'email'=> 'admin@gmail.com',
            'password'=> Hash::make('admin@'),
        ]);
        User::create([
            'role'=> 'event_manager',
            'name'=> 'Event Manager',
            'email'=> 'event_manager@gmail.com',
            'password'=> Hash::make('event_manager@'),
        ]);
        User::create([
            'role'=> 'user',
            'name'=> 'User 1',
            'email'=> 'user1@gmail.com',
            'password'=> Hash::make('user1@'),
        ]);
        User::create([
            'role'=> 'user',
            'name'=> 'user 2',
            'email'=> 'user2@gmail.com',
            'password'=> Hash::make('user2@'),
        ]);
    }
}

