<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
         // User Roles
        //  $roles = ['user', 'hospital', 'doctor'];

        //  foreach ($roles as $role) {
        //      // Create 2 users for each role
        //      for ($i = 1; $i <= 4; $i++) {
        //          DB::table('users')->insert([
        //              'name' => ucfirst($role) . $i,
        //              'email' => strtolower($role) . $i . '@example.com',
        //              'password' => Hash::make('12345678'), 
        //              'role' => $role,
        //              'created_at' => now(),
        //              'updated_at' => now(),
        //          ]);
        //      }
        //  }

        //  // User Seeder
        //  DB::table('users')->insert([
        //     'name' => 'User Name',
        //     'email' => 'user@example.com',
        //     'password' => bcrypt('password'),
        //     'role' => 'user',
        //     // Other fields...
        // ]);

      // Hospital Seeder
    //   $hospitalId = DB::table('hospitals')->insertGetId([
    //     'name' => 'مستشفى اربد التخصصي',
    //     'other_columns' => 'other_values',
    //     'created_at' => now(),
    //     'updated_at' => now(),
    // ]);

    // // Doctor Seeder
    // DB::table('users')->insert([
    //     'name' => 'مشعل محمد',
    //     'email' => 'doctor4@gmail.com',
    //     'password' => bcrypt('12345678'),
    //     'role' => 'doctor',
    //     'doctor_id' => 1,
    //     'hospital_id' => $hospitalId,
    //     'created_at' => now(),
    //     'updated_at' => now(),
    // ]);
}
}
