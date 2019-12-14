<?php

use Illuminate\Database\Seeder;
use App\Role;
class RoleTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        $data = [['id' => '1', 'role'=>'Customer'],
        ['id' => '2', 'role'=>'Landlord'],
        ['id' => '3', 'role'=>'Property Evaluator'],
        ['id' => '4', 'role'=>'Super Admin'],
        ];

        Role::insert($data);
    }
}
