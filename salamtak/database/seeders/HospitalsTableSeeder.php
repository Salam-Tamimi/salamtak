<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class HospitalsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
         // Get user ids with the role 'hospital'
        //  $userIds = DB::table('users')->where('role', 'hospital')->pluck('id');

         // Create hospital details for each user with the role 'hospital'
        //  foreach ($userIds as $userId) {
        //      DB::table('hospitals')->insert([
        //          'name' => 'Hospital Name',
        //          'location' => 'Hospital Location',
        //          'video' => 'hospital_video.mp4', 
        //          'virtual_tour' => 'virtual_tour_link', 
        //          'image' => 'hospital_image.jpg', 
        //          'user_id' => $userId,
        //          'created_at' => now(),
        //          'updated_at' => now(),
        //      ]);
        //  }
    }
}
