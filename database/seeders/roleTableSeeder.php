<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class roleTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
     public function run()
    {
        $super_admin= \App\Models\Role::create([
            "name"=>"super_admin",
            "display_name"=>"super admin",
            "description"=>'All Role Acces'
        ]) ;
        $manager= \App\Models\Role::create([
            "name"=>"manager",
            "display_name"=>"manager",
            "description"=>'Some role Acces'
        ]) ;
        $user= \App\Models\Role::create([
            "name"=>"user",
            "display_name"=>"user",
            "description"=>'Now Role Acces'
        ]) ;
    }
}
