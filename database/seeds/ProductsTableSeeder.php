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
        \App\Product::create([
            'name' => 'Laptop 1',
            'slug' => 'laptop-1',
            'details' => '13 inch, 1TB SSD, 16GB RAM',
            'price' => 149999,
            'description' => 'Lorem ipsum dolot sit amet, consectetur adipisicing elit, Upsum temoribus iusto ipsam seprios voluptas unde aspernatur praesentium in',
        ]);

        \App\Product::create([
            'name' => 'Laptop 2',
            'slug' => 'laptop-2',
            'details' => '13 inch, 1TB SSD, 16GB RAM',
            'price' => 149999,
            'description' => 'Lorem ipsum dolot sit amet, consectetur adipisicing elit, Upsum temoribus iusto ipsam seprios voluptas unde aspernatur praesentium in',
        ]);

        \App\Product::create([
            'name' => 'Laptop 3',
            'slug' => 'laptop-3',
            'details' => '13 inch, 1TB SSD, 16GB RAM',
            'price' => 149999,
            'description' => 'Lorem ipsum dolot sit amet, consectetur adipisicing elit, Upsum temoribus iusto ipsam seprios voluptas unde aspernatur praesentium in',
        ]);

        \App\Product::create([
            'name' => 'Laptop 4',
            'slug' => 'laptop-4',
            'details' => '13 inch, 1TB SSD, 16GB RAM',
            'price' => 149999,
            'description' => 'Lorem ipsum dolot sit amet, consectetur adipisicing elit, Upsum temoribus iusto ipsam seprios voluptas unde aspernatur praesentium in',
        ]);

        \App\Product::create([
            'name' => 'Laptop 5',
            'slug' => 'laptop-5',
            'details' => '13 inch, 1TB SSD, 16GB RAM',
            'price' => 149999,
            'description' => 'Lorem ipsum dolot sit amet, consectetur adipisicing elit, Upsum temoribus iusto ipsam seprios voluptas unde aspernatur praesentium in',
        ]);

        \App\Product::create([
            'name' => 'Laptop 6',
            'slug' => 'laptop-6',
            'details' => '13 inch, 1TB SSD, 16GB RAM',
            'price' => 149999,
            'description' => 'Lorem ipsum dolot sit amet, consectetur adipisicing elit, Upsum temoribus iusto ipsam seprios voluptas unde aspernatur praesentium in',
        ]);

        \App\Product::create([
            'name' => 'Laptop 7',
            'slug' => 'laptop-7',
            'details' => '13 inch, 1TB SSD, 16GB RAM',
            'price' => 149999,
            'description' => 'Lorem ipsum dolot sit amet, consectetur adipisicing elit, Upsum temoribus iusto ipsam seprios voluptas unde aspernatur praesentium in',
        ]);

        \App\Product::create([
            'name' => 'Laptop 8',
            'slug' => 'laptop-8',
            'details' => '13 inch, 1TB SSD, 16GB RAM',
            'price' => 149999,
            'description' => 'Lorem ipsum dolot sit amet, consectetur adipisicing elit, Upsum temoribus iusto ipsam seprios voluptas unde aspernatur praesentium in',
        ]);

        \App\Product::create([
            'name' => 'Laptop 9',
            'slug' => 'laptop-9',
            'details' => '13 inch, 1TB SSD, 16GB RAM',
            'price' => 149999,
            'description' => 'Lorem ipsum dolot sit amet, consectetur adipisicing elit, Upsum temoribus iusto ipsam seprios voluptas unde aspernatur praesentium in',
        ]);

    }
}
