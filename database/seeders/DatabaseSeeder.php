<?php

namespace Database\Seeders;

use App\Models\Job;
use App\Models\Tag;
use App\Models\User;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // User::factory(10)->create();

        User::factory()->create([
            'name' => 'Pepe',
            'email' => 'pepe@pp.com',
        ]);

//        Job::factory(14)->create();
//        Tag::factory(5)->create();

        $this->call(JobSeeder::class);

    }
}
