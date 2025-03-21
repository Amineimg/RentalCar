<?php

namespace Database\Seeders;

use App\Constants\Constant;
use App\Models\Role;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class RoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        Constant::getRoles()->each(function($role){
            Role::updateOrCreate(["id"=>$role["id"]],[
                "role"=>$role["name"]
            ]);
        });
    }
}
