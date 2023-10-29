<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        User::factory(20)->create();
        User::create([
            'name' => 'Bagas Tri Reswara',
            'email' => 'reswarabagastri@gmail.com',
            'email_verified_at' => now(),
            'role' => 'admin',
            'phone' => '0895412499545',
            'bio' => 'Mahasiswa Teknik Informatika',
            'password' => Hash::make('12345'),
            
        ]);

        User::create([
            'name' => 'Super Admin',
            'email' => 'superadmin@gmail.com',
            'email_verified_at' => now(),
            'role' => 'superadmin',
            'phone' => '081234567891',
            'bio' => 'Laravel dev',
            'password' => Hash::make('12345'),
        ]);
    }
}
