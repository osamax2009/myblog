<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use  Illuminate\Support\Facades\DB;

class ProductSeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        
        DB::table('products')->insert([
            'title'=> 'Trousers',
            'description'=>'A nice pair of trousers.',
            'price'=>  59.99,
            'imageUrl'=>
            'https://upload.wikimedia.org/wikipedia/commons/thumb/e/e8/Trousers%2C_dress_%28AM_1960.022-8%29.jpg/512px-Trousers%2C_dress_%28AM_1960.022-8%29.jpg',        ]);
         DB::table('products')->insert([
            'title'=> 'Yellow Scarf',
            'description'=>'Warm and cozy - exactly what you need for the winter.',
            'price'=> 29.99,
            'imageUrl'=>
            'https://live.staticflickr.com/4043/4438260868_cc79b3369d_z.jpg',        ]);
         DB::table('products')->insert([
            'title'=> 'A Pan',
            'description'=> 'Prepare any meal you want.',
            'price'=>49.99,
            'imageUrl'=>
            'https://upload.wikimedia.org/wikipedia/commons/thumb/1/14/Cast-Iron-Pan.jpg/1024px-Cast-Iron-Pan.jpg',        ]);
        
    }
}
