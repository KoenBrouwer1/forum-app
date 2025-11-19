<?php

namespace Database\Seeders;

use App\Models\User;
use App\Models\Topic;
use App\Models\Reply;
use App\Models\Subject;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
    */
    public function run(): void
    {
        
        User::factory()->create([
            'name' => 'Admin',
            'email' => 'admin@napper.com',
            'password' => ('admin1234'),
            'is_admin' => 1,
        ]);
        User::factory(10)->create();
        
        
        Subject::factory()->create([
            'subject' => 'Help',
        ]);
        Subject::factory()->create([
            'subject' => 'Gaming',
        ]);
        Subject::factory()->create([
            'subject' => 'PC Building',
        ]);
        Subject::factory()->create([
            'subject' => 'Hardware',
        ]);
        Subject::factory()->create([
            'subject' => 'Programming',
        ]);
        Subject::factory()->create([
            'subject' => 'Tech News',
        ]);
        Subject::factory()->create([
            'subject' => 'Game News',
        ]);
        Topic::factory(40)->create();
        Reply::factory(100)->create();
    }

}
