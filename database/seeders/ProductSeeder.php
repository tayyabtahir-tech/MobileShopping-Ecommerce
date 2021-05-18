<?php

namespace Database\Seeders;
use Illuminate\Support\Facades\DB;

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
        //
        DB::table('products')->insert([
        [
        	'name'=>'LG LED',
        	'price'=>'27000',
        	'category'=>'LED',
        	'gallery'=>'https://www.whatprice.com.pk/images/-elec-/-home-/-tv-/-lg-/-thumb-/32LJ520U.jpg',
        	'description'=>'LG 32" 32LK610B HD'
        ],
        [
        	'name'=>'Audionic',
        	'price'=>'18000',
        	'category'=>'Headphones',
        	'gallery'=>'https://static-01.daraz.pk/p/715479849cf106bf501abaa070c93f72.jpg',
        	'description'=>'Over-The-Ear Headphones.'
        ],

    ]);
    }
}
