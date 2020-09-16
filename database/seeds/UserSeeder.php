<?php

use App\Model\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->truncate();
        User::create([
            'name'=>'Pradip Pokhrel',
            'email'=>'Pradip.Pokhrel25@gmail.com',
            'phone_number'=>'9864332324',
            'password'=>Hash::make('12345678')
        ]);
    }
}
