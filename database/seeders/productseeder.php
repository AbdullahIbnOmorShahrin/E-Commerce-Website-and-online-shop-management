<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class productseeder extends Seeder
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
                'name'=>'Dal',
            'price'=>'110',

            'category'=>'grocery',
            'description'=>'deshi moshur dal',
            'photo'=>'https://chaldn.com/_mpimage/moshur-dal-deshi-1-kg?src=https%3A%2F%2Feggyolk.chaldal.com%2Fapi%2FPicture%2FRaw%3FpictureId%3D47048&q=low&v=1'
            ],
            [
                'name'=>'soyabeen oil',
            'price'=>'160',

            'category'=>'grocery',
            'description'=>'soyabeen oil',
            'photo'=>'https://5.imimg.com/data5/SELLER/Default/2020/10/RC/II/CM/4400009/pure-soybean-cooking-oil-250x250.jpg'
            ],
            [
            'name'=>'dettol Soap',
            'price'=>'60',
            'category'=>'cleaning product',
            'description'=>'dettol soad 99% germ killer',
            'photo'=>'https://chaldn.com/_mpimage/dettol-original-bathing-bar-soap-75-gm?src=https%3A%2F%2Feggyolk.chaldal.com%2Fapi%2FPicture%2FRaw%3FpictureId%3D60288&q=low&v=1&m=400&webp=1'
        ],
            [
                'name'=>'harpic',
            'price'=>'180',

            'category'=>'cleaning product',
            'description'=>'500 gm harpic',
            'photo'=>'https://www.harpic.co.in/media/1369/perfect-clean.png'
            ]
        ],
        [
                'name'=>'Dal',
            'price'=>'110',

            'category'=>'grocery',
            'description'=>'deshi moshur dal',
            'photo'=>'https://chaldn.com/_mpimage/moshur-dal-deshi-1-kg?src=https%3A%2F%2Feggyolk.chaldal.com%2Fapi%2FPicture%2FRaw%3FpictureId%3D47048&q=low&v=1'
            ]
    );

    }
}
