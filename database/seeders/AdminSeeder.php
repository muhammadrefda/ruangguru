<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;

class AdminSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::create([
            'name' => 'Admin',
            'email' => 'admin@ruangguru.com',
            'email_verified_at' => now(),
            'password' => bcrypt('secret'),
            'phoneNumber' => '02178666',
        ]);
    }
}
