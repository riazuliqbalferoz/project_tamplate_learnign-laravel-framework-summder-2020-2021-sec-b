<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('products')->insert([
            [
                'name' => 'Redmi note 9 pro',
                'price' => '350',
                'category' => 'mobile',
                'description' => 'A smartphone with 6 GB ram and 128 gb rom',
                'gallery' => 'https://geniusmobile.lk/wp-content/uploads/2020/03/Redmi-Note-9-Pro-Genius-Mobile.png',
            ], [
                'name' => 'Panasonic Smart TV',
                'price' => '550',
                'category' => 'television',
                'description' => 'A smart tv',
                'gallery' => 'https://static1.nordic.pictures/12806998-thickbox_default/panasonic-tv-24-tx-24esw504.jpg',
            ], [
                'name' => 'Sony Smart TV',
                'price' => '500',
                'category' => 'television',
                'description' => 'A smart tv',
                'gallery' => 'https://www.clickbd.com/global/classified/item_img/511204_3_original.jpg',
            ], [
                'name' => 'LG refrigerator',
                'price' => '550',
                'category' => 'fridge',
                'description' => 'A good fridge',
                'gallery' => 'https://premierappliancestore.com/image/cache/data/Feb%202018/November%202018/stainless-steel-lg-electronics-french-door-refrigerators-lmxs30776s-a0_1000-800x800.jpg',
            ], [
                'name' => 'Whirlpool refrigerator',
                'price' => '549',
                'category' => 'fridge',
                'description' => 'A good fridge',
                'gallery' => 'https://n2.sdlcdn.com/imgs/a/7/i/Whirlpool-190-Ltrs-205-Im-SDL858573053-1-e320b.jpg',
            ],
        ]);
    }
}
