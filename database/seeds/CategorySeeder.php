<?php

use Illuminate\Database\Seeder;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \App\Category::create([
            'key'=>'laptop',
            'name'=>'Laptop',
        ]);
        \App\Category::create([
            'key'=>'desktop',
            'name'=>'Desktop',
        ]);
        \App\Category::create([
            'key'=>'mobile',
            'name'=>'Mobile Phone',
        ]);
        \App\Category::create([
            'key'=>'electronics',
            'name'=>'Electronics',
        ]);
        \App\Category::create([
            'key'=>'fashion',
            'name'=>'Fashion',
        ]);
        \App\Category::create([
            'key'=>'book',
            'name'=>'Book',
        ]);
        \App\Category::create([
            'key'=>'biography',
            'name'=>'Biography',
            'parent_id'=>6
        ]);
        \App\Category::create([
            'key'=>'business',
            'name'=>'Business',
            'parent_id'=>6
        ]);
        \App\Category::create([
            'key'=>'cookbooks',
            'name'=>'Cookbooks',
            'parent_id'=>6
        ]);
        \App\Category::create([
            'key'=>'romance',
            'name'=>'Romance',
            'parent_id'=>6
        ]);
        \App\Category::create([
                    'key'=>'history',
                    'name'=>'History',
                    'parent_id'=>6
                ]);
        \App\Category::create([
                    'key'=>'story',
                    'name'=>'Story',
                    'parent_id'=>6
                ]);
        \App\Category::create([
                    'key'=>'bestsellers',
                    'name'=>'Best Sellers',
                    'parent_id'=>6
                ]);



    }
}
