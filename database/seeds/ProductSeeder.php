<?php

use Illuminate\Database\Seeder;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(App\Product::class, 1000)->create()->each(function ($product) {
            $product->brand()->associate(\App\Brand::findOrFail(random_int(1,50)));
            $product->image()->create(['url'=>'product.jpg']);
            $product->save();
            $product->categories()->sync(rand(1,13));
            $product->categories()->sync(rand(1,13));
            $product->categories()->sync(rand(1,13));
            $product->categories()->sync(rand(1,13));
            $product->categories()->sync(rand(1,13));
            $product->tags()->sync(rand(1,50));
            $product->tags()->sync(rand(1,50));
            $product->tags()->sync(rand(1,50));
            $product->tags()->sync(rand(1,50));
            $product->tags()->sync(rand(1,50));

        });
    }
}
