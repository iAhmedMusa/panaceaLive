<?php

use Illuminate\Database\Seeder;

class ProductsCategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('products_category')->delete();
        $values = array(
            [ 'cat_id' => 1, 'cat_name' => 'Bike', 'warranty_length' => '02-02-2023',  'created_at' => now(),'updated_at' => now() ],
            [ 'cat_id' => 2, 'cat_name' => 'Cosmetic', 'warranty_length' => '07-02-2024',  'created_at' => now(),'updated_at' => now() ],
            [ 'cat_id' => 3, 'cat_name' => 'Medicine', 'warranty_length' => '05-02-2025',  'created_at' => now(),'updated_at' => now() ],
            [ 'cat_id' => 4, 'cat_name' => 'Home Appliance', 'warranty_length' => '03-02-2026',  'created_at' => now(),'updated_at' => now() ]
        
        );
        DB::table('products_category')->insert($values);
    }
}