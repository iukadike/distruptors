<?php

use Illuminate\Database\Seeder;
use App\User;
use Illuminate\Support\Facades\Hash;
class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::create(['last_name'=>'admin', 'email'=>'admin@admin', 'password'=>Hash::make('password')]);
        // $data = [['id' => '1', 'name'=>'admin', 'email'=>'admin@admin',
        //         'password'=>Hash::make('password'), 'privilege_id'=> 1, 'user_active' => 1]];
        // User::insert($data);
    }
}
