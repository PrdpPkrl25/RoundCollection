<?php

use App\User;
use Illuminate\Database\Seeder;
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
        factory(User::class,20)->create();
        User::create([
            'name'=>'Pradip Pokhrel',
            'email'=>'Pradip.Pokhrel25@gmail.com',
            'phone_number'=>'9864332324',
            'password'=>Hash::make('12345678')
        ]);
    }
}
