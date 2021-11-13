<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
class userTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
   public function run()
    {
        $admin= \App\Models\User::create([
            "name"=>"amor lembarki",
            "email"=>"dzamor72@gmail.com",
            "password"=>Hash::make('12345678')
        ]) ;
        $manager= \App\Models\User::create([
            "name"=>"manager",
            "email"=>"manager@gmail.com",
            "password"=>Hash::make('12345678')
        ]) ;
        $user= \App\Models\User::create([
            "name"=>"user",
            "email"=>"user@gmail.com",
            "password"=>Hash::make('12345678')
        ]) ;
         $admin->attachRole('super_admin');
        $manager->attachRole('manager');

          $user->attachRole('user');
 // $user->detachPermission($createPost);  $user->attachPermissionRole('user');

    }
}
