<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     * @throws Exception
     */
    public function run()
    {
        \App\User::create([
            'name' => 'Mr. Narayan Gajurel',
            'email' => 'nrngajurel@gmail.com',
            'api_token'=>Str::random(80),
            'username'=>'nrngajurel',
            'email_verified_at' => now()->subHours(random_int(0,500)),
            'password' => Hash::make('nrngajurel'), // password
            'remember_token' => Str::random(10),
        ]);
        \App\User::first()->roles()->create(['name'=>'admin', 'display_name'=>'Admin']);
        factory(\App\User::class,50)->create();

    }
}
