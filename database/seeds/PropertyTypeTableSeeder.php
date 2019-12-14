<?php

use Illuminate\Database\Seeder;
use App\PropertyType;
class PropertyTypeTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        $data = [['id' => '1', 'property_type'=>'Duplex'],
        ['id' => '2', 'property_type'=>'Mini Flat'],
        ['id' => '3', 'property_type'=>'2 Bedroom Flat'],
        ['id' => '4', 'property_type'=>'3 Bedroom Flat'],
        ];

        PropertyType::insert($data);
    }
}
