<?php

namespace Database\Seeders;

use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Hash;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // User::factory(10)->create();

        User::firstOrcreate(
            ['email' => 'admin@example.com'],
            [
    'first_name' => 'admin',
    'middle_name' => '',
    'last_name' => 'admin',
    'username' => 'admin', // <-- add this line
    'password' => Hash::make('password'),
]
        );

        $this->call(ProductSeeder::class);

    }
}
