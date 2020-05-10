<?php

use Illuminate\Database\Seeder;
use App\product;
use App\Category;
use App\ProductImage;

class ProductsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        $categories= factory(Category::class, 5)->create();
        $categories->each(function($Category) {
        $products=factory(product::class, 10)->make();
        $Category->products()->saveMany($products);

            $products->each(function($p){
                $images=factory(ProductImage::class, 5)->make();
                $p->images()->saveMany($images);
        });
        });

        //model fatory
        /*factory(Category::class, 5)->create();
        factory(product::class, 50)->create();
        factory(ProductImage::class, 100)->create();
*/
    }
}
