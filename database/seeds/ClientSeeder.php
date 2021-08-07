<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class ClientSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('clients')->insert([
            'name'=> Str::random(10),
    		'email'=> Str::random(10).'@gmail.com',
    		'number'=> '1234567890',
    		'dob'=> '2021-01-01',
    		'address'=> Str::random(10),
    		'gender'=> 'male',
    		'active_on_social'=> 0,
    		'currently'=> 'Student',
    		'status'=> 2,
    		'profile_image' => Str::random(10),
    		'password' => Hash::make(Str::random(10)),
        ]);
    }
}
