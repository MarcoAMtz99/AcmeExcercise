<?php

namespace Database\Seeders;
use Illuminate\Support\Facades\DB;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        DB::table('operadors')->insert([
        [
            'nombre' => 'James',
            'paterno' =>'Lewis',
            'materno' => '',
        ],
         [
            'nombre' => 'Paul',
            'paterno' =>'Gutierrez',
            'materno' => '',
        ],
         [
            'nombre' => 'Jack',
            'paterno' =>'Brown',
            'materno' => '',
        ],
         [
            'nombre' => 'Amy',
            'paterno' =>'Jones',
            'materno' => '',
        ],
         [
            'nombre' => 'Linda',
            'paterno' =>'Henderson',
            'materno' => '',
        ],
         [
            'nombre' => 'Mitchell',
            'paterno' =>'Huynh',
            'materno' => '',
        ],
         [
            'nombre' => 'Jacqueline',
            'paterno' =>'Sandoval',
            'materno' => '',
        ],
         [
            'nombre' => 'Brandon',
            'paterno' =>'Marshall',
            'materno' => '',
        ],
         [
            'nombre' => 'Albert',
            'paterno' =>'Smith',
            'materno' => '',
        ],
         [
            'nombre' => 'Abigail',
            'paterno' =>'Castillo',
            'materno' => 'DDS',
        ]
        ]
   );

         DB::table('direccions')->insert([[
            'street'=>'4889 Yorkie Lane',
			'city'=>'Climax',
			'spa'=>'Michigan',
			'phone'=>9128714199,
			'zipcode'=>49034
        ],
    	[
            'street'=>'492 Skips Lane',
			'city'=>'Casa',
			'spa'=>'Arkansas',
			'phone'=>9285308895,
			'zipcode'=>72025
        ],
        [
            'street'=>'1596 Cantebury Drive',
			'city'=>'Mineola',
			'spa'=>'New York',
			'phone'=>6465845030,
			'zipcode'=>11501
        ],
         [
            'street'=>'4313 Michael Street',
			'city'=>'Houston',
			'spa'=>'Texas',
			'phone'=>7138004735,
			'zipcode'=>77002
        ]
        ,
         [
            'street'=>'2928 Deer Haven Drive',
			'city'=>'Sterling',
			'spa'=>'Michigan',
			'phone'=>8643144183,
			'zipcode'=>48659
        ]
        ,
         [
            'street'=>'4787 Strother Street',
			'city'=>'Birmingham',
			'spa'=>'Alabama',
			'phone'=>2055855085,
			'zipcode'=>35203
        ]
        ,
         [
            'street'=>'3102 Hillhaven Drive',
			'city'=>'Los Angeles',
			'spa'=>'California',
			'phone'=>3239218567,
			'zipcode'=>90071
        ]
        ,
         [
            'street'=>'1151 Sampson Street',
			'city'=>'Denver',
			'spa'=>'Colorado',
			'phone'=>3036154879,
			'zipcode'=>80202
        ]
        ,
         [
            'street'=>'4622 Oliver Street',
			'city'=>'Plano',
			'spa'=>'Texas',
			'phone'=>8173636314,
			'zipcode'=>75074
        ]
        ,
         [
            'street'=>'195 Hamilton Drive',
			'city'=>'Port Arthur',
			'spa'=>'Texas',
			'phone'=>4099890696,
			'zipcode'=>77640
        ]
 ]

    );


    }
}
 


 
