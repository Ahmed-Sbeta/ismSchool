<?php

use Illuminate\Database\Seeder;

class userSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      DB::table('users')->insert([
        'name' => 'ism',
        'email' => 'ism@ism.web',
        'password' => Hash::make('ism')
      ]);

      DB::table('registrations')->insert([
        'status' => NULL
      ]);

      DB::table('applicants')->insert([
        'name' => 'test',
        'phoneNumber' => '0920000000',
        'dob' => '2001-1-1',
        'seen' => 1
      ]);
    }
}
