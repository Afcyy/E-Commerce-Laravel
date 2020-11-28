<?php

use Illuminate\Database\Seeder;


class ProductsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        for($i = 1; $i <= 30; $i++){
            \App\Product::create([
                'name' => 'Laptop ' . $i,
                'slug' => 'laptop-' . $i,
                'details' => [13,14,15][array_rand([13,14,15])] . ' inch ' . [1,2,3][array_rand([1,2,3])] . ' TB SSD, ' . [8,16,32][array_rand([3,16,32])] . 'GB RAM',
                'price' => rand(149999,249999),
                'description' => 'Lorem' . $i . 'ipsum dolot sit amet, consectetur adipisicing elit, Upsum temoribus iusto ipsam seprios voluptas unde aspernatur praesentium in',
            ])->categories()->attach(1);
        }

        $product = \App\Product::find(1);
        $product->categories()->attach(2);

        for($i = 1; $i <= 9; $i++){
            \App\Product::create([
                'name' => 'iPhone ' . $i,
                'slug' => 'iphone-' . $i,
                'details' => [4,5,6][array_rand([4,5,6])] . ' inch ' . [64,128,256][array_rand([64,128,256])] . ' GB, ' . [2,3,4][array_rand([2,3,4])] . 'GB RAM',
                'price' => rand(109999,209999),
                'description' => 'Lorem' . $i . 'ipsum dolot sit amet, consectetur adipisicing elit, Upsum temoribus iusto ipsam seprios voluptas unde aspernatur praesentium in',
            ])->categories()->attach(3);
        }


    }
}
