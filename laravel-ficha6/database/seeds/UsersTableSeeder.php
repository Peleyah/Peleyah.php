<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use Illuminate\Foundation\Auth\User;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        
        $user = new User();
        $user->name = "mikas";
        $user->email= "mikas@teste.com";
        $user->password= Hash::make("123456789");
        $user->save();
        $user = new User();
        $user->name = "peleyah";
        $user->email= "peleyah@teste.com";
        $user->password= Hash::make("123456789");
        $user->save();
    }
}
