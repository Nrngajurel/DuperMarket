<?php

use Illuminate\Database\Seeder;

class MenuItemSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \App\MenuItem::create([

        ])->each(function ($menuitem){

        });
    }
}
