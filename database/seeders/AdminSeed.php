<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Admin;
use Faker\Generator;
use Hash;
use Illuminate\Support\Str;


class AdminSeed extends Seeder
{
   

    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $faker = app(Generator::class);

        Admin::create( [
            'firstname'         => 'Lin',
            'lastname'          => 'Wei',
            'email'             => 'superadmin@admin.com',
            'email_verified_at' => now(),
            'password'          => Hash::make('password'),
            'role'              => 'Superadmin',
            'remember_token'    => Str::random(10),
        ]);

        for ($i = 1; $i < 11; $i++) {
            $admin = Admin::create([
                'firstname'         => $i == 1 ? 'Akhilesh': $faker->firstname(),
                'lastname'          => $i == 1 ? 'Sahani': $faker->lastname(),
                'email'             => $i == 1 ? 'admin@admin.com' : $faker->unique()->safeEmail(),
                'email_verified_at' => now(),
                'password'          => Hash::make('password'),
                'role'              => 'Admin',
                'remember_token'    => Str::random(10),
            ]);
        }        
    }
}

