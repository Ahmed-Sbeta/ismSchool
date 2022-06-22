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
        'name' => 'Ism',
        'email' => 'info@ismschool.com',
        'password' => Hash::make('IsmIsm')
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
