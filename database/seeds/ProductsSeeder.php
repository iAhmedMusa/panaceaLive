<?php

use Illuminate\Database\Seeder;

class ProductsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('products')->delete();
        $values = array(
            [ 'p_id' => 1, 'p_cat_id' => '1', 'p_name' => 'Honda CB150R', 'created_at' => now(),'updated_at' => now() ],
            [ 'p_id' => 2, 'p_cat_id' => '1', 'p_name' => 'Bajaj Discover', 'created_at' => now(),'updated_at' => now() ],
            [ 'p_id' => 3, 'p_cat_id' => '1', 'p_name' => 'Suzuki Gixxer', 'created_at' => now(),'updated_at' => now() ],
            [ 'p_id' => 4, 'p_cat_id' => '2', 'p_name' => 'Lakme Matt Lipstick', 'created_at' => now(),'updated_at' => now() ],
            [ 'p_id' => 5, 'p_cat_id' => '2', 'p_name' => 'Iconic Eye Shadow', 'created_at' => now(),'updated_at' => now() ],
            [ 'p_id' => 6, 'p_cat_id' => '2', 'p_name' => 'Maybelline Highlighter', 'created_at' => now(),'updated_at' => now() ],
            [ 'p_id' => 7, 'p_cat_id' => '3', 'p_name' => 'Rolac 20mg', 'created_at' => now(),'updated_at' => now() ],
            [ 'p_id' => 8, 'p_cat_id' => '3', 'p_name' => 'Maxpro 20mg', 'created_at' => now(),'updated_at' => now() ],
            [ 'p_id' => 9, 'p_cat_id' => '3', 'p_name' => 'Amoclav 1g', 'created_at' => now(),'updated_at' => now() ],
            [ 'p_id' => 10, 'p_cat_id' => '4', 'p_name' => 'Miako Convection Oven', 'created_at' => now(),'updated_at' => now() ],
            [ 'p_id' => 11, 'p_cat_id' => '4', 'p_name' => 'General Air Conditioner', 'created_at' => now(),'updated_at' => now() ],
            [ 'p_id' => 12, 'p_cat_id' => '4', 'p_name' => 'Vision 32” LED TV', 'created_at' => now(),'updated_at' => now() ],
        );
        DB::table('products')->insert($values);
    }
}