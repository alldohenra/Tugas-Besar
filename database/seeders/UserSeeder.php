<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Menambahkan data pengguna baru
        User::create([
            'name' => 'alldo',
            'email' => 'alldo@gmail.com',
            'password' => Hash::make('1234'),
            'profile_picture' => '',
        ]);
    }
    
}
