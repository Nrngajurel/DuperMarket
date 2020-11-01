<?php

use Illuminate\Database\Seeder;

class MenuSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \App\Menu::create([
            'name'=>'admin',
            'display_name'=>'Admin',
        ]);
        \App\Menu::create([
            'name'=>'main',
            'display_name'=>'Main Menu',
        ]);
    }
}
