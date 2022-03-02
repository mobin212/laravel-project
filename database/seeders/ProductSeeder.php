<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
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
        //
        DB::table('products')->insert([
            [
            'name'=>'Oppo mobile',
            'price'=>'300',
            'descriotion'=>'Immersive, large 6.2-inch HD+ FullVision™ display',
            'category'=>'mobile',
            'gallery'=>'https://www.lg.com/us/images/cell-phones/md07522101/gallery/desktop-01.jpg',
            ],
            [
            'name'=>'Panasonic Tv',
            'price'=>'400',
            'descriotion'=>'Panasonic smart tv P22 2.0GHz Octa-Core Processor',
            'category'=>'tv',
            'gallery'=>'https://www.lg.com/ir/images/plp-b2c/plp-b2c-1/ir-curvedoledtv-categoryselector-3.jpg',
            ],
            [
            'name'=>'Soni Tv',
            'price'=>'500',
            'descriotion'=>'A tv with much more feacher',
            'category'=>'tv',
            'gallery'=>'https://www.lg.com/ir/images/plp-b2c/plp-b2c-1/ir-curvedoledtv-categoryselector-2.jpg',
            ],
            [
            'name'=>'LG Fridge',
            'price'=>'00',
            'descriotion'=>'A Fridge P22 2.0GHz Octa-Core Processor',
            'category'=>'Fridge',
            'gallery'=>'https://www.lg.com/ir/images/fridge-freezers/md06198856/gallery/D1.jpg',
            ]
        ]);
    }
}