<?php

use Illuminate\Database\Seeder;
use App\ModeOfId;
class ModeIdTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        $data = [['id' => '1', 'mode_of_id'=>'International Passport'],
        ['id' => '2', 'mode_of_id'=>'Drivers License'],
        ['id' => '3', 'mode_of_id'=>'Voters Card'],
        ['id' => '4', 'mode_of_id'=>'National Identity Card'],
        ];

        ModeOfId::insert($data);
    }
}
