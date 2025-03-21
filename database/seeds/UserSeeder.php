<?php

namespace Database\Seeders;

use App\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use App\Constants\Constant;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $users=collect([
            [
                'role_id'=>Constant::super_admin_role,
                'first_name'=>'admin',
                'last_name'=>'admin',
                'username'=>'admin',
                'email'=>'admin@gmail.com',
                'is_active'=>1,
                'password'=>Hash::make('admins'),

            ],
        ]);

        $users->each(function($user){
            User::updateOrCreate(["email"=>$user["email"]],$user);
        });
    }
}
